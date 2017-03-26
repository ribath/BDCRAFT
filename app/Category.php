<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends BaseModel
{
    protected $primaryKey = 'id';
    protected $table = 'categories';
    protected $fillable=array('id','name','price');
}
