@extends('layout.layout')

@section('title')

Conditionals - Quiz

@endsection

@section('content')

<script>

let page = 1;

function next(){

    switch(page){
        case 1:
            {
                if(document.querySelector('input[name="q1"]:checked') != null){
                    page += 1;
                    document.getElementById("q1").style.display = "none";
                    document.getElementById("q2").style.display = "block";
                } else {
                    alert("Please answer the question to proceed.");
                }
            } break;

        case 2:
            {
                if(document.querySelector('input[name="q2"]:checked') != null){
                    page += 1;
                    document.getElementById("q2").style.display = "none";
                    document.getElementById("q3").style.display = "block";
                } else {
                    alert("Please answer the question to proceed.");
                }
            } break;

        case 3:
            {
                if(document.querySelector('input[name="q3"]:checked') != null){
                    page += 1;
                    document.getElementById("q3").style.display = "none";
                    document.getElementById("q4").style.display = "block";
                } else {
                    alert("Please answer the question to proceed.");
                }
            } break;

        case 4:
            {
                if(document.querySelector('input[name="q4"]:checked') != null){
                    page += 1;
                    document.getElementById("q4").style.display = "none";
                    document.getElementById("q5").style.display = "block";
                } else {
                    alert("Please answer the question to proceed.");
                }
            } break;

        case 5:
            {
                if(document.querySelector('input[name="q5"]:checked') != null){
                    document.getElementById("conditionals").submit();
                } else {
                    alert("Please answer the question to proceed.");
                }
            } break;
    }

}

</script>

<style>

body {
    background-image: url('https://image.benq.com/is/image/benqco/tips-home-office-setup4?$ResponsivePreset$');
}

</style>

@include('layout.navigation')

<div class="container">

    <div class="row justify-content-center mt-5">
        <div class="col-6">

            <form method="GET" action="{{ route('conditionalsRate') }}" id="conditionals">
                @csrf
                <div id="q1">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Question 1</div>
                        </div>
                        <div class="card-body">
                            <div class="display-4">
                                <label for="q1">Is used to specify many alternative blocks of code to be executed.</label>
                            </div>
                            <div class="form-check mt-3">
                                <input type="radio" class="form-check-input" name="q1" value=1>
                                <label class="form-check-label">switch</label>
                            </div>

                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="q1" value=0>
                                <label class="form-check-label">if</label>
                            </div>

                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="q1" value=0>
                                <label class="form-check-label">else if</label>
                            </div>

                            <div class="form-check mb-4">
                                <input type="radio" class="form-check-input" name="q1" value=0>
                                <label class="form-check-label">foreach</label>
                            </div>

                            <div class="d-grid">
                                <button type="button" onclick="next()" class="btn btn-outline-dark">Next</button>
                            </div>

                        </div>
                    </div>

                </div>

                <div id="q2" style="display: none">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Question 2</div>
                        </div>
                        <div class="card-body">

                            <div class="display-4">
                                <label for="q2">Allows you to take alternative actions based on different judgements.</label>
                            </div>
                            <div class="form-check mt-3">
                                <input type="radio" class="form-check-input" name="q2" value=0>
                                <label class="form-check-label">Iterators</label>
                            </div>

                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="q2" value=0>
                                <label class="form-check-label">Operators</label>
                            </div>

                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="q2" value=0>
                                <label class="form-check-label">Loop Statements</label>
                            </div>

                            <div class="form-check mb-4">
                                <input type="radio" class="form-check-input" name="q2" value=1>
                                <label class="form-check-label">Conditionals</label>
                            </div>

                            <div class="d-grid">
                                <button type="button" onclick="next()" class="btn btn-outline-dark">Next</button>
                            </div>

                        </div>
                    </div>
                </div>

                <div id="q3" style="display: none">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Question 3</div>
                        </div>
                        <div class="card-body">
                            <div class="display-4">
                                <label for="q3">You cannot define an if statement without an else statement.</label>
                            </div>
                            <div class="form-check mt-3">
                                <input type="radio" class="form-check-input" name="q3" value=0>
                                <label class="form-check-label">True</label>
                            </div>

                            <div class="form-check mb-4">
                                <input type="radio" class="form-check-input" name="q3" value=1>
                                <label class="form-check-label">False</label>
                            </div>

                            <div class="d-grid">
                                <button type="button" onclick="next()" class="btn btn-outline-dark">Next</button>
                            </div>

                        </div>
                    </div>
                </div>

                <div id="q4" style="display: none">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Question 4</div>
                        </div>
                        <div class="card-body">
                            <div class="display-4">
                                <label for="q4">How many logical operators are there?</label>
                                <img src="{{ asset('images/variablesQ1.png') }}">
                            </div>
                            <div class="form-check mt-3">
                                <input type="radio" class="form-check-input" name="q4" value=0>
                                <label class="form-check-label">4</label>
                            </div>

                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="q4" value=0>
                                <label class="form-check-label">5</label>
                            </div>

                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="q4" value=1>
                                <label class="form-check-label">6</label>
                            </div>

                            <div class="form-check mb-4">
                                <input type="radio" class="form-check-input" name="q4" value=0>
                                <label class="form-check-label">7</label>
                            </div>

                            <div class="d-grid">
                                <button type="button" onclick="next()" class="btn btn-outline-dark">Next</button>
                            </div>

                        </div>
                    </div>
                </div>

                <div id="q5" style="display: none">

                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Question 5</div>
                        </div>
                        <div class="card-body">
                            <div class="display-4">
                                <label for="q5">Is used to specify a new condition to test if the first or preceeding conditions are false.</label>
                                <img src="{{ asset('images/variablesQ2.png') }}">
                            </div>
                            <div class="form-check mt-3">
                                <input type="radio" class="form-check-input" name="q5" value=0>
                                <label class="form-check-label">else</label>
                            </div>

                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="q5" value=0>
                                <label class="form-check-label">if</label>
                            </div>

                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="q5" value=1>
                                <label class="form-check-label">else if</label>
                            </div>

                            <div class="form-check mb-4">
                                <input type="radio" class="form-check-input" name="q5" value=0>
                                <label class="form-check-label">case</label>
                            </div>

                            <div class="d-grid">
                                <button type="button" onclick="next()" class="btn btn-outline-dark">Submit Quiz</button>
                            </div>

                        </div>
                    </div>
                </div>

            </form>

        </div>
    </div>

</div>


@endsection
