<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
     public function RegisterUser(Request $request){

       $this->validate($request , [

           'type'=> 'required',
           'f_name'=> 'required|max:20',
           'l_name'=> 'required|max:20',
           'email'=> 'required|email|unique:users',
           'password'=> 'required|min:6'
       ]);

       $table = new User();

       $table->first_name = $request->input('f_name');
       $table->last_name = $request->input('l_name');
       $table->email = $request->input('email');
       $table->password = bcrypt($request->input('password'));
       $table->type = $request->input('type');

       $table->save();
       return redirect('/login');

     }



     public function LoginUser(Request $request){

       $this->validate($request , [

           'email'=> 'required|email',
           'password'=> 'required|min:6'
       ]);

       $data = $request->only('email','password');
       $email = $request->input('email');
       if(Auth::attempt($data)){
         $type = DB::table('users')->where('email', $email)->value('type');
         if($type == 'AD'){
           return redirect()->route('ad');
         }else if($type == 'NS'){
           return redirect()->route('ns');
         }else if($type == 'SS'){
           return redirect()->route('ss');
         }else{
           return redirect()->back()->with('message','Invalid User');
         }

       }
       return redirect()->back()->with('message','Login failed');
     }



     public function getAdminDB(){
       return view('admin');
     }

     public function getNSDB(){
       return view('normal_seller');
     }

     public function getSSDB(){
       return view('store_seller');
     }




     public function logout(){

       Auth::logout();
       Session::flush();
       return redirect('/')->with('message','Logged out');

     }

}
