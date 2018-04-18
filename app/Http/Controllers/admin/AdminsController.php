<?php

namespace App\Http\Controllers\admin;

use App\Http\Requests\AdminsRequest;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Validator;

class AdminsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $admins=User::all();
        return view('admin.admins.index',['admins'=>$admins]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.admins.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminsRequest $request)
    {
        $data=$request->all();
        User::create([
            'name'=>$data['name'],
            'email'=>$data['email'],
            'password'=>bcrypt($data['password']),
        ]);
        return redirect('admins/admins');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admin=User::Where('id',$id)->first(['id','name','email']);
        return view('admin.admins.edit',['old'=>$admin]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data=$request->all();
        $admin=User::Where('id',$id)->first(['email']);
        if($admin->email != $request->get('email')){
            $this->validate($request, [
                'email'=>'required|email|unique:users',
            ]);
            die();
        }
        if(!empty($data['password'])){
            $this->validate($request, [
                'password'=>'required|confirmed|min:6',
                'password_confirmation'=>'required',
            ]);
            User::where('id',$id)->update([
                'name'=>$data['name'],
                'email'=>$data['email'],
                'password'=>bcrypt($data['password']),
            ]);
        }else{
            User::where('id',$id)->update([
                'name'=>$data['name'],
                'email'=>$data['email'],
            ]);
        }
        return redirect('admins/admins');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
