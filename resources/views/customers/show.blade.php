@extends('layouts.app')

@section('content')
    <div class="container">
        <br><br>
        <h3 class="title">Customer Show</h3>
        <br>

        <div class="card-group">
            <div class="card">
                <img class="card-img-top" src="/img/customer-top.png">
                <div class="card-body">
                <h5 class="card-title">{{ $customer->name }}</h5>
                <p class="card-text"><b>Company Name : </b> {{ $customer->company->name }} <span class="text-muted small">({{ $customer->company->phone }})</span></p>
                <p class="card-text"><b>Email Address : </b> {{ $customer->email }}</p>
                <p class="card-text"><b>Status : </b> {{ $customer->active }}</p>
                <p class="card-text"><small class="text-muted"><a href="/customers/{{$customer->id}}/edit">Edit Customer</a></small></p>
                <form action="/customers/{{$customer->id}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
                </div>
            </div>
        </div>
        <br>
    </div>
@endsection
