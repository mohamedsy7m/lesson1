@extends('layouts.app')

@section('content')
    <div class="container">
        <br>
        <h3 class="title">Edit Customer <span class="text-muted small">{{ $customer->name }}</span></h3>
        <br>
        <div class="mb-3 w-50">
        <form action="/customers/{{$customer->id}}" method="POST">
            @csrf
            @method('PATCH')
            @include('customers.form')

            <div class="input-group"> {{--  mb-1 d-flex justify-content-center --}}
                <button type="submit" class="btn btn-primary pl-5 pr-5">Save</button>
            </div>

        </form>
        <br>
        <br>

        </div>
    </div>
@endsection
