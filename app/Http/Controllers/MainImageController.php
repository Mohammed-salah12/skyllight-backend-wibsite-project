<?php

namespace App\Http\Controllers;

use App\Models\Main_Image;
use Illuminate\Http\Request;

class MainImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $main_images = Main_Image::orderBy('id' , 'desc')->simplePaginate(5);
        return response()->view('cms.main_image.index', compact('main_images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->view('cms.main_image.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator($request->all() , [

        ]);

        if(! $validator->fails()){

            $main_images = new Main_Image();
            if (request()->hasFile('image')) {

              $image = $request->file('image');

              $imageName = time() . 'image.' . $image->getClientOriginalExtension();

              $image->move('storage/images/main_image', $imageName);

              $main_images->image = $imageName;
              }


            $isSaved = $main_images->save();
            if($isSaved){

                return response()->json(['icon'=>'success' , 'title'=>"تم الحفظ بنجاح"],200);
            }else {
                return response()->json(['icon'=>'Failed' , 'title'=>"فشل الحفظ"],400);
            }
        }else{
            return response()->json(['icon'=>'error' , 'title' => $validator->getMessageBag()->first()],400);
        }
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
        $main_images = Main_Image::findOrFail($id);
        return response()->view('cms.main_image.edit' , compact('main_images'));
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
        $validator = Validator($request->all() , [

        ]);

        if(! $validator->fails()){

            $main_images =  main_Image::findOrFail($id);
            if (request()->hasFile('image')) {

              $image = $request->file('image');

              $imageName = time() . 'image.' . $image->getClientOriginalExtension();

              $image->move('storage/images/main_image', $imageName);

              $main_images->image = $imageName;
              }


            $isUpdated = $main_images->save();
            return ['redirect' => route('main_images.index')];
            if($isUpdated){

                return response()->json(['icon'=>'success' , 'title'=>"Created is successfully"],200);
            }else {
                return response()->json(['icon'=>'Failed' , 'title'=>"Created is Failed"],400);
            }
        }else{
            return response()->json(['icon'=>'error' , 'title' => $validator->getMessageBag()->first()],400);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $main_images = Main_Image::destroy($id);
        return response()->json(['icon'=>'success' , 'title'=>"Deleted is successfully"],200);
    }
}
