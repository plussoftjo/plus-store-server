<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $fillable = ['order_id','products_id','qty','total_price'];
    public $with = ['products','OrderItemDetails'];

    public function Order() {
        return $this->belongsTo('App\Order');
    }

    public function products() {
        return $this->belongsTo('App\products');
    }

    public function OrderItemDetails() {
        return $this->hasMany('App\OrderItemDetails');
    }

}
