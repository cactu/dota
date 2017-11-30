<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;

class IndexController extends Controller
{

    public function index(){
        return view('home.index');
    }

    public function snake(){
        return view('home.snake');
    }

}
