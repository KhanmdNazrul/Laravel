<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
function index(){
    $data = ['title'=>'Welcome Home Mr.!', 'content'=>'There\'s nothing happening in my mind'];
    $data['fruits']=["Apple", "Banana", "Orange", "Grape"];
    return view('home',$data);
}
function about(){
    return view('about');
}

function contact(){
    return view('contact');
}

}
