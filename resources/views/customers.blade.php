@extends('layout')


@section('content')
    <div class="container">
        <br>
        <h3 class="title">Add New Customer</h3>
        <br>
        <div class="mb-3 w-50">
            <form action="customers" method="POST" class="">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Customer Name" name="name" aria-describedby="basic-addon1">

                    @if ($errors->first('name'))
                    <div class="alert alert-danger m-0 p-1  mt-1 mb-1"><small>* {{ $errors->first('name') }}</small></div>
                    @endif

                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
                @csrf
            </form>
            <br>
            <br>
            <h3>Customers List</h3>
            <br>
            <ul>
                @foreach ($customers as $customer)
                    <li>{{ $customer->name }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
