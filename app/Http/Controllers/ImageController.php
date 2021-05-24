<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Departement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ImageController extends Controller
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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Image::all();
        $departements=Departement::all();
        return view('departement.index',compact('images','departements'));
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
        $request->validate([
            'image' => 'required',
            'departement_id' => 'required'
        ]);

        $image = new Image();
        //$equipe->user_id = Auth::user()->id;
        
       
        $imageName = null;
        
        
        if(request()->hasFile('image')){
            $uploadedImage = $request->file('image');
            $imageName = time() . '.' . $uploadedImage->getClientOriginalExtension();
            $destinationPath = public_path('/photo');
            $uploadedImage->move($destinationPath, $imageName);
            $uploadedImage->imagePath = $destinationPath . $imageName;
            
        }
        
        
       
        $image->image = $imageName;
        $image->departement_id = $request->departement_id;
        $image->save();
        //  $images=array();
        // if($files=$request->file('image')){
        //     foreach($files as $file){
        //         $name = $file->getClientOriginalName();
        //         $name = time().'.'.$file->getClientOriginalName();
        //         $file->move('photo',$name);
        //         $images[] = $name;
        //         Image::insert([
        //             'image' => $name,
        //             'departement_id' => $request->departement
        //         ]);
        //     }
        // }

     

        return back()->with('success', 'Image ajoutées!!!');
    }

    public function galerie(){
        $images = Image::all();
        $departements = Departement::all();
        return view('departement.galerie', compact('images','departements'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
        $images = Image::find($id);
        $departements = Departement::all();
        return view('departement.updateImage', compact('images','departements'));
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
        $image = Image::find($id);
        //dd($image);
        if ($request->hasFile('image')){
            $image_path = public_path("/photo".$image->image);
          
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
            $bannerImage = $request->file('image');
            $imgName = $bannerImage->getClientOriginalName();
            $destinationPath = public_path('/photo');
            $bannerImage->move($destinationPath, $imgName);
          } else {
            $imgName = $image->image;
          }
            $image->image= $imgName;
            $image->departement_id = $request->departement_id;
            $image->save();

            return $this->galerie();


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Image::where('id',$id)->delete();

        return $this->galerie();
    }
}
