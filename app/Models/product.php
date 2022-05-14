<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','product_type_id','image_path','Precautions','details_introduction'
    ];

    public function product_type(){
        return $this->belongsTo('App\Models\product_type');
    }

    public function product_image(){
        return $this->hasMany('App\Models\product_image');
    }

}
