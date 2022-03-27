<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_type extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','main_product_type_id'
    ];
    public function product(){
        return $this->belongToMany('App\Models\product');
    }
}

