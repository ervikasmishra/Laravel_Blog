@extends('layouts.app')

@section('content')
    <div class="bg-image">
        <div>
            <div class="container font-weight-bold">
            <h1 class="text-uppercase text-white font-weight-bold pb-14">do you want to become a developer?</h1>
            <a href="/blog" role="button" class="btn btn-light text-align-center  py-2 px-4">Read More</a>
            </div>
        </div>
    </div>
    <div class="container d-flex my-3 about">
        <div class="row">
            <div class="col-sm-6">
            <img src="https://images.unsplash.com/photo-1507238691740-187a5b1d37b8?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=693&q=80" height="400" width="100%" alt="image">
            </div>

            <div class="col-sm-6">
            <div class="d-flex justify-content-center flex-column m-4 align-items-center text-justify">
            <h2 class="font-weight-bold">
                Struggling to be a better web developer?
            </h2>
            <p class="py-8">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, totam iusto illo pariatur nulla vitae.
            </p>
            <p class="font-weight-bolder pb-9">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque excepturi assumenda quam dignissimos. Voluptate delectus expedita, sapiente quasi molestiae exercitationem culpa.
            </p>
            <a href="/blog" class="btn btn-primary rounded-pill">Find Out More</a>
        </div>
            </div>
        </div>
    </div>

    <div class="text-center p-15 skill text-white">
        <h2 class="p-3">I'm an expert in...</h2>
        <span class="font-weight-bolder d-block py-1">UX Design</span>
        <span class="font-weight-bolder d-block py-1">Project Management</span>
        <span class="font-weight-bolder d-block py-1">Digital Strategy</span>
        <span class="font-weight-bolder d-block py-1">Backend Development</span>
    </div>

    <div class="text-center my-3">
        <span class="text-uppercase">Blog</span>
        <h2 class="font-weight py-4">Recent Post</h2>
        <p class="m-auto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium quaerat cupiditate officiis quos in deserunt ex officia est quidem ipsam!</p>
    </div>

   <div class="container">
       <div class="row">
        <div class="col-sm-6 php">
         <h4 class="text-uppercase lead m-4">php</h4>
         <p class="font-weight-bold m-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum, vero suscipit incidunt quaerat velit facilis soluta nulla quam eaque! Consequuntur repellat libero deserunt unde velit, porro consequatur quia error quos fuga illum deleniti culpa ipsam quas commodi voluptatum eligendi odit omnis dolore, eius blanditiis amet. Nostrum, amet ad id sunt nemo iusto. Recusandae dolore asperiores voluptas ea placeat pariatur neque!</p>

         <a href="/blog" class="btn btn-light bg-transparent rounded-pill mb-3 line- font-weight-bold" role="button">FIND OUT MORE</a>
        </div>

        <div class="col-sm-6">
        <img class="m-1" src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_1280.jpg" width="100%" alt="image">
        </div>
       </div>
   </div>
@endsection