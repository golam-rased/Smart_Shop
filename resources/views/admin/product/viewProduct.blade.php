@extends('admin.master')

@section('title')
Product Details
@endsection

@section('content')
<hr>
<h3 class="text-center text-success">{{Session::get('message')}}</h3>
<hr/>

<table class="table table-bordered table-hover">
    

    <tr>
        <th>Product Id</th>
        <th>{{$productById->id}}</th>
    </tr>
    <tr>
        <th>Product Name</th>
        <th>{{$productById->productName}}</th>
    </tr>
    <tr>
        <th>Category Name</th>
        <th>{{$productById->categoryName}}</th>
    </tr>
    <tr>
        <th>Manufacturer Name</th>
        <th>{{$productById->manufacturersName}}</th>
    </tr>
    <tr>
        <th>Product Price</th>
        <th>{{$productById->productPrice}}</th>
    </tr>
    <tr>
        <th>Product Quantity</th>
        <th>{{$productById->productQuantity}}</th>
    </tr>
    <tr>
        <th>Product Short Description</th>
        <th>{!!$productById->productShortDescription!!}</th>
    </tr>
    <tr>
        <th>Product Long Description</th>
        <th>{!!$productById->productLongDescription!!}</th>
    </tr>
    <tr>
        <th>Product Image</th>
        <th><img src="{{asset($productById->productImage)}}" alt="{{$productById->productName}}" height="200" width="300" /></th>
    </tr>
    <tr>
        <th>Publication Status</th>
        <th>{{$productById->publicationStatus==1? 'Published': 'Unpublished'}}</th>
    </tr>
    

</table>

@endsection
