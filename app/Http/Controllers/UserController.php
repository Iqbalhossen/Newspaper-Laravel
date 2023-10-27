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

class UserController extends Controller
{

    public function UserRegister(){
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
        return view('auth.user.register');
        }
    }

    public function UserSave(Request $request){


        $validator =  Validator::make($request->all(),[
   
               'name' => 'required|max:20',
               'email' => 'required|email|unique:users|max:100',
               'password' => 'required|min:6',
               'cpassword' => 'required|min:6|same:password'
   
           ],[
               'cpassword.same' => 'password did not match',
               'cpassword.required' => 'confirm password is required',
           ]);
   
        if($validator->fails()){
           return response()->json([
               'status' => 400,
               'message' => $validator->getMessageBag(),
           ]);
        }else{
           $user = new User();
           $user->name = $request->name;
           $user->email = $request->email;
           $user->password = Hash::make($request->password);
           $user->save();
           return response()->json([
               'status' => 200,
               'message' => 'Register Successfully',
           ]);
        }
   
       }



      

  
       
}
