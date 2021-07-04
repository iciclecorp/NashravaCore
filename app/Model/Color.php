<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Color extends Model
{
    protected $fillable = ['color_name',];

    public function user(){
       return $this->belongsTo(User::class,'created_by','id');
    }

    public function products(){
       return $this->hasMany(ProductColor::class,'color_id','id');
    }
}
