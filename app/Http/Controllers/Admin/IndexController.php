<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{

    public function __construct()
    {
        return view()->share('title','后台管理系统');

    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * 后台首页
     * @author xueyi
     * @time 2017-11-30
     */
    public function index(){
        return view('admin.index');
    }
}
