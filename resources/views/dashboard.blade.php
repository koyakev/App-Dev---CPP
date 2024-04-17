@extends('layout.layout')

@section('title')
Dashboard
@endsection

@section('content')

@include('layout.navigation')

<style>

body {
    background-image: url('https://image.benq.com/is/image/benqco/tips-home-office-setup4?$ResponsivePreset$');
}

.mask {
    background-color: rgba(0, 0, 0, 0.6);
    padding: 20px;
}

</style>

<div class="container mb-5">

    @if($message = Session::get('message'))

        <script>
            alert("You have scored {{ $message }}% in the quiz");
        </script>

    @endif

    <div class="row justify-content-center">
        <div class="col-7 m-4">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title"><i>Welcome! {{ $user->name }}</i></h2>

                    <hr>

                    <p class="card-text">Email Address: {{ $user->email }}</p>
                    <p class="card-text">Current Level:
                        @if ($user->level == 10)
                            Max
                        @else
                            {{ $user->level }}
                        @endif
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-5">
            <div class="card mb-3">
                <img src="{{ asset('images/intro.png') }}" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Introduction</h5>
                    <p class="card-text">What is C++? Who developed C++? and what is it made for?</p>
                    <div class="d-grid">
                        <a href="{{ route('introduction') }}" class="btn btn-outline-dark mb-2">View Lesson</a>
                        <a href="{{ route('introductionQ') }}" class="btn btn-outline-warning">Take Quiz</a>
                    </div>
                </div>
            </div>

            @if($user->level >= 2)

            <div class="card mb-3">
                <div class="card-body">
                    <img src="{{ asset('images/syntax.png') }}" class="card-img-top">
                    <h5 class="card-title">Basic Syntax</h5>
                    <p class="card-text">The fundamentals and the basic sequences of a C++ program.</p>
                    <div class="d-grid">
                        <a href="{{ route('syntax') }}" class="btn btn-outline-dark mb-2">View Lesson</a>
                        <a href="{{ route('syntaxQ') }}" class="btn btn-outline-warning">Take Quiz</a>
                    </div>
                </div>
            </div>

            @endif

            @if($user->level >= 3)

            <div class="card mb-3">
                <div class="card-body">
                    <img src="{{ asset('images/variables.png') }}" class="card-img-top">
                    <h5 class="card-title">Variables</h5>
                    <p class="card-text">We are going to discuss what are variables and what are the different types of data we can store using variables.</p>
                    <div class="d-grid">
                        <a href="{{ route('variables') }}" class="btn btn-outline-dark mb-2">View Lesson</a>
                        <a href="{{ route('variablesQ') }}" class="btn btn-outline-warning">Take Quiz</a>
                    </div>
                </div>
            </div>

            @endif

            @if($user->level >= 4)

            <div class="card mb-3">
                <div class="card-body">
                    <img src="{{ asset('images/operators.png') }}" class="card-img-top">
                    <h5 class="card-title">Operators</h5>
                    <p class="card-text">Different mathematical and comparison operators we can use in C++.</p>
                    <div class="d-grid">
                        <a href="{{ route('operators') }}" class="btn btn-outline-dark mb-2">View Lesson</a>
                        <a href="{{ route('operatorsQ') }}" class="btn btn-outline-warning">Take Quiz</a>
                    </div>
                </div>
            </div>

            @endif

            @if($user->level >= 5)

            <div class="card mb-3">
                <div class="card-body">
                    <img src="{{ asset('images/conditionals.png') }}" class="card-img-top">
                    <h5 class="card-title">Conditionals</h5>
                    <p class="card-text">Basic conditions and flow controls in C++.</p>
                    <div class="d-grid">
                        <a href="{{ route('conditionals') }}" class="btn btn-outline-dark mb-2">View Lesson</a>
                        <a href="{{ route('conditionalsQ') }}" class="btn btn-outline-warning">Take Quiz</a>
                    </div>
                </div>
            </div>

            @endif

            @if($user->level >= 6)

            <div class="card mb-3">
                <div class="card-body">
                    <img src="{{ asset('images/loops.png') }}" class="card-img-top">
                    <h5 class="card-title">Loops</h5>
                    <p class="card-text">We are going to discuss what are variables and what are the different types of data we can store using variables.</p>
                    <div class="d-grid">
                        <a href="{{ route('loops') }}" class="btn btn-outline-dark mb-2">View Lesson</a>
                        <a href="{{ route('loopsQ') }}" class="btn btn-outline-warning">Take Quiz</a>
                    </div>
                </div>
            </div>

            @endif

            @if($user->level >= 7)

            <div class="card mb-3">
                <div class="card-body">
                    <img src="{{ asset('images/functions.png') }}" class="card-img-top">
                    <h5 class="card-title">Functions</h5>
                    <p class="card-text">We are going to discuss what are variables and what are the different types of data we can store using variables.</p>
                    <div class="d-grid">
                        <a href="{{ route('functions') }}" class="btn btn-outline-dark mb-2">View Lesson</a>
                        <a href="{{ route('functionsQ') }}" class="btn btn-outline-warning">Take Quiz</a>
                    </div>
                </div>
            </div>

            @endif

        </div>
    </div>
</div>

@include('layout.footer')

@endsection
