<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\imagegallery; 
use Image;


class imagegalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $imagegallery=imagegallery::orderBy('asc','creted_at')->paginate(4);
        return view('image/index')->with('imagegallery',$imagegallery );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('image/index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
         'title'=>'required',
         'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

         $imagegallery=new imagegallery;
         $imagegallery->title=$request->input('title');
        
  
         if($request->has('image')){
            echo 'hello';
            $image = $request->file('image');
            $filename=time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300,300)->save(public_path('/images'));
            $imagegallery->image = $filename;
            $imagegallery->save();

         }
         $imagegallery->save();

       
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return view(index);
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

    // public function upload(Request $request)
    // {

    // }
}
