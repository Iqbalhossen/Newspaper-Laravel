<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Session;
use DB;

class AuthenticationController extends Controller
{
    public function Login(){
        if(session()->has('loggedInUser')){
        $userID = session('loggedInUser');
        $user = User::where('id', $userID)->first();
            if($user->role === 'admin'){
            return redirect('/admin/dashboard');
            }elseif($user->role === 'user'){
                return redirect('/user/dashboard');
            }else{
                return redirect('/');
            }
            
        }else{
            return view('auth.login');
        }
       
    }


    public function Forgot(){
        if(session()->has('loggedInUser')){
            $userID = session('loggedInUser');
            $user = User::where('id', $userID)->first();
                if($user->role === 'admin'){
                return redirect('/admin/dashboard');
                }elseif($tenant->role === 'user'){
                    return redirect('/user/dashboard');
                }else{
                    return redirect('/');
                }
        }else{
        return view('auth.users.forgot');
        }
    }

    // public function UserForgot(){
    //     $value = session('loggedInUser');
    //     dd($value);
    //     // return view('auth.forgot');
    // }


    public function LoginUser(Request $request){
        $validator =  Validator::make($request->all(),[

           'email' => 'required|email|max:100',
           'password' => 'required|min:6',

       ]);
      
           $user = User::where('email',$request->email)->first();
           if ($user) {
               if(Hash::check($request->password , $user->password)){
                

                if($user->role === 'admin'){
                    $request->session()->put('loggedInUser',$user->id);
                    $notification = array(
                        'message' => 'user not fount',
                        'alert-type' => 'error'
                    );
                    return redirect()->back()->with($notification);
                }elseif($user->role === 'user'){
                    $request->session()->put('loggedInUser',$user->id);
                    $notification = array(
                        'message' => 'user not fount',
                        'alert-type' => 'error'
                    );
                    return redirect()->route('home')->with($notification);
                }else{


                }
               }else{
                $notification = array(
                    'message' => 'password incourreted',
                    'alert-type' => 'error'
                );
                return redirect()->back()->with($notification);
               }           
        }else{
            $notification = array(
                'message' => 'user not fount',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
   
   }

   public function LogOut(){
    if(session()->has('loggedInUser')){
        session()->pull('loggedInUser');
        return redirect('/login');
    }
}
  
     public function dashboard(){
        return view('welcome');
     }
     public function AdminDashboard(){
        return view('admin.index');
     }
     
}
