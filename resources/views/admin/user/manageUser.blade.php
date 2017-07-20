@extends('admin.master')

@section('title')
Manage User
@endsection

@section('content')
<hr>
<h3 class="text-center text-success">{{Session::get('message')}}</h3>
<hr/>

<h4>Showing {{$users->count()}} of {{$users->total()}}</h4>

<table class="table table-bordered table-hover">


    <thead>
        <tr>
            <th>ID</th>
            <th>User Name</th>
            <th>User Email</th>
            <th>User Password</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->password}}</td>
            <td>
                <a href="" class="btn btn-success">
                    <span class="glyphicon glyphicon-edit"></span>
                </a>
                <a href="" class="btn btn-danger">
                    <span class="glyphicon glyphicon-trash"></span>
                </a>
            </td>
        </tr>
        @endforeach
        
    </tbody>


</table>
{{$users->links()}}
@endsection