<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/4/11
 * Time: 16:31
 */

namespace App\Http\Controllers\admin;


use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{
    public function index(){
        return view('admin.articles.index');
    }

}