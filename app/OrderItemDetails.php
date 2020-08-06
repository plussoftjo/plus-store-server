<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItemDetails extends Model
{
    protected $fillable = ['order_item_id','type','value'];

    public function OrderItem() {
        return $this->belongsTo('App\OrderItem');
    }
}
