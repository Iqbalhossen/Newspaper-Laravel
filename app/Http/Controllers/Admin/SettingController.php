<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Setting;
use Image;

class SettingController extends Controller
{
    public function Setting(){
        $setting  = Setting::first();
        return view('backend.admin.setting.setting',compact('setting'));

    }

    public function UpdateSetting(Request $request){

        $oldId = $request->old_id;
        $favicon = $request->oldFavicon;
        $logo = $request->oldLogo;

       

        if($request->file('favicon') && $request->file('logo')){
            

            $image_one = $request->file('favicon');
            $name_gen_one = hexdec(uniqid()).'.'.$image_one->getClientOriginalExtension();
            Image::make($image_one)->resize(80,80)->save('backend/upload/setting/'.$name_gen_one);
     
            $save_url_one = 'backend/upload/setting/'.$name_gen_one;
     
            $image_two = $request->file('logo');
            $name_gen_two = hexdec(uniqid()).'.'.$image_two->getClientOriginalExtension();
            Image::make($image_two)->resize(193,45)->save('backend/upload/setting/'.$name_gen_two);
     
            $save_url_two = 'backend/upload/setting/'.$name_gen_two;

            $data = array();
            $data['title'] = $request->title;
            $data['favicon'] = $save_url_one;
            $data['logo'] = $save_url_two;
            $data['about'] = $request->about;
            $data['address'] = $request->address;
            $data['phone'] = $request->phone;
            $data['email'] = $request->email;
            $data['facebook'] = $request->facebook;
            $data['youtube'] = $request->youtube;
            $data['twitter'] = $request->twitter;
            $data['pinterest'] = $request->pinterest;

            Setting::FindOrFail($oldId)->update($data);

            $notification = array(
                'message' => 'Site Setting Update Successfully',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
    

        }elseif($request->file('favicon')){

            unlink($favicon);

            $image_one = $request->file('favicon');
            $name_gen_one = hexdec(uniqid()).'.'.$image_one->getClientOriginalExtension();
            Image::make($image_one)->resize(80,80)->save('backend/upload/setting/'.$name_gen_one);
     
            $save_url_one = 'backend/upload/setting/'.$name_gen_one;
     
            
            $data = array();
            $data['title'] = $request->title;
            $data['favicon'] = $save_url_one;
            $data['about'] = $request->about;
            $data['address'] = $request->address;
            $data['phone'] = $request->phone;
            $data['email'] = $request->email;
            $data['facebook'] = $request->facebook;
            $data['youtube'] = $request->youtube;
            $data['twitter'] = $request->twitter;
            $data['pinterest'] = $request->pinterest;

            Setting::FindOrFail($oldId)->update($data);

            $notification = array(
                'message' => 'Site Setting Update Successfully',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);

        }elseif($request->file('logo')){
            unlink($logo);

            $image_two = $request->file('logo');
            $name_gen_two = hexdec(uniqid()).'.'.$image_two->getClientOriginalExtension();
            Image::make($image_two)->resize(193,45)->save('backend/upload/setting/'.$name_gen_two);
     
            $save_url_two = 'backend/upload/setting/'.$name_gen_two;

            $data = array();
            $data['title'] = $request->title;
            $data['logo'] = $save_url_two;
            $data['about'] = $request->about;
            $data['address'] = $request->address;
            $data['phone'] = $request->phone;
            $data['email'] = $request->email;
            $data['facebook'] = $request->facebook;
            $data['youtube'] = $request->youtube;
            $data['twitter'] = $request->twitter;
            $data['pinterest'] = $request->pinterest;

            Setting::FindOrFail($oldId)->update($data);

            $notification = array(
                'message' => 'Site Setting Update Successfully',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        }else{       
            $data = array();
            $data['title'] = $request->title;
            $data['about'] = $request->about;
            $data['address'] = $request->address;
            $data['phone'] = $request->phone;
            $data['email'] = $request->email;
            $data['facebook'] = $request->facebook;
            $data['youtube'] = $request->youtube;
            $data['twitter'] = $request->twitter;
            $data['pinterest'] = $request->pinterest;

            Setting::FindOrFail($oldId)->update($data);

            $notification = array(
                'message' => 'Site Setting Update Successfully',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        }
        
        


    }
    
}
