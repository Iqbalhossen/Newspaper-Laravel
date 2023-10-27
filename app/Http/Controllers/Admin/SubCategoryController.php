<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubCategory;
use App\Models\Category;
use Carbon\Carbon;

class SubCategoryController extends Controller
{
    public function SubCategoryManage(){
        $SubCategory = SubCategory::orderBy('subCategoryName','ASC')->get();
        $category = Category::orderBy('categoryName','ASC')->get();
        return view('backend.admin.sub_category.manage_sub_category',compact('SubCategory','category'));
    }

       public function SubCategoryStore(Request $request){
        $request->validate([
            'categoryId' => 'required',
            'subCategoryName' => 'required',
            
        ],[
            'categoryId.required' => 'Select  Category  Name',
            'subCategoryName.required' => 'Input Sub  Category  Name',           
        ]);
        $data=array();
        $data['categoryId'] = $request->categoryId;
        $data['subCategoryName'] = $request->subCategoryName;
        $data['slug'] = strtolower(str_replace(' ', '-', $request->subCategoryName));
        $data['created_at'] = carbon::now();
        SubCategory::insert($data);
            $notification = array(
                'message' => 'Sub Category Inserted Successfully',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
       }
    
       public function EditSubCategory($id,$slug){
        $SubCategory = SubCategory::FindOrFail($id);
        $category = Category::orderBy('categoryName','ASC')->get();
        return view('backend.admin.sub_category.edit_sub_category',compact('SubCategory','category'));
       }
    
       public function UpdateSubCategory(Request $request){
           $old_id = $request->old_id;
        // $request->validate([
        //     'category_id' => 'required',
        //     'sub_category_name' => 'required',
            
        // ],[
        //     'category_id.required' => 'Select  Category  Name',
        //     'sub_category_name.required' => 'Input Sub  Category  Name',           
        // ]);
        $data=array();
        $data['categoryId'] = $request->categoryId;
        $data['subCategoryName'] = $request->subCategoryName;
        $data['slug'] = strtolower(str_replace(' ', '-', $request->subCategoryName));
        $data['created_at'] = carbon::now();
        SubCategory::FindOrFail($old_id)->update($data);
            $notification = array(
                'message' => 'Sub Category Update Successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('subcategore.manage')->with($notification);
       }
       
       public function DeleteCategory($id,$slug){
        SubCategory::FindOrFail($id)->delete();
        $notification = array(
            'message' => 'Sub Category Delete Successfully',
            'alert-type' => 'error'
        );
        return redirect()->back()->with($notification);
    }
}
