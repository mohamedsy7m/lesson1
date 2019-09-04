@extends('layouts.app')


@section('content')

<div class="container">
    <br><br>
    <p class="h3">Contact Us</p>
    <br>
    @if ( ! session()->has('message'))
        <form action="/contact" method="POST">
            <div class="form-group">
                <div class="form-group mb-1">
                <input type="text" class="form-control" placeholder="Customer Name" name="name" aria-describedby="basic-addon1" value="{{old('name')}}">
                @if ($errors->first('name'))
                <div class="text-danger p-1"><small>* {{ $errors->first('name') }}</small></div>
                @endif
                </div>

                <div class="form-group mb-1">
                    <input type="text" class="form-control" placeholder="Customer Email" name="email" aria-describedby="basic-addon1"  value="{{old('email')}}">
                    @if ($errors->first('email'))
                    <div class="text-danger p-1"><small>* {{ $errors->first('email') }}</small></div>
                    @endif
                </div>
                <div class="form-group mb-1">
                    <textarea name="message" id="" class="form-control" cols="30" rows="10" placeholder="Message" value="{{old('message')}}"></textarea>
                    @if ($errors->first('message'))
                    <div class="text-danger p-1"><small class="text-danger p-1">* {{ $errors->first('message') }}</small></div>
                    @endif
                </div>
                @csrf
                <button type="submit" class="btn btn-primary">Send Message</button>
            </div>
        </form>
    @else
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
              <h2 class="">Message Sent Successfully</h2>
              <p class="lead">Thanks For Your Message We W'll Be In Touch.</p>
            </div>
        </div>
    @endif
</div>

@endsection
