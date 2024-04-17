@extends('layout.layout')

@section('title')
Variables
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
            <h1 class="display-3">Variables</h1>

            <hr>

            <p class="lead">Variables are containers that can hold data for a short period of time or as the program is running.</p>

            <p class="lead">To create a variable, specify the type and assign it a value:</p>

            <center><p class="lead"><i>type variableName = value;</i></p></center>

            <br>

            <p class="lead">Where type is one of C++ types (like integers), and variableName is the name of the variable (such as x or myName). The equal sign is used to assign values to the variable.</p>

            <p class="lead">To create a variable that should store a number, look at the following example:</p>

            <img src="{{ asset('images/variable1.png') }}">

            <br><br>

            <p class="lead">You can also declare a variable without assigning the value yet, and assign the value later on.</p>

            <img src="{{ asset('images/variable2.png') }}">

            <br><br>

            <p class="lead">Both will have the same output, which is 15.</p>

            <p class="lead">You can also overwrite an existing value by assigning the variable a new value.</p>

            <img src="{{ asset('images/variable3.png') }}">

            <p class="lead">This block of code will produce the value 10 instead of 15.</p>

            <p class="lead">To display a variable, you can use the cout function. You can also combine the variable with a set of string using the << operator.</p>

            <img src="{{ asset('images/variable4.png') }}">

            <br><br>

            <p class="lead"><strong><i>Basic Datatypes</i></strong></p>

            <p class="lead">These are the types of data that we can store in variables.</p>

            <table class="table">
                <thead>
                    <th>Data Type</th>
                    <th>Size</th>
                    <th>Description</th>
                </thead>
                <tbody>
                    <tr>
                        <td>boolean</td>
                        <td>1 byte</td>
                        <td>Stores true or false values.</td>
                    </tr>
                    <tr>
                        <td>char</td>
                        <td>1 byte</td>
                        <td>Stores a single character/letter/number, or ASCII values.</td>
                    </tr>
                    <tr>
                        <td>int</td>
                        <td>2 or 4 bytes</td>
                        <td>Stores whole numbers.</td>
                    </tr>
                    <tr>
                        <td>float</td>
                        <td>4 bytes</td>
                        <td>Stores fractional numbers which contains decimals for up to 6 to 7 decimal digits.</td>
                    </tr>
                    <tr>
                        <td>double</td>
                        <td>8 bytes</td>
                        <td>Stores fractional numbers which contains decimals for up to 15 decimal digits.</td>
                    </tr>
                </tbody>
            </table>

            <hr>

            <a href="{{ route('syntax') }}" class="btn btn-outline-info" style="width: 150px;">Previous Lesson</a>

            <a href="{{ route('variablesQ') }}" class="btn btn-dark" style="width: 150px;">Take Quiz!</a>

            @if($user->level >= 4)
                <a href="{{ route('operators') }}" class="btn btn-info" style="width: 150px;">Next Lesson</a>
            @endif

        </div>
    </div>
</div>

@endsection
