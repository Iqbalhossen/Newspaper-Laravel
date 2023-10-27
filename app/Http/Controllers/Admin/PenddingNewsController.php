<?php

namespace App\Http\Controllers\admin;

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

class PenddingNewsController extends Controller
{
    public function ReporterPending(){
        $news = News::where('status',3)->latest()->get();
        return view('backend.admin.pendding_news.reporter',compact('news'));
    }
    public function ReporterNewsApprove($id,$slug){
        News::findOrFail($id)->update(['status' => 1]);
           $notification = array(
              'message' => 'News Approve Successfull',
              'alert-type' => 'success'
          );
   
          return redirect()->back()->with($notification);
   
       }

       public function GuestPending(){
        $news = News::where('status',3)->latest()->get();
        return view('backend.admin.pendding_news.guest',compact('news'));
    }
     
    public function GuestNewsApprove($id,$slug){
        News::findOrFail($id)->update(['status' => 1]);
           $notification = array(
              'message' => 'News Approve Successfull',
              'alert-type' => 'success'
          );
   
          return redirect()->back()->with($notification);
   
       }

       public function UnApproved(){
        $news = News::where('status',3)->latest()->get();
        return view('backend.admin.pendding_news.unapproved',compact('news'));
    }
    
}
