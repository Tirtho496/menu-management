@extends('layouts.admin')

@section('content')

<div class="card">
    <div class ="card-body">
        <h2>Reports Panel</h2>
    </div>
    <div class ="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Menu</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reports as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->report_name}}</td>
                    <td>{{$item->menus->menu_name}}</td>
                    <td>
                        <a href ="{{url('delete-report/'.$item->id)}}" class ="btn btn-danger">Delete</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection