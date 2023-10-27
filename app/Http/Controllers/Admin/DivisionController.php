<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Division;
use Carbon\Carbon;

class DivisionController extends Controller
{
    public function DivisionManage(){
        $division = Division::orderBy('divisionName','ASC')->get();
        return view('backend.admin.division.manage_division',compact('division'));
       }
       public function DivisionStore(Request $request){
        $request->validate([
            'divisionName' => 'required',
            
        ],[
            'divisionName.required' => 'Input  Division  Name',         
        ]);
        $data = array();
        $data['divisionName'] = $request->divisionName;
        $data['slug'] = strtolower(str_replace(' ', '-', $request->divisionName));
        $data['created_at'] = carbon::now();
        Division::insert($data);
        $notification = array(
            'message' => 'Division Inserted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
       }
       public function EditDivision($id,$slug){
        $division = Division::FindOrFail($id);
        return view('backend.admin.division.edit_division',compact('division'));
       }
        public function UpdateDivision(Request $request){
            $oldId = $request->old_id;
            $data = array();
            $data['divisionName'] = $request->divisionName;
            $data['slug'] = strtolower(str_replace(' ', '-', $request->divisionName));
            $data['created_at'] = carbon::now();
            Division::FindOrFail($oldId)->update($data);
            $notification = array(
                'message' => 'Division Update Successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('manage.division')->with($notification);
    
        }
        public function DeleteDivision($id){
            Division::FindOrFail($id)->delete();
            $notification = array(
                'message' => 'Division Delete Successfully',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
}
