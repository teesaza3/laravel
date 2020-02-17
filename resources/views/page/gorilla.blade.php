@extends('layouts.master')
@section('style')
    <style>
        h1{
        }


    </style>
@endsection

@section('content')
<div class="">
            <!-- <h1 class="mb-0  display-1 text-center" style="padding-top: 1rem;">{{ $name }}</h1> -->
            <div class="row no-gutters bg-light position-relative">
                <div class="col-md-6 mb-md-0 p-md-4">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ url('images/gorilla.jpg') }}"  height="400" class="d-block w-100" data-interval="2000">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ url('images/gorilla2.jpg') }}" height="400" class="d-block w-100" data-interval="2000">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ url('images/gorilla3.jpg') }}" height="400" class="d-block w-100" data-interval="2000">
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
                    <h5 class="mt-0 text-center">Gorilla Grill</h5>
                    <dl class="row" style="padding-top: 2rem;">
                        <dt class="col-sm-3"><i class="fas fa-comments"></i> รีวิว :</dt>
                        <dd class="col-sm-9">เมนูอาหารถือว่ามีความหลากหลาย ทั้งขนมหวาน น้ำแข็งใส ให้เลือกในราคาที่ไม่แพงนอกจากนี้เมนูสเต็กยังมีความหลากหลายมากขึ้นด้วย อีกทั้งมีการเพิ่มเมนู Clean สำหรับคนลดน้ำหนัก </dd>

                        <dt class="col-sm-3"><i class="far fa-clock"></i> เวลาทำการ :</dt>
                        <dd class="col-sm-9">
                            <p>11:00 - 21.30 น. </p>
                            <p></p>
                        </dd>

                        <dt class="col-sm-3"><i class="fas fa-map-marker-alt" width="50" height="50"></i> ที่อยุ่ </dt>
                        <dd class="col-sm-9"> 2137/6-7 ซอยงามวงศ์วาน64 (ตลาดอมรพันธ์ ตรงข้าม ม.เกษตร) แขวงลาดยาว เขตจตุจักร กรุงเทพมหานคร 10900</dd>

                    </dl>
                </div>
            </div>
            <div class="container" style="padding-top: 2rem;" >
            </div>
            <div class="">
                <h1 style="padding-left: 3rem;">เมนูแนะนำ</h1>

                <div class="row" style="padding-left: 3rem;">


                    <div class="card" style="width: 18rem;">
                        <img src="{{ url('images/grill1.jpg') }}" width="400" height="250" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <p class="card-text">ปลาดอลลี่ย่างสมุนไพร</p>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img src="{{ url('images/grill2.jpg') }}" width="400" height="250" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <p class="card-text">ปลาแซลมอนย่างซอสเทอริยากิ</p>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img src="{{ url('images/grill3.jpg') }}" width="400" height="250" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <p class="card-text">ซุปข้าวโพด</p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
@endsection


    
