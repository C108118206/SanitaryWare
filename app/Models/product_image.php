<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_image extends Model
{
    use HasFactory;

    protected $table = "product_image";
    protected $fillable = [
        'image_path','product_id'
    ];

    public function product(){
        return $this->belongsTo('App\Models\product');
    }
}
