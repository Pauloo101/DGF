<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class operation extends Model
{
    public $guarded=[];

    public function products(){
        return $this->belongsToMany(Product::class)
            ->withPivot('rquantity','aquantity','status');

    }
}
