@extends('layouts.admin')

@section('content')

<div class="card">
    <div class ="card-header">
        <h4>Add Report</h4>
    </div>
    <div class="card-body">
        <form action="{{url('insert-report')}}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class = "row">
                    <div class ="col-md-6">
                        <label for="">Report Name</label>
                        <input type="text" class= "form-control" name="name">
                    </div>


                    <div class = "col-md-6 mb-3">
                        <select class="form-select" name="menu_id" aria-label="Default select example">
                            <option value="">Select Menu</option>
                            @foreach($menus as $item)
                                <option value = "{{$item->id}}">{{$item->menu_name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-12">
                        <button type="submit" class = "btn btn-primary">Submit</button>
                    </div>

            </div>
        </form>
    </div>
</div>
@endsection