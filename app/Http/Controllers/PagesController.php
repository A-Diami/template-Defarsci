<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Image;

use App\Models\Equipe;
use App\Models\Departement;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    public function apropos()
    {
        $equipes = Equipe::orderBy('updated_at', 'DESC')->get();
        return view('template.apropos', compact('equipes'));
    }

    public function projet()
    {
        return view('template.projet');
    }

    public function contribuez()
    {
        return view('template.contribuez');
    }

    public function equipe()
    {
        $equipes = Equipe::orderBy('updated_at', 'DESC')->get();
        return view('template.equipe', compact('equipes'));
    }

    public function departement()
    {
        $departements = Departement::all();
        $images = Image::all();
        return view('template.departement', compact('departements','images'));
    }

    public function contact()
    {
        return view('template.contact');
    }

    public function blog()
    {
        $posts = Blog::orderBy('updated_at', 'DESC')->get();
        return view('template.blog', compact('posts'));
    }

    public function show(Request $request, $post)
    {
       $post = Blog::where('slug',$post)->firstOrFail();
        return view('template.showBlog', compact('post'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
