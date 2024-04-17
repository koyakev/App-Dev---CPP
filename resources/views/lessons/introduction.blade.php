@extends('layout.layout')

@section('title')
Introduction
@endsection

@section('content')

@include('layout.navigation')

<style>

body {
    background-image: url('https://image.benq.com/is/image/benqco/tips-home-office-setup4?$ResponsivePreset$');
}

.col-8 {
    background-color: white;
    padding: 40px;
    border-radius: 3px;
    margin: 5px;
}

.col-2 {
    background-color: white;
    padding: 10px;
    margin: 5px;
    border-radius: 3px;
    height: 310px;
}

</style>



<div class="container m-3">

    <div class="row justify-content-center">
        <div class="col-2">
            @include('layout.sidenav')
        </div>

        <div class="col-8">



            <h1 class="display-3">Introduction</h1>

            <hr>

            <p class="lead">
                C++ is an extension of the C language. C++ is developed by Bjarne Stroustrup at Bell Labs in 1980 with the goal of providing an organized program together. It is both flexible and efficient for systems programming.
            </p>

            <p class="lead">
                C++ is compatible with C and it can compile most of C programs without the need to change lines of codes.
            </p>

            <p class="lead">
                C++ is a more structured and organized compared to C.
            </p>

            <p class="lead">
                C++ offers an object oriented approach of C and C++ can be considered as a superset of C.
            </p>

            <hr>
            <a href="{{ route('dashboard') }}" class="btn btn-outline-dark" style="width: 150px;">Back to Home</a>
            <a href="{{ route('introductionQ') }}" class="btn btn-dark" style="width: 150px;">Take Quiz!</a>

            @if($user->level >= 2)
                <a href="{{ route('syntax') }}" class="btn btn-info" style="width: 150px;">Next Lesson</a>
            @endif
        </div>
    </div>
</div>

@endsection
