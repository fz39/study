<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function admin(){
        return view('admin/admin');
    }
    public function login(){
        return view('admin/login');
    }
}
