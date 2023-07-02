@extends('layouts.admin')

@section('content')

<div class="card">
    <div class ="card-body">
        <h2>Menu Panel</h2>
    </div>
    <div class ="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($menus as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->menu_name}}</td>
                    <td>{{$item->roles->role_name}}</td>
                    <td>
                        <a href ="{{url('delete-menu/'.$item->id)}}" class ="btn btn-danger">Delete</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection