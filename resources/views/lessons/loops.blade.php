@extends('layout.layout')

@section('title')
Loops
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
            <h1 class="display-3">Loops</h1>

            <hr>

            <p class="lead">Loops can execute a block of code until a specified condition is reached.</p>

            <p class="lead">Loop sare handy because they save time, reduce errors, and makes code more readable.</p>

            <ul class="list-group">
                <li class="list-group-item">
                    <p class="lead"><b>While Loops</b></p>

                    <img src="{{ asset('images/loops1.png') }}">

                    <p class="lead mt-2">While loop loops through a block of code as long as the condition is true.</p>

                    <p class="lead">This loop is used when the number of iteration or the times the code will repeat is unknown.</p>

                </li>

                <li class="list-group-item">
                    <p class="lead"><b>Do While Loops</b></p>

                    <img src="{{ asset('images/loops2.png') }}">

                    <p class="lead mt-2">Do while loop loops through a block of code and then checks if the condition is met.</p>

                    <p class="lead">This loop is used when you need to execute the code at least once.</p>
                </li>

                <li class="list-group-item">
                    <p class="lead"><b>For Loops</b></p>

                    <img src="{{ asset('images/loops3.png') }}">

                    <p class="lead mt-2">For loop loops through a block of code for a specific number of iterations.</p>

                    <p class="lead">This loop is used when you know the exact number of iteration.</p>
                </li>

            </ul>

            <hr>

            <a href="{{ route('conditionals') }}" class="btn btn-outline-info" style="width: 150px;">Previous Lesson</a>

            <a href="{{ route('loopsQ') }}" class="btn btn-dark" style="width: 150px;">Take Quiz!</a>

            @if($user->level >= 7)
                <a href="{{ route('functions') }}" class="btn btn-info" style="width: 150px;">Next Lesson</a>
            @endif
        </div>
    </div>
</div>

@endsection
