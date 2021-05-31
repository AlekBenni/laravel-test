@extends('layouts.layout')

@section('title'){{$title}} @endsection

@section('header')
    @parent
@endsection

@section('content')
    <div class="container">

    <form method="post" action="{{route('register.store')}}">
    @csrf
    <div class="mb-3">
            <label for="exampleInputName" class="form-label">Your name</label>
            <input type="text" class="form-control" id="exampleInputName"
            value="{{old('name')}}" name="name">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email"
            value="{{old('email')}}" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="password">
        </div>

        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Confirm password</label>
            <input type="password" name="password_confirmation"
            class="form-control" id="password_confirmation">
        </div>

        <button type="submit" class="btn btn-primary mb-5">Submit</button>
    </form>

    </div>
@endsection















