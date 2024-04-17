@extends('layout.layout')

@section('title')

Functions - Quiz

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
                    document.getElementById("functions").submit();
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

            <form method="GET" action="{{ route('functionsRate') }}" id="functions">
                @csrf
                <div id="q1">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Question 1</div>
                        </div>
                        <div class="card-body">
                            <div class="display-4">
                                <label for="q1">What is a function in C++?</label>
                            </div>
                            <div class="form-check mt-3">
                                <input type="radio" class="form-check-input" name="q1" value=0>
                                <label class="form-check-label">A block of code that runs automatically.</label>
                            </div>

                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="q1" value=1>
                                <label class="form-check-label">A block of code that runs only when it is called.</label>
                            </div>

                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="q1" value=0>
                                <label class="form-check-label">A block of code used only within the main() function.</label>
                            </div>

                            <div class="form-check mb-4">
                                <input type="radio" class="form-check-input" name="q1" value=0>
                                <label class="form-check-label">A block of code that runs before the main() function.</label>
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
                                <label for="q2">What are parameters in a function?</label>
                            </div>
                            <div class="form-check mt-3">
                                <input type="radio" class="form-check-input" name="q2" value=0>
                                <label class="form-check-label">Data returned by the function.</label>
                            </div>

                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="q2" value=1>
                                <label class="form-check-label">Data passed into the function</label>
                            </div>

                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="q2" value=0>
                                <label class="form-check-label">Data printed by the function</label>
                            </div>

                            <div class="form-check mb-4">
                                <input type="radio" class="form-check-input" name="q2" value=0>
                                <label class="form-check-label">Data stored within the function</label>
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
                                <label for="q3">What does the keyword "void" mean in a function declaration?</label>
                            </div>
                            <div class="form-check mt-3">
                                <input type="radio" class="form-check-input" name="q3" value=0>
                                <label class="form-check-label">It indicates that the function returns an integer value</label>
                            </div>

                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="q3" value=0>
                                <label class="form-check-label">It indicates that the function returns a string value</label>
                            </div>

                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="q3" value=0>
                                <label class="form-check-label">It indicates that the function returns a boolean value</label>
                            </div>

                            <div class="form-check mb-4">
                                <input type="radio" class="form-check-input" name="q3" value=1>
                                <label class="form-check-label">It indicates that the function returns no value</label>
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
                                <label for="q4">When is a declared function executed in C++?</label>
                            </div>
                            <div class="form-check mt-3">
                                <input type="radio" class="form-check-input" name="q4" value=0>
                                <label class="form-check-label">Immediately after its declaration</label>
                            </div>

                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="q4" value=1>
                                <label class="form-check-label">When it is called inside the main() function</label>
                            </div>

                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="q4" value=0>
                                <label class="form-check-label">When the program starts running</label>
                            </div>

                            <div class="form-check mb-4">
                                <input type="radio" class="form-check-input" name="q4" value=0>
                                <label class="form-check-label">At the end of the program execution</label>
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
                                <label for="q5">What is the purpose of calling a function in C++?</label>
                            </div>
                            <div class="form-check mt-3">
                                <input type="radio" class="form-check-input" name="q5" value=1>
                                <label class="form-check-label">To execute the code within the function</label>
                            </div>

                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="q5" value=0>
                                <label class="form-check-label">To terminate the program</label>
                            </div>

                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="q5" value=0>
                                <label class="form-check-label">To skip the code within the function</label>
                            </div>

                            <div class="form-check mb-4">
                                <input type="radio" class="form-check-input" name="q5" value=0>
                                <label class="form-check-label">To display an error message</label>
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
