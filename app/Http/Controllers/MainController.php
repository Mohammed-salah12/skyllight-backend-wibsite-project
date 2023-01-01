<?php

namespace App\Http\Controllers;

use App\Models\Main;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mains = Main::all();
        return response()->view('cms.mains.index' , compact('mains'));
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
        $mains = Main::findOrFail($id);
        return response()->view('cms.mains.edit' , compact('mains'));
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
            // 'main_title' => 'required|string',
            // 'sub_title' => 'required|string',
            // 'video' => 'required|string'
        ]);

        if (! $validator->fails()){

            $mains = Main::findOrFail($id);
            $mains->main_title = $request->get('main_title');
            $mains->sub_title = $request->get('sub_title');
            $mains->video = $request->get('video');

            $isUpdated = $mains->save();
            return ['redirect' => route('mains.index')];
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