@extends('layout.layout')

@section('title')
Login
@endsection

@section('content')

@if($message = Session::get('message'))

<i>{{ $message }}</i>

@endif

<style>

body {
    background-image: url('https://image.benq.com/is/image/benqco/tips-home-office-setup4?$ResponsivePreset$');
}

.col-5 {
    padding: 30px;
    border-radius: 4px;
    background-color: white;
    opacity: 0.95;
}

</style>

@include('layout.navigation')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-5 m-5">

            <form method="POST" action="{{ route('verify') }}">
                @csrf
                <label for="email"><i>Email:</i></label>
                <input type="email" name="email" class="form-control" required><br>
                <label for="password"><i>Password:</i></label>
                <input type="password" name="password" class="form-control" required><br>

                <div class="d-grid">
                    <input type="submit" class="btn btn-dark mb-3" value="Login">
                    <a href="{{ route('registration') }}" class="btn btn-outline-dark">Registration</a>
                </div>


            </form>



        </div>
    </div>
</div>

@endsection
