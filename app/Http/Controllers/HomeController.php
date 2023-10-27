<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\User;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Division;
use App\Models\District;
use App\Models\News;

class HomeController extends Controller
{
    public function Index(){
        $news = News::latest()->get();
        $mainslider = News::where('silerMain',1)->latest()->limit(5)->get();
        $silderLeft = News::where('silderLeft',1)->latest()->limit(2)->get();
        $silderRight = News::where('silderRight',1)->latest()->limit(2)->get();
        $political = News::where('political',1)->latest()->limit(10)->get();
        $world = News::where('world',1)->latest()->limit(10)->get();
        $education = News::where('education',1)->latest()->limit(10)->get();
        $medical = News::where('medical',1)->latest()->limit(10)->get();
        $fashion = News::where('fashion',1)->latest()->limit(4)->get();
        $travel = News::where('travel',1)->latest()->limit(4)->get();
        $commerce = News::where('commerce',1)->latest()->limit(4)->get();
        $featured = News::where('category',1)->latest()->limit(2)->get();
        $division = Division::orderBy('divisionName','ASC')->get();
        
        return view('frontend.index',compact('mainslider','silderLeft','silderRight','political','world','education','medical','fashion','travel','division','featured','commerce'));
    }

    public function NewsDetails($id,$slug){
        $news = News::FindOrFail($id);
        return view('frontend.news.newsDetails',compact('news'));
    }
    public function CategoryNews($id,$slug){
        $news = News::where('categoryId',$id)->latest()->get();
        return view('frontend.news.category',compact('news'));
    }
    public function DivisionNews($id,$slug){
        $news = News::where('divisionId',$id)->latest()->get();
        return view('frontend.news.division',compact('news'));
    }
}
