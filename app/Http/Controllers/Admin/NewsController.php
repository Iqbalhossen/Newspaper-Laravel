<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\User;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Division;
use App\Models\District;
use App\Models\News;
use Session;
use Image;

class NewsController extends Controller
{
    public function NewsManage(){
        $news = News::latest()->get();
        return view('backend.admin.news.manage_news',compact('news'));
    }

    public function AddNews(){

        $category = Category::orderBy('categoryName','ASC')->get();
        $subCategory = SubCategory::orderBy('subCategoryName','ASC')->get();
        $division = Division::orderBy('divisionName','ASC')->get();
        $district = District::orderBy('districtName','ASC')->get();
        $userId = session('loggedInUser');

        return view('backend.admin.news.add_news',compact('category','subCategory','division','district','userId'));
    }

    public function StoreNews(Request $request){

        $request->validate([
            'title' => 'required',
            'newsDetailsOne' => 'required',
            'imageThum' => 'required',
            'image' => 'required',
            
        ],[
            'title.required' => 'News title required',  
            'newsDetailsOne.required' => 'New Description required',       
            'imageThum.required' => 'Image Thumbnail required',  
            'image.required' => 'Image required',       
        ]);
        $image_one = $request->file('imageThum');
        $name_gen_one = hexdec(uniqid()).'.'.$image_one->getClientOriginalExtension();
        Image::make($image_one)->resize(584,444)->save('backend/upload/news/'.$name_gen_one);
 
        $save_url_one = 'backend/upload/news/'.$name_gen_one;
 
        $image_two = $request->file('image');
        $name_gen_two = hexdec(uniqid()).'.'.$image_two->getClientOriginalExtension();
        Image::make($image_two)->resize(728,399)->save('backend/upload/news/'.$name_gen_two);
 
        $save_url_two = 'backend/upload/news/'.$name_gen_two;

        $userId = session('loggedInUser');


        $data = array();

        $data['userId'] = $userId;
        $data['categoryId'] = $request->categoryId;
        $data['subCategoryId'] = $request->subCategoryId;
        $data['divisionId'] = $request->divisionId;
        $data['districtId'] = $request->districtId;
        $data['title'] = $request->title;
        $data['slug'] = strtolower(str_replace(' ', '-', $request->title));
        $data['newsDetailsOne'] = $request->newsDetailsOne;
        $data['newsDetailsTwo'] = $request->newsDetailsTwo;
        $data['newsDetailsThree'] = $request->newsDetailsThree;
        $data['imageThum'] = $save_url_one;
        $data['image'] = $save_url_two;
        $data['status'] = 1;
        $data['fb'] = 0;
        $data['sendGmail'] = 0;
        $data['silerMain'] = $request->silerMain;
        $data['silderLeft'] = $request->silderLeft;
        $data['silderRight'] = $request->silderRight;
        $data['category'] = $request->category;
        $data['political'] = $request->political;
        $data['wholeCountry'] = $request->wholeCountry;
        $data['world'] = $request->world;
        $data['education'] = $request->education;
        $data['medical'] = $request->medical;
        $data['fashion'] = $request->fashion;
        $data['travel'] = $request->travel;
        $data['sports'] = $request->sports;
        $data['commerce'] = $request->commerce;
        $data['entertainment'] = $request->entertainment;
        $data['lifestyle'] = $request->lifestyle;
        $data['jobs'] = $request->jobs;
        $data['Story'] = $request->Story;
        $data['metaTitle'] = $request->metaTitle;
        $data['metaAuthor'] = $request->metaAuthor;
        $data['metaKeyword'] = $request->metaKeyword;
        $data['metaDescription'] = $request->metaDescription;
        $data['googleAnalytics'] = $request->googleAnalytics;
        $data['titlePagination'] = $request->titlePagination;
        $data['metaDescriptionPagination'] = $request->metaDescriptionPagination;
        $data['created_at'] = carbon::now();
        // $data['created_at'] =  'EOS'.mt_rand(10000000,99999999);
        News::insert($data);
        $notification = array(
            'message' => 'News Inserted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('manage.news')->with($notification);
    }


    public function EditNews($id,$slug){

        $news = News::FindOrFail($id);

        $category = Category::orderBy('categoryName','ASC')->get();
        $subCategory = SubCategory::orderBy('subCategoryName','ASC')->get();
        $division = Division::orderBy('divisionName','ASC')->get();
        $district = District::orderBy('districtName','ASC')->get();

        return view('backend.admin.news.edit_news',compact('news', 'category', 'subCategory', 'division', 'district'));

    }


    public function UpdateNews(Request $request){

        $id = $request->id;
        $imageThum = $request->oldImageThum;
        $image = $request->oldImage;

        if($request->file('imageThum') && $request->file('image')){
            unlink($imageThum);
            unlink($image);

            $image_one = $request->file('imageThum');
            $name_gen_one = hexdec(uniqid()).'.'.$image_one->getClientOriginalExtension();
            Image::make($image_one)->resize(584,444)->save('backend/upload/news/'.$name_gen_one);
     
            $save_url_one = 'backend/upload/news/'.$name_gen_one;
     
            $image_two = $request->file('image');
            $name_gen_two = hexdec(uniqid()).'.'.$image_two->getClientOriginalExtension();
            Image::make($image_two)->resize(728,399)->save('backend/upload/news/'.$name_gen_two);
     
            $save_url_two = 'backend/upload/news/'.$name_gen_two;
    
            $userId = session('loggedInUser');
    
    
            $data = array();
    
            $data['userId'] = $userId;
            $data['categoryId'] = $request->categoryId;
            $data['subCategoryId'] = $request->subCategoryId;
            $data['divisionId'] = $request->divisionId;
            $data['districtId'] = $request->districtId;
            $data['title'] = $request->title;
            $data['slug'] = strtolower(str_replace(' ', '-', $request->title));
            $data['newsDetailsOne'] = $request->newsDetailsOne;
            $data['newsDetailsTwo'] = $request->newsDetailsTwo;
            $data['newsDetailsThree'] = $request->newsDetailsThree;
            $data['imageThum'] = $save_url_one;
            $data['image'] = $save_url_two;
            $data['status'] = 1;
            $data['fb'] = 0;
            $data['sendGmail'] = 0;
            $data['silerMain'] = $request->silerMain;
            $data['silderLeft'] = $request->silderLeft;
            $data['silderRight'] = $request->silderRight;
            $data['category'] = $request->category;
            $data['political'] = $request->political;
            $data['wholeCountry'] = $request->wholeCountry;
            $data['world'] = $request->world;
            $data['education'] = $request->education;
            $data['medical'] = $request->medical;
            $data['fashion'] = $request->fashion;
            $data['travel'] = $request->travel;
            $data['sports'] = $request->sports;
            $data['commerce'] = $request->commerce;
            $data['entertainment'] = $request->entertainment;
            $data['lifestyle'] = $request->lifestyle;
            $data['jobs'] = $request->jobs;
            $data['Story'] = $request->Story;
            $data['metaTitle'] = $request->metaTitle;
            $data['metaAuthor'] = $request->metaAuthor;
            $data['metaKeyword'] = $request->metaKeyword;
            $data['metaDescription'] = $request->metaDescription;
            $data['googleAnalytics'] = $request->googleAnalytics;
            $data['titlePagination'] = $request->titlePagination;
            $data['metaDescriptionPagination'] = $request->metaDescriptionPagination;
            $data['created_at'] = carbon::now();
            News::FindOrFail($id)->update($data);
            $notification = array(
                'message' => 'News Update Successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('manage.news')->with($notification);

        }elseif($request->file('imageThum')){
            unlink($imageThum);

            $image_one = $request->file('imageThum');
            $name_gen_one = hexdec(uniqid()).'.'.$image_one->getClientOriginalExtension();
            Image::make($image_one)->resize(584,444)->save('backend/upload/news/'.$name_gen_one);
     
            $save_url_one = 'backend/upload/news/'.$name_gen_one;
     
    
            $userId = session('loggedInUser');
    
    
            $data = array();
    
            $data['userId'] = $userId;
            $data['categoryId'] = $request->categoryId;
            $data['subCategoryId'] = $request->subCategoryId;
            $data['divisionId'] = $request->divisionId;
            $data['districtId'] = $request->districtId;
            $data['title'] = $request->title;
            $data['slug'] = strtolower(str_replace(' ', '-', $request->title));
            $data['newsDetailsOne'] = $request->newsDetailsOne;
            $data['newsDetailsTwo'] = $request->newsDetailsTwo;
            $data['newsDetailsThree'] = $request->newsDetailsThree;
            $data['imageThum'] = $save_url_one;
            $data['status'] = 1;
            $data['fb'] = 0;
            $data['sendGmail'] = 0;
            $data['silerMain'] = $request->silerMain;
            $data['silderLeft'] = $request->silderLeft;
            $data['silderRight'] = $request->silderRight;
            $data['category'] = $request->category;
            $data['political'] = $request->political;
            $data['wholeCountry'] = $request->wholeCountry;
            $data['world'] = $request->world;
            $data['education'] = $request->education;
            $data['medical'] = $request->medical;
            $data['fashion'] = $request->fashion;
            $data['travel'] = $request->travel;
            $data['sports'] = $request->sports;
            $data['commerce'] = $request->commerce;
            $data['entertainment'] = $request->entertainment;
            $data['lifestyle'] = $request->lifestyle;
            $data['jobs'] = $request->jobs;
            $data['Story'] = $request->Story;
            $data['metaTitle'] = $request->metaTitle;
            $data['metaAuthor'] = $request->metaAuthor;
            $data['metaKeyword'] = $request->metaKeyword;
            $data['metaDescription'] = $request->metaDescription;
            $data['googleAnalytics'] = $request->googleAnalytics;
            $data['titlePagination'] = $request->titlePagination;
            $data['metaDescriptionPagination'] = $request->metaDescriptionPagination;
            $data['created_at'] = carbon::now();
            News::FindOrFail($id)->update($data);
            $notification = array(
                'message' => 'News Update Successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('manage.news')->with($notification);

        }elseif($request->file('image')){
            unlink($image);
            $image_two = $request->file('image');
            $name_gen_two = hexdec(uniqid()).'.'.$image_two->getClientOriginalExtension();
            Image::make($image_two)->resize(728,399)->save('backend/upload/news/'.$name_gen_two);
     
            $save_url_two = 'backend/upload/news/'.$name_gen_two;
    
            $userId = session('loggedInUser');
    
    
            $data = array();
    
            $data['userId'] = $userId;
            $data['categoryId'] = $request->categoryId;
            $data['subCategoryId'] = $request->subCategoryId;
            $data['divisionId'] = $request->divisionId;
            $data['districtId'] = $request->districtId;
            $data['title'] = $request->title;
            $data['slug'] = strtolower(str_replace(' ', '-', $request->title));
            $data['newsDetailsOne'] = $request->newsDetailsOne;
            $data['newsDetailsTwo'] = $request->newsDetailsTwo;
            $data['newsDetailsThree'] = $request->newsDetailsThree;
            $data['image'] = $save_url_two;
            $data['status'] = 1;
            $data['fb'] = 0;
            $data['sendGmail'] = 0;
            $data['silerMain'] = $request->silerMain;
            $data['silderLeft'] = $request->silderLeft;
            $data['silderRight'] = $request->silderRight;
            $data['category'] = $request->category;
            $data['political'] = $request->political;
            $data['wholeCountry'] = $request->wholeCountry;
            $data['world'] = $request->world;
            $data['education'] = $request->education;
            $data['medical'] = $request->medical;
            $data['fashion'] = $request->fashion;
            $data['travel'] = $request->travel;
            $data['sports'] = $request->sports;
            $data['commerce'] = $request->commerce;
            $data['entertainment'] = $request->entertainment;
            $data['lifestyle'] = $request->lifestyle;
            $data['jobs'] = $request->jobs;
            $data['Story'] = $request->Story;
            $data['metaTitle'] = $request->metaTitle;
            $data['metaAuthor'] = $request->metaAuthor;
            $data['metaKeyword'] = $request->metaKeyword;
            $data['metaDescription'] = $request->metaDescription;
            $data['googleAnalytics'] = $request->googleAnalytics;
            $data['titlePagination'] = $request->titlePagination;
            $data['metaDescriptionPagination'] = $request->metaDescriptionPagination;
            $data['created_at'] = carbon::now();
            News::FindOrFail($id)->update($data);
            $notification = array(
                'message' => 'News Update Successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('manage.news')->with($notification);
        }else{
            
            $userId = session('loggedInUser');

            $data = array();
    
            $data['userId'] = $userId;
            $data['categoryId'] = $request->categoryId;
            $data['subCategoryId'] = $request->subCategoryId;
            $data['divisionId'] = $request->divisionId;
            $data['districtId'] = $request->districtId;
            $data['title'] = $request->title;
            $data['slug'] = strtolower(str_replace(' ', '-', $request->title));
            $data['newsDetailsOne'] = $request->newsDetailsOne;
            $data['newsDetailsTwo'] = $request->newsDetailsTwo;
            $data['newsDetailsThree'] = $request->newsDetailsThree;
            $data['status'] = 1;
            $data['fb'] = 0;
            $data['sendGmail'] = 0;
            $data['silerMain'] = $request->silerMain;
            $data['silderLeft'] = $request->silderLeft;
            $data['silderRight'] = $request->silderRight;
            $data['category'] = $request->category;
            $data['political'] = $request->political;
            $data['wholeCountry'] = $request->wholeCountry;
            $data['world'] = $request->world;
            $data['education'] = $request->education;
            $data['medical'] = $request->medical;
            $data['fashion'] = $request->fashion;
            $data['travel'] = $request->travel;
            $data['sports'] = $request->sports;
            $data['commerce'] = $request->commerce;
            $data['entertainment'] = $request->entertainment;
            $data['lifestyle'] = $request->lifestyle;
            $data['jobs'] = $request->jobs;
            $data['Story'] = $request->Story;
            $data['metaTitle'] = $request->metaTitle;
            $data['metaAuthor'] = $request->metaAuthor;
            $data['metaKeyword'] = $request->metaKeyword;
            $data['metaDescription'] = $request->metaDescription;
            $data['googleAnalytics'] = $request->googleAnalytics;
            $data['titlePagination'] = $request->titlePagination;
            $data['metaDescriptionPagination'] = $request->metaDescriptionPagination;
            $data['created_at'] = carbon::now();
            News::FindOrFail($id)->update($data);
            $notification = array(
                'message' => 'News Update Successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('manage.news')->with($notification);
        }


    }



// News Delete

    public function DeleteNews($id,$slug){

            $news = News::findOrFail($id);
            unlink($news->imageThum);
            unlink($news->image);
            News::findOrFail($id)->delete();
            $notification = array(
                'message' => 'News Delete Successfully',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
    }


    public function NewsInactive($id){
        News::findOrFail($id)->update(['status' => 0]);
        $notification = array(
           'message' => 'News Inactive',
           'alert-type' => 'error'
       );

       return redirect()->back()->with($notification);
    }


 public function NewsActive($id){
     News::findOrFail($id)->update(['status' => 1]);
        $notification = array(
           'message' => 'News Active',
           'alert-type' => 'success'
       );

       return redirect()->back()->with($notification);

    }


    public function GetSubCategory($categoryId){

        $subcat = SubCategory::where('categoryId',$categoryId)->orderBy('subCategoryName','ASC')->get();
        return json_encode($subcat);

    }

    public function GetDistrict($divisionId){

        $district = District::where('divisionId',$divisionId)->orderBy('districtName','ASC')->get();
        return json_encode($district);

    }
}
