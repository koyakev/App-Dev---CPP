@extends('layout.layout')

@section('title')
Registration
@endsection

@section('content')

<style>

body {
    background-image: url('https://image.benq.com/is/image/benqco/tips-home-office-setup4?$ResponsivePreset$');
}

.col-7 {
    padding: 30px;
    border-radius: 4px;
    background-color: white;
    opacity: 0.95;
}

</style>

@include('layout.navigation')

<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-7">
            <form method="post" action="{{ route('store') }}">
                @csrf
                <label for="username">Username: </label>
                <input type="text" name="username" class="form-control" required><br>
                <label for="email">Email: </label>
                <input type="email" name="email" class="form-control" required><br>
                <label for="password">Password: </label>
                <input type="password" name="password" class="form-control" required><br>
                <label for="cpassword">Confirm Password: </label>
                <input type="password" name="cpassword" class="form-control" required><br>

                <div class="d-grid">
                    <input type="submit" class="btn btn-dark mb-3" value="Register">
                    <a href="/" class="btn btn-outline-dark">Back to Login</a>
                </div>


            </form>


        </div>
    </div>
</div>


@endsection
