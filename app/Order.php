<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['user_id','shipping_id','total','status','note'];
    public $with = ['OrderItem','shipping','OrderAccountDetail'];

    public function User() {
        return $this->belongsTo('App\User');
    }

    public function OrderItem() {
        return $this->hasMany('App\OrderItem');
    }

    public function shipping() {
        return $this->belongsTo('App\shipping');
    }

    public function OrderAccountDetail() {
        return $this->hasOne('App\OrderAccountDetail');
    }
}
