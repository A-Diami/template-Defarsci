<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request){
        
        if($request->isMethod('post'))
        {
            $search = $request->get('search');
            $posts = Blog::where('title','LIKE','%'.$search. '%')->paginate(5);
            return view('template.blog', compact('posts'));
        }
       
    }
}
