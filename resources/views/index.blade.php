@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-6 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-black text-5xl uppercase font-bold text-shadow-md pb-14">
                    <link rel="stylesheet" href="../css/app.css">
                    Do you want to become a developer
                </h1>

                <a href="{{ url('blog') }}"
                    class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                    Read more on our Blog Post
                </a>
            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-25 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="https://cdn.pixabay.com/photo/2015/07/17/22/43/student-849825_960_720.jpg" width="400"
                alt="">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                Struggling to be a better web developer
            </h2>

            <p class="py-8 text-gray-500 text-s">
                Lorem ipsum dolor sit amet, consectetur
                adipisicing elit. Tenetur porro a explicabo
            </p>

            <p class="font-extrabold text-gray-600 text-s pb-9">
                lorem ipsum dolor sit amet, consectetur
                adipisicing elit. Tenetur porro a explicabo
                itaque nobis quod obcaecati, nemo iure qui
            </p>

            <a href="/blog" class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                Find out More
            </a>
        </div>
    </div>


    <div class="text-center p-15 bg-black text-white">
        <h2 class="text-2xl pb-5 text-l">
            I am an expert in.....
        </h2>

        <span class="font-extrabold block text-2xl py-1">
            CSS
        </span>
        <span class="font-extrabold block text-2xl py-1">
            HTML
        </span>
        <span class="font-extrabold block text-2xl py-1">
            PHP
        </span>
        <span class="font-extrabold block text-2xl py-1">
            LARAVEL
        </span>
    </div>

    <div class="text-center py-15">

        <span class="uppercase text-s text-gray-400">
            Blog
        </span>

        <h2 class="text-4xl font-bold py-10">
            Recent Posts
        </h2>
        @foreach ($post as $posts)
            
                <span class="uppercase text-2xl text-dark font-bold pb-3">
                    {{ $posts->title }}
                </span>
                <div class="card-body text-white w-50" style="margin-left:20px; margin-top:10px;">
                <p class="m-auto w-4/5 text-gray-500">
                    {{ $posts->description }}
                </p>
                </div>
        @endforeach
    

    </div>

    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-yellow-700 text-gray-100pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">

                <span class="uppercase text-l text-white">
                    PHP
                </span>
                <h3 class="text-xl font-bold py-10 text-white">
                    Lorem ipsum dolor sit amet consectetur <br />
                    adipisicing elit. Sunt nesciunt quidem <br />
                    sequi dicta! Nesciunt, asperiores aspernatur?<br />
                    Harum culpa, molestias hic aliquid minus distinctio, <br />
                    tempora nisi sunt, doloremque unde maxime doloribus.
                </h3>

                <a href=""
                    class="uppercase bg-transparent border-2 
border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                    Finf out more
                </a>
            </div>
        </div>
        <div>
            <img src="https://cdn.pixabay.com/photo/2015/07/17/22/43/student-849825_960_720.jpg" width="700"
                alt="">
        </div>


    </div>
@endsection
