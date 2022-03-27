<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','content','size','material','product_type_id','launch_date','takedown_date','image_path'
    ];

    public function product_type(){
        return $this->hasOne('App\Models\product_type');
    }

}
