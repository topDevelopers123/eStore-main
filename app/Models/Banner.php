<?php

namespace App\Models;
use App\Models\BannerImage;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $fillable=['title','slug','description','photo','status'];



    public function bannerImages(){
        return $this->hasOne(BannerImage::class,'banner_id');
    }
}
