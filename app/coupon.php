<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class coupon extends Model
{
    protected $fillable = ['title','code','value'];
}
