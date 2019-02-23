<?php

namespace App\Models\Pivot;

use Illuminate\Database\Eloquent\Model;

class operation_product extends Model
{
    public $table = 'operation_product';
    public $fillable = ['operation_id','product_id','rquantity','aquantity','status'];
}
