<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAuthController extends Controller
{
    public function showLogin(){
        return response()->view('cms.auth.login' );
    }

    public function login(Request $request){

        $validator = Validator($request->all() ,[
            'username' => 'required|string' ,
            'password' => 'required|string',
        ] , [
            'username.exsit' => 'اسم المستخدم غير موجود'
        ]);

        $credintials =[
            'username' => $request->get('username'),
            'password' => $request->get('password'),
        ] ;
        if(! $validator->fails()){
            if(Auth::guard($request->get('guard'))->attempt($credintials ,  $request->get('remember_me'))){
                return response()->json(['icon' => 'success' , 'title' =>'تمت عملية تسجيل الدخول' ] , 200);
            }
            else {
                return response()->json(['icon' => 'error' , 'title' =>'فشلت عملية تسجيل الدخول' ] , 400);

            }
        }
        else{
            return response()->json(['icon' => 'error' , 'title' =>$validator->getMessageBag()->first() ] , 400);
        }

    }

    public function logout(Request $request){
        // $guard = auth('user')->check() ? 'admin' : 'author';
        Auth::guard('user')->logout();
        $request->session()->invalidate();
        return redirect()->route('view.login');
        // return redirect()->route('/button_users');


    }

    public function editProfile(){

    }

    public function UpdateProfile(){

    }

    public function editPassword(){


    }

    public function changePassword(){

    }
}