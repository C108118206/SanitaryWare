<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_type extends Model
{
    use HasFactory;

    protected $table = 'product_type';

    protected $fillable = [
        'name','en_name','main_product_type_id','id','enabled','created_at','updated_at'
    ];
    public function product(){
        return $this->belongToMany('App\Models\product');
    }
}

