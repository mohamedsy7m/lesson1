@extends('layouts.app')


@section('content')
    <div class="container">
        <br>
        <h3 class="title">Add New Customer</h3>
        <br>
        <div class="mb-3 w-50">
            <form action="/customers" method="POST" class="">

                @include('customers.form')

                <div class="input-group"> {{--  mb-1 d-flex justify-content-center --}}
                    <button type="submit" class="btn btn-primary pl-5 pr-5">Add</button>
                </div>

            </form>
            <br>
            <br>

        </div>
    </div>
@endsection
