@php
use App\Models\Report;

@endphp

@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>

                <div class="card-body">
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
                            @php
                                $reports = Report::where('menu_id',$item->id)->get();
                            @endphp
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            {{$item->menu_name}}
                                        </button>
                                        
                                            @foreach($reports as $child)
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">{{$child->name}}</a>
                                            </div>
                                            @endforeach
                                          
                                        
                                    </div>
                                    
                                    
                                
                                </td>
                                <td>{{$item->roles->role_name}}</td>
                                <td>
                                    <a href ="{{url('view-report/'.$item->id)}}" class ="btn btn-success">View Reports</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
