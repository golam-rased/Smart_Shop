<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use DB;
use Illuminate\Support\Facades\Redirect;

class CartController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addToCart(Request $request) {
        $quantity = $request->quantity;
        $productId = $request->productId;
        $productInfo = DB::table('products')
                        ->where('id', $productId)->first();

//        echo '<pre>';
//        print_r($productInfo);
        Cart::add(['id' => $productInfo->id, 'name' => $productInfo->productName, 'qty' => $quantity, 'price' => $productInfo->productPrice, 'options' => ['productImage' => $productInfo->productImage]]);

        return Redirect::to('/cart/show');
    }

    public function showCart() {

        return view('frontEnd.cart.showCart');
    }

    public function updateCart(Request $request) {
        $rowId = $request->rowId;
        $qty = $request->qty;
        Cart::update($rowId, $qty);
        return view('frontEnd.cart.showCart');
    }

    public function deleteCart($rowId) {

        Cart::remove($rowId);
        return view('frontEnd.cart.showCart');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
