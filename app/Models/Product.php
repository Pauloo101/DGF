<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $fillable = ['name','price','quantity','category','sale_rep'];

    public function operations(){
        return $this->belongsToMany(operation::class)
            ->withPivot('rquantity','aquantity','status');
    }
}
