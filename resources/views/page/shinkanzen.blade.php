@extends('layouts.master')
<!-- <link rel="stylesheet" href="{{ url('css/button.css') }}"> -->

@section('style')
<style>


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
                            <img src="{{ url('images/shin.jpg') }}"  height="400" class="d-block w-100" data-interval="2000">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ url('images/shin2.jpg') }}" height="400" class="d-block w-100" data-interval="2000">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ url('images/shin3.jpg') }}" height="400" class="d-block w-100" data-interval="2000">
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
                    <h5 class="mt-0 text-center">Shinkanzen Sushi</h5>
                    <dl class="row" style="padding-top: 2rem;">
                        <dt class="col-sm-3"><i class="fas fa-comments"></i> รีวิว :</dt>
                        <dd class="col-sm-9">ถือเป็นอีกหนึ่งในร้านซูชิราคาเบา เอาใจเหล่านักเรียน นักศึกษา เเละคนวัยทำงานมากกกก เพราะถึงราคาจะเบาเเต่คุณภาพไม่เบาเลยนะคะ ใครที่กำลังมองหาร้านอาหารญี่ปุ่นอยู่ ก็ลองไปทานร้านนี้กันดูได้นะคะ จะมากับเเก๊งค์เพื่อน 
                        แฟน หรือครอบครัว ก็เรียกได้ว่าตอบโจทย์ทุกกลุ่มเลยค่ะ ต้องไปลองงง! สาวกซูชิ ซาซิมิ บอกเลยว่าห้ามพลาด ฉ่ำมากกก</dd>

                        <dt class="col-sm-3"><i class="far fa-clock"></i> เวลาทำการ :</dt>
                        <dd class="col-sm-9">
                            <p>10:00 - 22.00 น. </p>
                            <p></p>
                        </dd>

                        <dt class="col-sm-3"><i class="fas fa-map-marker-alt" width="50" height="50"></i> ที่อยุ่ </dt>
                        <dd class="col-sm-9">85 ถนน งามวงศ์วาน แขวง ลาดยาว เขตจตุจักร กรุงเทพมหานคร 10900</dd>

                    </dl>
                </div>
            </div>
            <div class="container" style="padding-top: 2rem;" >
            </div>
            <div class="">
                <h1 style="padding-left: 3rem;">เมนูแนะนำ</h1>
                <div class="row" style="padding-left: 3rem;">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ url('images/sushi2.jpg') }}" width="400" height="250" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <p class="card-text">โรวปลาไหลย่าง</p>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img src="{{ url('images/sushi3.jpg') }}" width="400" height="250" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <p class="card-text">ซูชิเนื้อย่างออสเตรเลีย</p>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img src="{{ url('images/hint.png') }}" width="400" height="250" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                        <a type="button" href="{{ url('/food3/') }}" class="btn btn-primary">อาหารจานเด็ด</a>
                        </div>
                    </div>

                </div>



            </div>
            
        </div>
@endsection


    
