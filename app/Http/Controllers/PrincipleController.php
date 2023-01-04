<?php

namespace App\Http\Controllers;

use App\Models\Principle;
use Illuminate\Http\Request;

class PrincipleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $principles = Principle::all();
        return response()->view('cms.principle.index' , compact('principles'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->view('cms.principle.create' );
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
            'vision' => 'required|string',
            'message' => 'required|string',
            'philosophy' => 'required|string',
            'brief' => 'required|string'

        ]);

        if (! $validator->fails()){

            $principles = new Principle;
            $principles->vision = $request->get('vision');
            $principles->message = $request->get('message');
            $principles->philosophy = $request->get('philosophy');
            $principles->brief = $request->get('brief');
            $isUpdated = $principles->save();
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
        //
        $principles = Principle::findOrFail($id);
        return response()->view('cms.principle.edit' , compact('principles'));
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
        $validator = Validator($request->all() , [
            'vision' => 'required|string',
            'message' => 'required|string',
            'philosophy' => 'required|string',
            'brief' => 'required|string'

        ]);

        if (! $validator->fails()){

            $principles = Principle::findOrFail($id);
            $principles->vision = $request->get('vision');
            $principles->message = $request->get('message');
            $principles->philosophy = $request->get('philosophy');
            $principles->brief = $request->get('brief');
            $isUpdated = $principles->save();
            return ['redirect' => route('principles.index')];
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