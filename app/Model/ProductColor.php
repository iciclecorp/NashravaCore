<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProductColor extends Model
{
    public function product(){
       return $this->belongsTo(Product::class,'product_id','id');

    }

    public function color(){
       return $this->belongsTo(Color::class,'color_id','id');

    }
}
