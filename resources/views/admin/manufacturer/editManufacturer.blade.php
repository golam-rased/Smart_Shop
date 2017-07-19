@extends('admin.master')
@section('title')
Edit Manufacturer
@endsection
@section('content')

<div class="row">
    <div class="col-lg-12">
        <h3 style="text-align: center"></h3>
        <hr/>
        <div class="well">
            {!! Form::open(['url'=>'manufacturer/update', 'method'=> 'POST', 'class'=> 'form-horizontal', 'name'=>'editManufacturerForm']) !!}

            <div class="form-group">

                <label for="inputEmail3" class="col-sm-2 control-label">Manufacturer Name</label>
                <div class="col-sm-10">
                    <input value="{{$manufacturerById->manufacturersName}}" type="text" name="manufacturersName" class="form-control"/>
                    <input value="{{$manufacturerById->id}}" type="hidden" name="id" class="form-control"/>
                </div>
            </div>
            <div class="form-group">

                <label for="inputEmail3" class="col-sm-2 control-label">Manufacturer Description</label>
                <div class="col-sm-10">
                    <textarea type="text" name="manufacturersDescription" class="form-control">{{$manufacturerById->manufacturersDescription}}</textarea>
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
                    <button type="submit" name="btn" class="btn btn-success btn-block">Update Manufacturer Information</button>
                </div>
            </div>

            {!! Form::close() !!}
        </div>
    </div>
</div>

<script>
    document.forms['editManufacturerForm'].elements['publicationStatus'].value = {{$manufacturerById -> publicationStatus}}
</script>
@endsection