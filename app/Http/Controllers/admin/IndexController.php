<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/4/10
 * Time: 17:38
 */

namespace App\Http\Controllers\admin;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    protected function index(){
        return view('admin.index');
    }
}