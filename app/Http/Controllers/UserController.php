<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('id' ,'desc')->paginate(5);

        return response()->view('cms.user.index' , compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->view('cms.user.create');

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
             'username' => 'unique:users'
          ] );

          if(! $validator->fails()){
              $users = new User();
              if (request()->hasFile('image')) {

                    $image = $request->file('image');

                    $imageName = time() . 'image.' . $image->getClientOriginalExtension();

                    $image->move('storage/images/user', $imageName);

                    $users->image = $imageName;
                    }
              $users->first_name = $request->get('first_name');
              $users->last_name = $request->get('last_name');
              $users->mobile = $request->get('mobile');
              $users->username = $request->get('username');
              $users->password = Hash::make($request->get('password'));


              $isSaved = $users->save();
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
        $users = User::findOrFail($id);
        return response()->view('cms.user.edit' , compact('users'));
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
            'username' => 'unique:users'
          ]);

          if(! $validator->fails()){
            $users =  User::findOrFail($id);
            if (request()->hasFile('image')) {

                $image = $request->file('image');

                $imageName = time() . 'image.' . $image->getClientOriginalExtension();

                $image->move('storage/images/user', $imageName);

                $users->image = $imageName;
                }
          $users->first_name = $request->get('first_name');
          $users->last_name = $request->get('last_name');
          $users->mobile = $request->get('mobile');
          $users->username = $request->get('username');
          $users->password = Hash::make($request->get('password'));

              $isUpdated = $users->save();
              return['redirect' => route ('users.index')];
              if($isUpdated){
                  return response()->json(['icon'=>'success' , 'title'=>"Created is successfully"],200);
              }else {
                  return response()->json(['icon'=>'Failed' , 'title'=>"Created is Failed"],400);
              }
          }else{
              return response()->json(['icon'=>'error' , 'title' => $validator->getUserBag()->first()],400);
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
            $users = User::destroy($id);
            return response()->json(['icon'=>'success' , 'title'=>"Deleted is successfully"],200);

        }

    }
