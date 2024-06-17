<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function login(){
        return view ('Auth/login');
    }
    public function postlogin(Request $request){
       $email= $request->input('email');
        $password= $request->input('password');
        $user= DB::table('users')->where('email',$email)->first();
     if(!$user){
        return redirect()->back();
     }
     $name = $user->firstname;
     $email = $user->email;
     session(['user_name' => $name, 'user_email' => $email]);
  
     $userid = $user->id;
     Session::put('userid' , $userid);
       
     
                                       
     return view ('Dashboard.dashboard');
  
    }
  
    public function logout(Request $request) {
        $request->session()->flush();
      
  
        return redirect()->to('/login');
    }
}
