@extends('layouts.master')
@section('style')

@endsection

@section('content')
        <div class="">
            <!-- <h1 class="mb-0  display-1 text-center" style="padding-top: 1rem;">{{ $name }}</h1> -->
            <div class="row no-gutters bg-light position-relative">
                <div class="col-md-6 mb-md-0 p-md-4">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ url('images/pop1.jpg') }}" class="d-block w-100" data-interval="2000">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ url('images/pop.jpg') }}" class="d-block w-100" data-interval="2000">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ url('images/pop2.jpg') }}" class="d-block w-100" data-interval="2000">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    </div>
                </div>
                <div class="col-md-6 position-static p-4 pl-md-0">
                    <h5 class="mt-0 text-center">Pop Steakhouse</h5>
                    <dl class="row" style="padding-top: 2rem;">
                        <dt class="col-sm-3"><i class="fas fa-comments"></i> รีวิว :</dt>
                        <dd class="col-sm-9">อาหารอร่อย ไม่แพง คุ้มราคามากๆ คุณภาพดีเกินราคาอาหารเป็นร้านที่เอื้อมถึงได้ทุกวัย เป็นหนึ่งในร้านเสต็กใกล้มหาวิทยาลัยเกษตร์ที่คนรู้จักน้อยแต่ว่าหากมาแล้วติดใจแน่นอน </dd>

                        <dt class="col-sm-3"><i class="far fa-clock"></i> เวลาทำการ :</dt>
                        <dd class="col-sm-9">
                            <p>10:00 - 21.00 น. </p>
                            <p></p>
                        </dd>

                        <dt class="col-sm-3"><i class="fas fa-map-marker-alt" width="50" height="50"></i> ที่อยุ่ </dt>
                        <dd class="col-sm-9">19/42-43 ซอยงามวงศ์วาน 62 ถนนงามวงศ์วาน เขตจตุจักร เเขวงลาดยาว กรุงเทพมหานคร 10900</dd>

                    </dl>
                </div>
            </div>
            <div class="container" style="padding-top: 2rem;" >
            </div>
            <div class="">
                <h1 style="padding-left: 3rem;">เมนูแนะนำ</h1>

                <div class="row" style="padding-left: 3rem;">



                    <div class="card" style="width: 18rem;">
                        <img src="{{ url('images/pop_food2.png') }}" width="400" height="250" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <p class="card-text">ผักโขมชีสอบเนย</p>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img src="{{ url('images/pop_food3.jpg') }}" width="400" height="250" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <p class="card-text">เสต็กปลาครีมซอส</p>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img src="{{ url('images/hint.png') }}" width="400" height="250" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                        <a type="button" href="{{ url('/food1/') }}" class="btn btn-primary">อาหารจานเด็ด</a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        
@endsection


    
