@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="m-4">Create Post</h1>

    @if($errors->any())
        <div class="m-2">
        <ul>
        @foreach($errors->all as $error)
        <li class="bg-danger rounded py-4">
        {{error}}
        </li>


        @endforeach
        </ul>
        </div>
    @endif

    <form action="/blog" method="post" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
    <input class="form-control form-control-lg" name="title" type="text" placeholder="title" aria-label=".form-control-lg example">
    </div>

    <div class="mb-3">
    <textarea class="form-control p-3" name="description" id="exampleFormControlTextarea1" rows="12">Description of post</textarea>
    </div>

    <div class="mb-3">
    <input class="form-control" name="image" type="file" id="formFile">
    </div>

    <button class="btn btn-primary rounded p-2" type="submit">Submit Post</button>
    
    </form>



@endsection