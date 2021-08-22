@extends('layouts.app')

@section('content')

<div class="container">
    <center><h1 class="m-4">BLOG POST</h1></center>
    <hr>

<div class="mb-3">
@if (session()->has('message'))

    <div class="alert alert-success" role="alert">
      <strong>Success! </strong>{{session()->get('message')}}
      <button type="button" class="close" data-dismiss="alert" aria-lable="close">
      <span aria-hidden="true">&times;</span>
      </button>
      </div>

@endif
@if (session()->has('d_message'))

    <div class="alert alert-danger" role="alert">
      {{session()->get('d_message')}}
      <button type="button" class="close" data-dismiss="alert" aria-lable="close">
      <span aria-hidden="true">&times;</span>
      </button>
      </div>

@endif
</div>

    @if (Auth::check())

    <div class="m-2">
    <a href="/blog/create" class="btn btn-primary rounded-pill">create post</a>
    
    </div>

    @endif

       @foreach($posts as $post)
    <div class="row my-3">
    <div class="col-sm-6">
        <img class="m-1" src="{{ asset('/images/'.$post->image_path)}}" width="100%" alt="image">
        </div>
    

       <div class="col-sm-6">
            <h1>{{$post->title}}</h1>
            <p class="lead">By <span class="font-weight-bold"><i>{{$post->user->name}}</i></span>,Created on {{date('jS M Y', strtotime($post->updated_at))}}</p>

            <p class="my-4 text-truncate">
               {{$post->description}}
            </p>

            <a href="/blog/{{$post->slug}}" class=" btn rounded-pill btn-primary">KEEP READING</a>

            @if(isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
            <span class="float-right">
            <a href="/blog/{{$post->slug}}/edit" class="ml-2 btn rounded-pill btn-success">Edit</a>
            </span>

            <span class="float-right">
            <form action="/blog/{{$post->slug}}" method="Post">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger rounded-pill">Delete</button>
            </form>
            </span>
            @endif
        </div>


       @endforeach
    </div>
</div>

@endsection