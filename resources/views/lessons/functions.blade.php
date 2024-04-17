@extends('layout.layout')

@section('title')
Functions
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
            <h1 class="display-3">Functions</h1>

            <hr>

            <p class="lead">A function is a block of code which only runs when it is called. We can pass data into a function which will be used by the function in its operation. Functions are defined code which can be used many times later in the program through call.</p>

            <p class="lead">To create a function, specify the name of the function, followed by a parenthesis.</p>

            <img src="{{ asset('images/functions1.png') }}" class="mb-2">

            <p class="lead">myFunction is the name of the function. void means that the function does not have a return type, which we will learn later on. Inside the function, add the code that the would be executed once the function is said.</p>

            <p class="lead">To call a function, write the function's name followed by two parentheses () and a semicolon.</p>

            <img src="{{ asset('images/functions2.png') }}" class="mb-2">

            <p class="lead">Functions can be called multiple times.</p>

            <img src="{{ asset('images/functions3.png') }}" class="mb-4">

            <p class="lead">A function consists of two parts: the <i>declaration</i> part and the <i>definition.</i></p>

            <p class="lead"><b>Declaration:</b> the return type, the name of the function, and parameters (if any).</p>

            <p class="lead"><b>Definition:</b> the code to be executed.</p>

            <p class="lead"><i>* Functions must be declared before the int main() function.</i></p>

            <hr>

            <a href="{{ route('conditionals') }}" class="btn btn-outline-info" style="width: 150px;">Previous Lesson</a>

            <a href="{{ route('functionsQ') }}" class="btn btn-dark" style="width: 150px;">Take Quiz!</a>

            <a href="{{ route('dashboard') }}" class="btn btn-warning">Go to Dashboard</a>
        </div>
    </div>
</div>

@endsection
