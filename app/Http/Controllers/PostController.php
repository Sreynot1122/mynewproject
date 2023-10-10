<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    
    public function index(){
        //return view(view: 'post.index'); 
        return "This is an index function of conttroller!";
    }
    
    public function example(){
        return "This is an example 1 of controller post!";
    }
}
