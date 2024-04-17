@extends('layout.layout')

@section('title')
Basic Syntax
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
            <h1 class="display-3">Basic Syntax</h1>

            <hr>

            <p class="lead">The best way to start learning syntax is the legendary "Hello, World!" program.</p>

            <p class="lead">Below is an example of the program:</p>

            <img src="{{ asset('images/helloworld.png') }}">

            <p class="lead">Which would output:</p>

            <img src="{{ asset('images/helloworldoutput.png') }}" class="mb-3">

            <p class="lead">Let's break down the code to better understand it:</p>

            <ul class="list-group">
                <li class="list-group-item"><strong>Line 1:</strong>
                    <br>
                    <u><strong>#include < iostream ></strong></u> is a header file library that lets us work with input and output objects, such as 'cout' which is used in line 5. Header files add functionality to C++ programs.
                </li>

                <li class="list-group-item"><strong>Line 2:</strong>
                    <br>
                    using namespace std means that we can use names for objects and variables from the standard library.
                    <br>
                    <small><i>*These lines of codes may not be easy to understand at first but you must know that these codes always appears in every program.</i></small>
                </li>

                <li class="list-group-item"><strong>Line 3:</strong>
                    <br>
                    <u><strong>int main()</strong></u> is a function. Any code inside a curly brackets will be executed. Functions would be discussed in our later program. main() function is the starting point of any C++ program.
                </li>

                <li class="list-group-item"><strong>Line 4:</strong>
                    <br>
                    <u><strong>cout</strong></u> is an object used together with the insertion operator (<<) to output/print text. In our example it will output "Hello World!.
                    <br>
                    <small><i>*Every C++ statement ends with a semicolon (;).</i></small>
                </li>

                <li class="list-group-item"><strong>Line 5:</strong>
                    <br>
                    <u><strong>return 0</strong></u> ends the main function. Whenever the return type of a function is not void, we return some value.
                </li>

                <li class="list-group-item"><strong>Line 6:</strong>
                    <br>
                    Do not forget to add the closing curly bracket (}) to actually end the main function.
                </li>
            </ul>

            <hr>

            <a href="{{ route('introduction') }}" class="btn btn-outline-info" style="width: 150px;">Previous Lesson</a>
            <a href="{{ route('syntaxQ') }}" class="btn btn-dark" style="width: 150px;">Take Quiz!</a>

            @if($user->level >= 3)
                <a href="{{ route('variables') }}" class="btn btn-info" style="width: 150px;">Next Lesson</a>
            @endif


        </div>
    </div>
</div>

@endsection
