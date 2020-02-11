@extends('layouts.app')

@section('content')
@if ($message = Session::get('success'))
<body>
<html>
    <div class="alert alert-success">
        <p>{{$message}}</p>
    </div>
@endif

<div class='row'>
    <div class="col-md-12">
        <div class="pull-left">
            <marquee behavior="" direction="">List of customer</marquee>
        </div>

        <div class="col-md-4">
            <form action="/search" method="get">
                <div class="input-group">
                    <input type="search" id="search" name="search" class="form-control">
                    <span class="input-group-prepend">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </span>
                </div>
            </form>
        </div>


        <div class="pull-right">
            <a href="{{ route('customer.create')}}" class="btn btn-lg btn-success">Register New Customer</a>
        </div>
    </div>
</div>

<table class="table table-bordered table-dark">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Address</th>
            <th>Gender</th>
            <th>Age</th>
            <th>Action</th>
        </tr>
    </thead>

    @foreach($customer as $key)
        <tr>
            <td>{{$key->id}}</td>
            <td>{{$key->name}}</td>
            <td>{{$key->address}}</td>
            <td>{{$key->gender}}</td>
            <td>{{$key->age}}</td>
            <td>

                <form action="{{action('CustomerController@destroy', $key['id'])}}" method="post">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}

                <button class="btn btn-danger" type="submit" onclick="return confirm('Confirm delete?')">Delete</button> 
                </form> 
                <a href="{{route('customer.show', $key->id)}}" class="btn btn-info">Show</a>
                <a href="{{route('customer.edit', $key->id)}}" class="btn btn-warning">Edit</a>
            </td>
        </tr>
    @endforeach
    @endsection
</table>

<script type="text/javascript">
    $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}'} });
</script> 

</body>
</html>

