<?php

namespace App\Http\Controllers;

use App\Models\Partner_Image;
use App\Models\PartnerImage;
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
        $partner_images = PartnerImage::orderBy('id' , 'asc')->simplePaginate(5);
        return response()->view('cms.partner_image.index', compact('partner_images'));
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

            $partner_images = new PartnerImage();
            if (request()->hasFile('image')) {

              $image = $request->file('image');
              $imageName = time() . 'image.' . $image->getClientOriginalExtension();
              $image->move('storage/images/partner_image', $imageName);
              $partner_images->image = $imageName;
              }

            $isSaved = $partner_images->save();
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
        $partner_images = PartnerImage::findOrFail($id);
        return response()->view('cms.partner_image.edit' , compact('partner_images'));
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

            $partner_images =  PartnerImage::findOrFail($id);
            if (request()->hasFile('image')) {

              $image = $request->file('image');

              $imageName = time() . 'image.' . $image->getClientOriginalExtension();

              $image->move('storage/images/main_image', $imageName);

              $partner_images->image = $imageName;
              }


            $isUpdated = $partner_images->save();
            return ['redirect' => route('partner_images.index')];
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
        $partner_images = PartnerImage::destroy($id);
        return response()->json(['icon'=>'success' , 'title'=>"Deleted is successfully"],200);
    }
}