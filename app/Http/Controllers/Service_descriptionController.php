<?php

namespace App\Http\Controllers;

use App\Models\Service_description;
use Illuminate\Http\Request;

class Service_descriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $service_descriptions = Service_description::withCount('service_images')->orderBy('id' ,'desc');


        if ($request->get('name')) {
            $service_descriptions = Service_description::where('name', 'like', '%' . $request->name . '%');
        }
        if ($request->get('description')) {
            $service_descriptions = Service_description::where('description', 'like', '%' . $request->code . '%');
        }

        $service_descriptions = $service_descriptions->paginate(5);

        return response()->view('cms.service_description.index' , compact('service_descriptions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->view('cms.service_description.create');
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
            'name' => 'required|string|min:3|max:50',

          ]);

          if(! $validator->fails()){
              $service_descriptions = new Service_description();
              $service_descriptions->name = $request->get('name');
              $service_descriptions->description = $request->get('description');

              $isSaved = $service_descriptions->save();
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
        $service_descriptions = Service_description::findOrFail($id);
        return response()->view('cms.service_description.edit' , compact('service_descriptions'));
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
            'name' => 'required|string|min:3|max:50',

          ]);

          if(! $validator->fails()){
              $service_descriptions = Service_description::findOrFail($id);
              $service_descriptions->name = $request->get('name');
              $service_descriptions->description = $request->get('description');

              $isUpdated = $service_descriptions->save();
              return['redirect' => route ('service_descriptions.index')];
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
        $service_descriptions = Service_description::destroy($id);
        return response()->json(['icon'=>'success' , 'title'=>"Deleted is successfully"],200);
    }
}