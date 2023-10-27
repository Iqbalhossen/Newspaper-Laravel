<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user(){
    	return $this->belongsTo(User::class,'userId','id');
    }
    public function categoryShow(){
    	return $this->belongsTo(Category::class,'categoryId','id');
    }
    public function subCategory(){
    	return $this->belongsTo(subCategory::class,'subCategoryId','id');
    }
    public function division(){
    	return $this->belongsTo(Division::class,'divisionId','id');
    }
    public function district(){
    	return $this->belongsTo(District::class,'districtId','id');
    }
}
