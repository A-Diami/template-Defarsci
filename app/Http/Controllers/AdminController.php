<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Blog;

use Illuminate\Http\Request;

class AdminController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function login(){
        return view('admin.login');
    }

    
    public function dasboard(){
        $posts = Blog::all();
        return view('admin.dasboard', compact('posts'));
    }

  
}
