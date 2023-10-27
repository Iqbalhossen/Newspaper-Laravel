<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Category;

class CategoryController extends Controller
{
    public function CategoryManage(){
        $category = Category::orderBy('categoryName','ASC')->get();
        return view('backend.admin.category.manage_category',compact('category'));
    }

    public function CategoryStore(Request $request){

        $request->validate([
            'categoryName' => 'required',
            
        ],[
            'categoryName.required' => 'Input  Category  Name',         
        ]);
        $data = array();
        $data['categoryName'] = $request->categoryName;
        $data['slug'] = strtolower(str_replace(' ', '-', $request->categoryName));
        $data['created_at'] = carbon::now();
        Category::insert($data);
        $notification = array(
            'message' => 'Category Inserted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function EditCategory($id,$slug){
        $category = Category::FindOrFail($id);
        return view('backend.admin.category.edit_category',compact('category'));
    }

    public function UpdateCategory(Request $request){
        $old_id = $request->old_id;
        $request->validate([
            'categoryName' => 'required',
            
        ],[
            'categoryName.required' => 'Input  Category  Name',         
        ]);
        $data = array();
        $data['categoryName'] = $request->categoryName;
        $data['slug'] = strtolower(str_replace(' ', '-', $request->categoryName));
        $data['created_at'] = carbon::now();      
        Category::FindOrFail($old_id)->update($data);
        $notification = array(
            'message' => 'Category Update Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('categore.manage')->with($notification);

    }
  
    public function DeleteCategory($id,$slug){

        Category::FindOrFail($id)->delete();
        $notification = array(
            'message' => 'Category Delete Successfully',
            'alert-type' => 'error'
        );
        return redirect()->back()->with($notification);
    }

    // {{ url('product/details',$item->id.'/'.$item->product_slug_en) }}
    // $id,$slug
}
