<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::all();
        return response()->view('cms.galleries.index' , compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->view('cms.galleries.create');
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
            'title' => 'required|string',
        ]);

          if(! $validator->fails()){
              $partners = new Gallery();
              $partners->title = $request->get('title');

              $isSaved = $partners->save();
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
        $galleries = Gallery::findOrFail($id);
        return response()->view('cms.galleries.edit' , compact('galleries'));
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
            'title' => 'required|string',
        ]);

        if (! $validator->fails()){

            $galleries = Gallery::findOrFail($id);
            $galleries->title = $request->get('title');

            $isUpdated = $galleries->save();
            return ['redirect' => route('galleries.index')];
            if($isUpdated){
                return response()->json(['icon' => 'success' , 'title' => 'نجح التعديل'] , 200);
            }
            else{
                return response()->json(['icon' => 'error' , 'title' => ' فشل التعديل'] , 400);

            }
        }
        else{
            return response()->json(['icon' => 'error' , 'title' => $validator->getMessageBag()->first()] , 400);
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
        //
    }
}