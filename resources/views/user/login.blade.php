@extends('layouts.layout')

@section('title') {{$title}} @endsection

@section('header')
    @parent
@endsection

@section('content')
    <div class="container">

    <form method="post" action="{{route('login')}}">
    @csrf

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

        <button type="submit" class="btn btn-primary mb-5">Submit</button>
    </form>

    </div>
@endsection















