@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="m-4">{{$post->title}}</h1>

    <p class="lead">By <span class="font-weight-bold"><i>{{$post->user->name}}</i></span>,Created on {{date('jS M Y', strtotime($post->updated_at))}}</p>

    <p class="my-4 text-justify">
    {{$post->description}}
    </p>



@endsection