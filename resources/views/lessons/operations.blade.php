@extends('layout.layout')

@section('title')
Arithmetic Operators
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
            <h1 class="display-3">Arithmetic Operators</h1>

            <hr>

            <p class="lead">We can do different Mathematical Operations in C++.</p>

            <img src="{{ asset('images/operators1.png') }}" class="mb-5">

            <p class="lead">The + operator is used for addition.</p>

            <p class="lead">The - operator is used for subtraction.</p>

            <p class="lead">The * operator is used for multiplication.</p>

            <p class="lead">The / operator is used for division.</p>

            <p class="lead">The % operator is used to display the remainder of 2 non-divisble numbers. It will display 0 if the numbers are divisible.</p>

            <p class="lead">The ++ operator is used to increment the value of a number by 1.</p>

            <p class="lead mb-5">The -- operator is used to decrement the value of a number by 1.</p>

            <p class="lead"><i>You can also declare a variable with an operator.</i></p>

            <img src="{{ asset('images/operators2.png') }}" class="mb-5">

            <p class="lead">This block of code will display the result, which is 10.</p>
            <hr>

            <a href="{{ route('variables') }}" class="btn btn-outline-info" style="width: 150px;">Previous Lesson</a>

            <a href="{{ route('operatorsQ') }}" class="btn btn-dark" style="width: 150px;">Take Quiz!</a>

            @if($user->level >= 5)
                <a href="{{ route('conditionals') }}" class="btn btn-info" style="width: 150px;">Next Lesson</a>
            @endif
        </div>
    </div>
</div>

@endsection
