@extends('layouts.master')


@section('content')

<div class=" container blockquote text-center" >
    <blockquote class="blockquote">
    <h1 class="mb-0  display-1" style="padding-top: 1rem;">ร้านอาหาร</h1>
    <p style="color: grey;"><em>รอบมหาวิทยาลัย<a style="color: green;">เกษตร์ศาสตร์</a></em></p>
    </blockquote>
    <hr>
    <div class="container">
        <div class="row ">
            <div class="col-sm">
                <div class="card" style="width: 18rem;">
                    <img src="{{ url('images/pop.jpg') }}" width="200" height="300" class="card-img-top" alt="..." >
                    <div class="card-body">
                        <p class="card-text">Pop Steakhouse</p>
                        <a href="{{ url('/pop/') }}" class="stretched-link"></a>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card" style="width: 18rem;" >
                    <img src="{{ url('images/gorilla.jpeg') }}" width="200" height="300" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Gorilla Grill</p>
                        <a href="{{ url('/gorilla/') }}" class="stretched-link"></a>

                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card" style="width: 18rem;">
                    <img src="{{ url('images/shinkanzen.jpg') }}" width="200" height="300" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Shinkansen sushi</p>
                        <a href="{{ url('/shinkansen/') }}" class="stretched-link"></a>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr>

</div>
@endsection
