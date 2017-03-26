<?php

namespace App;

use Faker\Provider\Base;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey='id';
    protected $table='products';
    protected $fillable = array('id','name','price');
}
