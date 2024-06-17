<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\student;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(){
        return view ("register");
    }

    public function postregister(Request $request){
        $existingemail= User::where('email',$request->email)->first();
    if($existingemail){
        return redirect()->back();
    }
   
    $user= new User;
    $user->firstname = $request->firstname;
    $user->lastname = $request->lastname;
     $user->email = $request->email;
      $user->password = $request->password;
      $user->role= $request->role;
      $user->status = 1;
      if($request->image){
        $ext=$request->image->getClientOriginalExtension();
        $newFilename= time().'.'.$ext;
       $request->image->move(public_path().'/upload/user',$newFilename);
       $user->image=$newFilename;
       $user->save();

      
      }
      $user->save();
      $role = $request->role;
 
        if($request->role === 'student'){
            $student = new student;
            $student->firstname = $request->firstname;
            $student->lastname = $request->lastname;
             $student->email = $request->email;
              $student->password = $request->password;
            
              $student->status = 1;
              if($request->image){
                $ext=$request->image->getClientOriginalExtension();
                $newFilename= time().'.'.$ext;
               $request->image->move(public_path().'/upload/student',$newFilename);
               $student->image=$newFilename;
               $student->save();
           }
           $student->save();
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
