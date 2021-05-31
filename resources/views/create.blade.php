
@extends('layouts.layout')

@section('title') {{$title}}  @endsection

@section('header')
    @parent
@endsection

@section('content')

<div class="container mb-5">

    <form method="post" action="{{route('posts.store')}}">
        @csrf

    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror"
        value="{{old('title')}}"
        id="title" aria-describedby="emailHelp" name="title" placeholder="title">
        @error('title')
            <div class="invalid-feedback">{{$message}}</div>
        @enderror
    </div>

    <label for="rubric_id" class="form-label">Rubric</label>
    <select id="rubric_id" name="rubric_id" class="form-select mb-3 @error('title') is-invalid @enderror"
     aria-label="Default select example">
        <option selected>Open this select menu</option>
        @foreach($rubrics as $k => $v)
        <option value="{{$k}}"
        @if(old('rubric_id') == $k) selected @endif
        >{{$v}}</option>
        @endforeach
    </select>
    @error('rubric_id')
        <div class="invalid-feedback">{{$message}}</div>
    @enderror

    <div class="mb-3">
        <label for="content" class="form-label">Content</label>
        <textarea class="form-control @error('content') is-invalid @enderror"
        value="{{old('content')}}"
        id="content" rows="5" name="content" placeholder="content"></textarea>
        @error('content')
            <div class="invalid-feedback">{{$message}}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-danger">Submit</button>
    </form>
</div>

@endsection
