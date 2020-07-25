<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderAccountDetail extends Model
{
    protected $fillable = ['order_id','name','phone','country','state','city','street_name','zip_code','location'];
}
