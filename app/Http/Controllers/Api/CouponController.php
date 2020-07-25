<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\coupon;
use App\UserCouponUsed;
class CouponController extends Controller
{
    public function check_coupon(Request $request) {
        $coupon = coupon::where('code',$request->code)->first();
        if($coupon) {
            if(UserCouponUsed::where('user_id',$request->user_id)->where('coupon_id',$coupon->id)->first()) {
                return response()->json([
                'valid' => false
                ]);
            }else {
                return response()->json([
                    'valid' => true,
                    'coupon' => $coupon
                ]);
            }
        }else {
            return response()->json([
                'valid' => false
            ]);
        }
    }

    public function register_used_coupon_to_user(Request $request) {
        $coupon = UserCouponUsed::create([
            'coupon_id' => $request->coupon_id,
            'user_id' => $request->user_id
        ]);
    }
}
