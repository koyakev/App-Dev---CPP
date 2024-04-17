@extends('layout.layout')

@section('title')

Variables - Quiz

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
                    document.getElementById("operators").submit();
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

            <form method="GET" action="{{ route('operatorsRate') }}" id="operators">
                @csrf
                <div id="q1">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Question 1</div>
                        </div>
                        <div class="card-body">
                            <div class="display-4">
                                <label for="q1">The ___ operator is used for addition.</label>
                            </div>
                            <div class="form-check mt-3">
                                <input type="radio" class="form-check-input" name="q1" value=1>
                                <label class="form-check-label">+</label>
                            </div>

                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="q1" value=0>
                                <label class="form-check-label">-</label>
                            </div>

                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="q1" value=0>
                                <label class="form-check-label">*</label>
                            </div>

                            <div class="form-check mb-4">
                                <input type="radio" class="form-check-input" name="q1" value=0>
                                <label class="form-check-label">%</label>
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
                                <label for="q1">The ___ operator is used to display the remainder of 2 numbers.</label>
                            </div>
                            <div class="form-check mt-3">
                                <input type="radio" class="form-check-input" name="q2" value=0>
                                <label class="form-check-label">+</label>
                            </div>

                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="q2" value=0>
                                <label class="form-check-label">-</label>
                            </div>

                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="q2" value=0>
                                <label class="form-check-label">*</label>
                            </div>

                            <div class="form-check mb-4">
                                <input type="radio" class="form-check-input" name="q2" value=1>
                                <label class="form-check-label">%</label>
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
                                <label for="q3">We cannot declare a variable with an operator.</label>
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
                                <label for="q4">What will the block of code below produce?</label>
                                <img src="{{ asset('images/variablesQ1.png') }}">
                            </div>
                            <div class="form-check mt-3">
                                <input type="radio" class="form-check-input" name="q4" value=0>
                                <label class="form-check-label">0</label>
                            </div>

                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="q4" value=0>
                                <label class="form-check-label">1</label>
                            </div>

                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="q4" value=0>
                                <label class="form-check-label">6</label>
                            </div>

                            <div class="form-check mb-4">
                                <input type="radio" class="form-check-input" name="q4" value=1>
                                <label class="form-check-label">Nothing</label>
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
                                <label for="q5">What will the block of code below produce?</label>
                                <img src="{{ asset('images/variablesQ2.png') }}">
                            </div>
                            <div class="form-check mt-3">
                                <input type="radio" class="form-check-input" name="q5" value=0>
                                <label class="form-check-label">5</label>
                            </div>

                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="q5" value=1>
                                <label class="form-check-label">10</label>
                            </div>

                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="q5" value=0>
                                <label class="form-check-label">20</label>
                            </div>

                            <div class="form-check mb-4">
                                <input type="radio" class="form-check-input" name="q5" value=0>
                                <label class="form-check-label">Nothing</label>
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
