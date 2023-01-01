<?php

namespace App\Http\Controllers;

use App\Models\Service_description;
use App\Models\Service_image;
use Illuminate\Http\Request;

class Service_ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service_images = Service_image::with('service_description')->orderBy('id' , 'desc')->simplePaginate(5);
        return response()->view('cms.service_image.index', compact('service_images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $service_descriptions = Service_description::all();
        return response()->view('cms.service_image.create', compact('service_descriptions'));
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

              $service_images = new Service_image();
              if (request()->hasFile('image')) {

                $image = $request->file('image');

                $imageName = time() . 'image.' . $image->getClientOriginalExtension();

                $image->move('storage/images/service_image', $imageName);

                $service_images->image = $imageName;
                }

              $service_images->image = $request->get('image');
              $service_images->serviceDescription_id = $request->get('serviceDescription_id');

              $isSaved = $service_images->save();
              if($isSaved){

                  return response()->json(['icon'=>'success' , 'title'=>"Created is successfully"],200);
              }else {
                  return response()->json(['icon'=>'Failed' , 'title'=>"Created is Failed"],400);
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
        $service_descriptions = Service_description::all();
        $service_images = Service_image::findOrFail($id);
        return response()->view('cms.city.edit' , compact('service_descriptions' , 'service_images'));
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

              $service_images =  Service_image::findOrFail($id);
              if (request()->hasFile('image')) {

                $image = $request->file('image');

                $imageName = time() . 'image.' . $image->getClientOriginalExtension();

                $image->move('storage/images/service_image', $imageName);

                $service_images->image = $imageName;
                }

              $service_images->image = $request->get('image');
              $service_images->serviceDescription_id = $request->get('serviceDescription_id');

              $isUpdated = $service_images->save();
              return ['redirect' => route('service_images.index')];
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
        $service_images = Service_image::destroy($id);
        return response()->json(['icon'=>'success' , 'title'=>"Deleted is successfully"],200);
    }
}