<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MessageController extends Controller
{
    public function success(Request  $request, $con, $ac){
        return view('admin/success');
    }
    public function fail(Request  $request, $con, $ac){
        return view('admin/fail');
    }
}