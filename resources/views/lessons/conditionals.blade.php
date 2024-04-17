@extends('layout.layout')

@section('title')
Conditionals
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
            <h1 class="display-3">Conditional Statements</h1>

            <hr>

            <p class="lead">C++ implements the standard mathematical logical conditions:</p>

            <ul class="list-group">
                <li class="list-group-item">Less than: <</li>
                <li class="list-group-item">Less than or equal to: <=</li>
                <li class="list-group-item">Greater than: ></li>
                <li class="list-group-item">Greater than or equal to: >=</li>
                <li class="list-group-item">Equal to: ==</li>
                <li class="list-group-item">Not equal to: !=</li>
            </ul>

            <p class="lead mt-2">These circumstances allow you to take alternative actions based on different judgements.</p>

            <p class="lead">Conditional statements look like this:</p>

            <ul class="list-group">
                <li class="list-group-item">
                    <img src="{{ asset('images/conditionals1.png') }}">

                    <p class="lead">If the condition inside the parenthesis is met, the program will proceed to the block of code inside the brackets.</p>
                </li>
                <li class="list-group-item">
                    <img src="{{ asset('images/conditionals2.png') }}">

                    <p class="lead">If the condition is not met, the program will proceed to the block of code inside the brackets next to the else statement.</p>
                </li>

                <li class="list-group-item">
                    <img src="{{ asset('images/conditionals3.png') }}">

                    <p class="lead">If we are looking at different conditions, we can use the else if statement.</p>
                </li>

                <li class="list-group-item">
                    <img src="{{ asset('images/conditionals4.png') }}">

                    <p class="lead">Lastly, if there are plenty of conditions that can be met, we can use a switch case statement.</p>
                </li>
            </ul>


            <hr>

            <a href="{{ route('operators') }}" class="btn btn-outline-info" style="width: 150px;">Previous Lesson</a>

            <a href="{{ route('conditionalsQ') }}" class="btn btn-dark" style="width: 150px;">Take Quiz!</a>

            @if($user->level >= 6)
                <a href="{{ route('loops') }}" class="btn btn-info" style="width: 150px;">Next Lesson</a>
            @endif
        </div>
    </div>
</div>

@endsection
