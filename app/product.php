<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class product extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'Product';
    protected $fillable = ['p_code','p_name','p_weight','p_stock','p_price','p_type','p_choice1','p_choice2'];
   
}
