<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\District;
use App\Models\Division;
use Carbon\Carbon;

class DistrictController extends Controller
{
    public function DistrictManage(){
        $district = District::orderBy('districtName','ASC')->get();
        $division = Division::orderBy('divisionName','ASC')->get();
        return view('backend.admin.district.manage_district',compact('district','division'));
    }
    public function DistrictStore(Request $request){
        $request->validate([
            'divisionId' => 'required',
            'districtName' => 'required',
            
        ],[
            'divisionId.required' => 'Select  Division  Name',  
            'districtName.required' => 'Input  District  Name',       
        ]);
        $data = array();
        $data['divisionId'] = $request->divisionId;
        $data['districtName'] = $request->districtName;
        $data['slug'] = strtolower(str_replace(' ', '-', $request->districtName));
        $data['created_at'] = carbon::now();
        District::insert($data);
        $notification = array(
            'message' => 'District Inserted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function EditDistrict($id,$slug){
        $district = District::FindOrFail($id);
        $division = Division::orderBy('divisionName','ASC')->get();
        return view('backend.admin.district.edit_district',compact('district','division'));
    }
    public function UpdateDistrict(Request $request){
        $oldId = $request->oldId;
        $data = array();
        $data['divisionId'] = $request->divisionId;
        $data['districtName'] = $request->districtName;
        $data['slug'] = strtolower(str_replace(' ', '-', $request->districtName));
        $data['created_at'] = carbon::now();
        District::FindOrFail($oldId)->update($data);
        $notification = array(
            'message' => 'District Upadate Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('manage.district')->with($notification);
    }
    public function DeleteDistrict($id,$slug){
        District::FindOrFail($id)->delete();
        $notification = array(
            'message' => 'District delete Successfully',
            'alert-type' => 'error'
        );
        return redirect()->back()->with($notification);
    }
}
