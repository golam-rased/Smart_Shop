@extends('admin.master')
@section('title')
Add Category
@endsection
@section('content')

<div class="row">
    <div class="col-lg-12">
        <h3 style="text-align: center">{{Session::get('message')}}</h3>
        <hr/>
        <div class="well">
            {!! Form::open(['url'=>'category/save', 'method'=> 'POST', 'class'=> 'form-horizontal']) !!}

            <div class="form-group">

                <label for="inputEmail3" class="col-sm-2 control-label">Category Name</label>
                <div class="col-sm-10">
                    <input type="text" name="categoryName" class="form-control"/>
                    <span class="text-danger">{{$errors->has('categoryName') ? $errors->first('categoryName') : ''}}</span>
                </div>
            </div>
            <div class="form-group">

                <label for="inputEmail3" class="col-sm-2 control-label">Category Description</label>
                <div class="col-sm-10">
                    <textarea type="text" name="categoryDescription" class="form-control"></textarea>
                    <span class="text-danger">{{$errors->has('categoryDescription') ? $errors->first('categoryDescription') : ''}}</span>

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
                    <button type="submit" name="btn" class="btn btn-success btn-block">Save Category Information</button>
                </div>
            </div>

            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection