<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'carts';
    protected $fillable = array('id','product_id','product_amount');
}
