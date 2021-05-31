@extends('layouts.layout')

@section('title'){{$title}} @endsection

@section('header')
    @parent
@endsection

@section('content')
    <div class="container">

    <form method="post" action="/send">
    @csrf
    <div class="mb-3">
            <label for="exampleInputName" class="form-label">Your name</label>
            <input type="text" class="form-control" id="exampleInputName" name="name">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Your message</label>
        <textarea class="form-control" name="text" id="exampleFormControlTextarea1" rows="5"></textarea>
        </div>
        <button type="submit" class="btn btn-primary mb-5">Submit</button>
    </form>

    </div>
@endsection
