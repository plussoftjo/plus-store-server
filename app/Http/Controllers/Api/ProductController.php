<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\products;
use App\SubCategory;
class ProductController extends Controller
{
    public function getFromSectionId($id) {
        $products = products::with('translations')->where('sections_id',$id)->take(10)->get();

        return response()->json($products);
    }

    public function getFromCategoryId($id) {
        $products = products::with('translations')->where('categories_id',$id)->get();
        $sub_categories = SubCategory::with('translations')->where('categories_id',$id)->get();
        return response()->json([
            'products'=> $products,
            'sub_categories' => $sub_categories
        ]);
    }

    public function SearchProducts(Request $request) {
        $products = products::with('translations')->where('title','LIKE','%'.$request->title.'%')->get();

        return response()->json($products);
    }

    public function getFromSubCategoryId($id) {
        $products = products::with('translations')->where('sub_category_id',$id)->get();

        return response()->json($products);
    }
}
