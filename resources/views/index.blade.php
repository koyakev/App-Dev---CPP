@extends('layout.layout')

@section('title')
Dashboard
@endsection

@section('content')

@include('layout.navigation')

<style>

.jumbotron {
    background-image: url('https://image.benq.com/is/image/benqco/tips-home-office-setup4?$ResponsivePreset$');
    color: white;
    border-radius: 10px;
}

.mask {
    background-color: rgba(0, 0, 0, 0.6);
    padding: 170px;
    border-radius: 10px;
}

</style>

<div class="jumbotron m-2">
    <div class="mask">
        <div class="container">
            <h1 class="display-1">CPP</h1>
            <p class="lead">C++ Programming Practice</p>
            <hr class="my-4">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur fugit quibusdam totam nisi quam repudiandae cupiditate ea provident sit ab. Quos nostrum ad in veritatis sed voluptatum distinctio doloremque minima.</p>

            <a href="{{ route('registration') }}" class="btn btn-warning">Get Started!</a>
        </div>
    </div>
</div>


<div class="container mt-5">
    <div class="row align-items-center">
        <div class="col-6 justify-content-center">
            <h1>Beginner Friendly</h1>
            <p><i>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur reprehenderit voluptate suscipit et temporibus iure iste deserunt neque non ipsa numquam, commodi dolore? Hic tempora reiciendis, rem inventore reprehenderit ipsam.</i></p>
        </div>
        <div class="col-6">
            <img class="rounded" src="https://media.istockphoto.com/id/1356122303/photo/young-man-working-from-home-creative-professional-have-meeting-online.jpg?s=612x612&w=0&k=20&c=_Rl9LQjd81CxR-bIT529IS5fBShp2kjDiFIyFRa8DqY=">
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row align-items-center">
        <div class="col-6">
            <img class="rounded" src="https://media.istockphoto.com/id/1356122303/photo/young-man-working-from-home-creative-professional-have-meeting-online.jpg?s=612x612&w=0&k=20&c=_Rl9LQjd81CxR-bIT529IS5fBShp2kjDiFIyFRa8DqY=">
        </div>
        <div class="col-6 justify-content-center">
            <h1>Informative Lessons</h1>
            <p><i>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur reprehenderit voluptate suscipit et temporibus iure iste deserunt neque non ipsa numquam, commodi dolore? Hic tempora reiciendis, rem inventore reprehenderit ipsam.</i></p>
        </div>
    </div>
</div>

<div class="container m-5">
    <div class="row align-items-center">
        <div class="col-6 justify-content-center">
            <h1>Assessment Quizzes</h1>
            <p><i>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur reprehenderit voluptate suscipit et temporibus iure iste deserunt neque non ipsa numquam, commodi dolore? Hic tempora reiciendis, rem inventore reprehenderit ipsam.</i></p>
        </div>
        <div class="col-6">
            <img class="rounded" src="https://media.istockphoto.com/id/1356122303/photo/young-man-working-from-home-creative-professional-have-meeting-online.jpg?s=612x612&w=0&k=20&c=_Rl9LQjd81CxR-bIT529IS5fBShp2kjDiFIyFRa8DqY=">
        </div>
    </div>
</div>


@include('layout.footer')

@endsection
