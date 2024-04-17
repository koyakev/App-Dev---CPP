@extends('layout.layout')

@section('title')

Loops - Quiz

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
                    document.getElementById("loops").submit();
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

            <form method="GET" action="{{ route('loopsRate') }}" id="loops">
                @csrf
                <div id="q1">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Question 1</div>
                        </div>
                        <div class="card-body">
                            <div class="display-4">
                                <label for="q1">Which loop variant is best suited when the number of iterations is uncertain?</label>
                            </div>
                            <div class="form-check mt-3">
                                <input type="radio" class="form-check-input" name="q1" value=1>
                                <label class="form-check-label">While Loop</label>
                            </div>

                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="q1" value=0>
                                <label class="form-check-label">Do/While Loop</label>
                            </div>

                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="q1" value=0>
                                <label class="form-check-label">For Loop</label>
                            </div>

                            <div class="form-check mb-4">
                                <input type="radio" class="form-check-input" name="q1" value=0>
                                <label class="form-check-label">Any of the above</label>
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
                                <label for="q2">What will be the output of the following code snippet?</label>
                            </div>
                            <div class="form-check mt-3">
                                <input type="radio" class="form-check-input" name="q2" value=0>
                                <label class="form-check-label">10 8 6 4 2</label>
                            </div>

                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="q2" value=1>
                                <label class="form-check-label">10 8 6</label>
                            </div>

                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="q2" value=0>
                                <label class="form-check-label">10 8 6 5</label>
                            </div>

                            <div class="form-check mb-4">
                                <input type="radio" class="form-check-input" name="q2" value=0>
                                <label class="form-check-label">10 7 4 1</label>
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
                                <label for="q3">Which loop executes its block of code at least once?</label>
                            </div>
                            <div class="form-check mt-3">
                                <input type="radio" class="form-check-input" name="q3" value=0>
                                <label class="form-check-label">While Loop</label>
                            </div>

                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="q3" value=1>
                                <label class="form-check-label">Do/While Loop</label>
                            </div>

                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="q3" value=0>
                                <label class="form-check-label">For Loop</label>
                            </div>

                            <div class="form-check mb-4">
                                <input type="radio" class="form-check-input" name="q3" value=0>
                                <label class="form-check-label">None of the above</label>
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
                                <label for="q4">What is the primary difference between the while loop and the do/while loop?</label>
                            </div>
                            <div class="form-check mt-3">
                                <input type="radio" class="form-check-input" name="q4" value=0>
                                <label class="form-check-label">The syntax</label>
                            </div>

                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="q4" value=1>
                                <label class="form-check-label">The condition checking</label>
                            </div>

                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="q4" value=0>
                                <label class="form-check-label">The execution of the loop block</label>
                            </div>

                            <div class="form-check mb-4">
                                <input type="radio" class="form-check-input" name="q4" value=0>
                                <label class="form-check-label">There is no difference at all</label>
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
                                <label for="q5">In a for loop, which statement is executed every time after the loop block has been executed?</label>
                            </div>
                            <div class="form-check mt-3">
                                <input type="radio" class="form-check-input" name="q5" value=0>
                                <label class="form-check-label">Statement 1 (Declaration)</label>
                            </div>

                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="q5" value=0>
                                <label class="form-check-label">Statement 2 (Condition)</label>
                            </div>

                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="q5" value=1>
                                <label class="form-check-label">Statement 3 (Operation)</label>
                            </div>

                            <div class="form-check mb-4">
                                <input type="radio" class="form-check-input" name="q5" value=0>
                                <label class="form-check-label">None of the above</label>
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
