<?php
namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Page;
use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller{
    public function index(){
        
        return view('index');
    }
}