@extends('admin.master')
@section('title')
Edit Product
@endsection
@section('content')

<div class="row">
    <div class="col-lg-12">
        <h3 style="text-align: center">{{Session::get('message')}}</h3>
        <hr/>
        <div class="well">
            {!! Form::open(['url'=>'product/update', 'method'=> 'POST', 'class'=> 'form-horizontal', 'enctype'=>'multipart/form-data', 'name'=>'editProductForm']) !!}

            <div class="form-group">

                <label for="inputEmail3" class="col-sm-2 control-label">Product Name</label>
                <div class="col-sm-10">
                    <input type="text" name="productName" class="form-control" value="{{$productById->productName}}"/>
                    <input type="hidden" name="productId" class="form-control" value="{{$productById->id}}"/>
                    <span class="text-danger">{{$errors->has('productName') ? $errors->first('productName') : ''}}</span>
                </div>
            </div>
            <div class="form-group">

                <label for="inputEmail3" class="col-sm-2 control-label">Category Name</label>
                <div class="col-sm-10">
                    <select class="form-control" name="categoryId">

                        <option value="">Select Category Name</option>
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->categoryName}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group">

                <label for="inputEmail3" class="col-sm-2 control-label">Manufacturer Name</label>
                <div class="col-sm-10">
                    <select class="form-control" name="manufacturerId">

                        <option value="">Select Manufacturer Name</option>
                        @foreach($manufacturers as $manufacturer)
                        <option value="{{$manufacturer->id}}">{{$manufacturer->manufacturersName}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group">

                <label for="inputEmail3" class="col-sm-2 control-label">Product Price</label>
                <div class="col-sm-10">
                    <input type="number" name="productPrice" class="form-control" value="{{$productById->productPrice}}"/>
                    <span class="text-danger">{{$errors->has('productPrice') ? $errors->first('productPrice') : ''}}</span>
                </div>
            </div>
            <div class="form-group">

                <label for="inputEmail3" class="col-sm-2 control-label">Product Quantity</label>
                <div class="col-sm-10">
                    <input type="number" name="productQuantity" class="form-control" value="{{$productById->productQuantity}}"/>
                    <span class="text-danger">{{$errors->has('productQuantity') ? $errors->first('productQuantity') : ''}}</span>
                </div>
            </div>
            <div class="form-group">

                <label for="inputEmail3" class="col-sm-2 control-label">Product Short Description</label>
                <div class="col-sm-10">
                    <textarea type="text" name="productShortDescription" class="form-control">{!!$productById->productShortDescription!!}</textarea>
                    <span class="text-danger">{{$errors->has('productShortDescription') ? $errors->first('productShortDescription') : ''}}</span>

                </div>
            </div>
            <div class="form-group">

                <label for="inputEmail3" class="col-sm-2 control-label">Product Long Description</label>
                <div class="col-sm-10">
                    <textarea type="text" name="productLongDescription" class="form-control">{!!$productById->productLongDescription!!}</textarea>
                    <span class="text-danger">{{$errors->has('productLongDescription') ? $errors->first('productLongDescription') : ''}}</span>

                </div>
            </div>

            <div class="form-group">

                <label for="inputEmail3" class="col-sm-2 control-label">Product Image</label>
                <div class="col-sm-10">
                    <input type="file" name="productImage" accept="image/*"/>
                    <img src="{{ asset($productById->productImage) }}" alt="" height="200" width="300"/>
                    <span class="text-danger">{{$errors->has('productImage') ? $errors->first('productImage') : ''}}</span>
                </div>
            </div>

            <div class="form-group">

                <label for="inputEmail3" class="col-sm-2 control-label">Publication Status</label>
                <div class="col-sm-10">
                    <select class="form-control" name="publicationStatus">

                        <option value="">Select Publication Status</option>
                        <option value="1">Published</option>
                        <option value="0">Unpublished</option>

                    </select>
                </div>
            </div>

            <div class="form-group">


                <div class=" col-sm-offset-2 col-sm-10">
                    <button type="submit" name="btn" class="btn btn-success btn-block">Save Product Information</button>
                </div>
            </div>

            {!! Form::close() !!}
        </div>
    </div>
</div>
<script>
    document.forms['editProductForm'].elements['publicationStatus'].value={{$productById->publicationStatus}}
    document.forms['editProductForm'].elements['categoryId'].value={{$productById->categoryId}}
    document.forms['editProductForm'].elements['manufacturerId'].value={{$productById->manufacturerId}}
</script>
@endsection