<?php

namespace App\Http\Controllers;

use App\Models\Partner_Image;
use Illuminate\Http\Request;

class PartnerImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partners_images = Partner_Image::orderBy('id' , 'desc')->simplePaginate(5);
        return response()->view('cms.partner_image.index', compact('partners_images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->view('cms.partner_image.create');

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

            $partners_images = new Partner_Image();
            if (request()->hasFile('image')) {

              $image = $request->file('image');
              $imageName = time() . 'image.' . $image->getClientOriginalExtension();
              $image->move('storage/images/partners_image', $imageName);
              $partners_images->image = $imageName;
              }

            $isSaved = $partners_images->save();
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
        $partners_images = Partner_Image::findOrFail($id);
        return response()->view('cms.partner_image.edit' , compact('partners_images'));
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

            $partners_images =  Partner_Image::findOrFail($id);
            if (request()->hasFile('image')) {

              $image = $request->file('image');

              $imageName = time() . 'image.' . $image->getClientOriginalExtension();

              $image->move('storage/images/main_image', $imageName);

              $partners_images->image = $imageName;
              }


            $isUpdated = $partners_images->save();
            return ['redirect' => route('partners_images.index')];
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
        $partners_images = Partner_Image::destroy($id);
        return response()->json(['icon'=>'success' , 'title'=>"Deleted is successfully"],200);
    }
}
