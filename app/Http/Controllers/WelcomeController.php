<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class WelcomeController extends Controller {

    public function index() {

//        //return "Hello World";
//        $data = [
//            '0' => [
//                'name' => 'Rashed',
//                'city' => 'Dhaka',
//                'country' => 'Bangladesh'
//            ],
//            '1' => [
//                'name' => 'Rashed',
//                'city' => 'Dhaka',
//                'country' => 'Bangladesh'
//            ]
//        ];
//
////        return view('demo', compact('data'));
////        return view('demo')->with('data', $data);
//
//        return view('demo', ['data' => $data]);

        $publishedProducts = Product::where('publicationStatus', 1)->get();

        return view('frontEnd.home.homeContent', ['publishedProducts' => $publishedProducts]);
    }

    public function category($id) {

        $publishedCategoryProducts = Product::where('categoryId', $id)
                ->where('publicationStatus', 1)
                ->get();

        return view('frontEnd.category.categoryContent', ['publishedCategoryProducts' => $publishedCategoryProducts]);
    }

    public function contact() {

        return view('frontEnd.contact.contactContent');
    }

    public function productDetails($id) {
        $productById = Product::where('id', $id)->first();
        return view('frontEnd.product.productContent', ['productById' => $productById]);
    }

}
