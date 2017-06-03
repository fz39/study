<?php

namespace App\Http\Controller\Admin;

use App\Http\Controllers\Controller;
use App\Page;
use App\Http\Requests;
use Illuminate\Http\Request;

class AdminController extends Controller{
    /**
     * 后台登录
     */
    public function login(){

        return view('login');
    }

}