<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\categories;
use App\sliders;
use App\products;
use App\sections;
use App\shipping;
use App\Currency;
use App\SubCategory;
use App\traffic;
use App\Notification;
class MainController extends Controller
{
    public function index() {
        /** Return All the main objects */

        // Categories 
        $categories = categories::with('translations')->get();
        //sliders
        $sliders = sliders::where('its_ads',0)->get();
        //Ads 
        $ads = sliders::where('its_ads',1)->get();
        //Products
        $recent_products = products::with('translations')->take(10)->get();
        // Sections 
        $sections = sections::with('translations')->get();

        $shipping = shipping::with('translations')->get();

        // Currency
        $currencies = Currency::get();

        //notification 
        $notification = Notification::get();

        // Return 
        return response()->json(['categories' => $categories,'sliders' => $sliders,'recent_products' => $recent_products,'sections' => $sections,'shipping' => $shipping,'currencies' => $currencies,'ads'=>$ads,'notification' => $notification]);
    }


    public function AppleCategoryFilter(Request $request) {
       $products = products::with('translations')->where('categories_id',$request->categoryId)->get();
       $sub_categories = SubCategory::with('translations')->where('categories_id',$request->categoryId)->get();
       return response()->json([
           'products' => $products,
           'sub_categories'=>$sub_categories
       ]);
    }

    public function store_traffic() {
       $traffic = traffic::count();

       if($traffic >= 1) {
           $is = traffic::first();
           $count = $is->value + 1;
           traffic::where('id',$is->id)->update(['value' => $count]);
       }else {
           traffic::create([
               'value' => 1
           ]);
       }
    }
}
