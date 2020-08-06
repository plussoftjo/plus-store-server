<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Order;
use App\OrderAccountDetail;
use App\OrderItem;
use App\OrderItemDetails;
class OrderController extends Controller
{
    public function store_new_order(Request $request) {
        /** Store New Order
         * @ Store Order
         * @ Store Order Items
         * @ Store Order Account Details
         */

         // First Get all the props 

        /** Order Props
         * @ user_id,shipping_id,total,status,note
         */
         
         $user_id = $request->user_id;
         $shipping_id = $request->shipping_id;
         $total = $request->total;
         $note = $request->note;
         $status = 'Progress';

         // Save Order -> to Database 
         $order = Order::create([
             'user_id' => $user_id,
             'shipping_id' => $shipping_id,
             'total' => $request->total,
             'note' => $request->note,
             'status' => $status
         ]);

         /** Order Complete  */
        
         /** Order Address Information */
         /**
          * Get Address Props first
          */

        $address_details = $request->address_details;
        $location = $request->location;

        // Save To Store 
        $OrderAccountDetails = OrderAccountDetail::create([
            'order_id' => $order->id,
            'name' => $address_details['name'],
            'phone' => $address_details['phone'],
            'country' => $address_details['country'],
            'state' => $address_details['state'],
            'city' => $address_details['city'],
            'street_name' => $address_details['street_name'],
            'zip_code' => $address_details['zip_code'],
            'location' => $location
        ]);


        /** Order Items */
        /**
         * Loop Items After Register string
         */
        $order_items = $request->order_items;

        foreach ($order_items as $item) {
            $OrderItems = OrderItem::create([
                'order_id' => $order->id,
                'products_id' => $item['id'],
                'qty' => $item['qty'],
                'total_price' => $item['amount'] * $item['qty']
            ]);

            if($item['extras']['color'] !== '') {
                $orderItemsDetails = OrderItemDetails::create([
                    'order_items_id' => $OrderItems->id,
                    'type' => 'color',
                    'value' => $item['extras']['color']
                ]);
            }
            if($item['extras']['size'] !== '') {
                $orderItemsDetails = OrderItemDetails::create([
                    'order_items_id' => $OrderItems->id,
                    'type' => 'size',
                    'value' => $item['extras']['size']
                ]);
            }
            
        }

        return response()->json(['order' => $order]);

    }
}
