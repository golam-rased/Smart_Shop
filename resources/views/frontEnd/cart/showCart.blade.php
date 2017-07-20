@extends('frontEnd.master')

@section('title')
Show Cart
@endsection

@section('mainContent')

<div class="checkout">
    <div class="container">
        <h3>My Shopping Bag</h3>
        <div class="table-responsive checkout-right animated wow slideInUp" data-wow-delay=".5s">
            <table class="timetable_sub">
                <?php
                $cartContents = Cart::content();
//                echo'<pre>';
//                print_r($cartContents);
                ?>
                <thead>
                    <tr>
                        <th>Remove</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                    </tr>
                </thead>
                @foreach($cartContents as $cartContent)

                <tr class="rem1">
                    <td class="action">
                        
                        <a href="{{url('/cart/delete/'.$cartContent->rowId)}}">Delete Item</a>
                        
                    </td>
                    <td class="invert-image"><a href="single.html"><img src="images/w4.png" alt=" " class="img-responsive" />{{$cartContent->name}}</a></td>
                    <td class="invert">{{$cartContent->price}}
                    </td>
                    <td class="invert">
                        {!! Form::open(['url'=>'/cart/update', 'method'=> 'POST', 'class'=> 'form-horizontal']) !!}
                        <input type="text" name="qty" value="{{$cartContent->qty}}">
                        <input type="text" hidden="" name="rowId" value="{{$cartContent->rowId}}">
                        <button class="btn-group"type="submit">
                            <span>Update</span>
                        </button>
                        {!! Form::close() !!}
                    </td>
                    <td class="invert">{{$cartContent->price*$cartContent->qty}}</td>
                </tr>

                @endforeach
                <tr class="rem1">
                    <td class="invert"></td>
                    <td class="invert"></td>
                    <td class="invert"></td>
                    <td class="invert">Total Amount Without tax</td>
                    <td class="invert">{{Cart::subtotal()}}</td>
                </tr>
                <tr class="rem1">
                    <td class="invert"></td>
                    <td class="invert"></td>
                    <td class="invert"></td>
                    <td class="invert">Grand Total</td>
                    <td class="invert">{{Cart::total()}}</td>
                </tr>
            </table>
        </div>
        <div class="checkout-left">	

            <div class="checkout-right-basket animated wow slideInRight" data-wow-delay=".5s">
                <a href="mens.html"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Back To Shopping</a>
                <a href="mens.html"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Checkout</a>
            </div>
            <div class="checkout-left-basket animated wow slideInLeft" data-wow-delay=".5s">
                <h4>Shopping basket</h4>
                <ul>
                    <li>Hand Bag <i>-</i> <span>$45.99</span></li>
                    <li>Watches <i>-</i> <span>$45.99</span></li>
                    <li>Sandals <i>-</i> <span>$45.99</span></li>
                    <li>Wedges <i>-</i> <span>$45.99</span></li>
                    <li>Total <i>-</i> <span>$183.96</span></li>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
@endsection