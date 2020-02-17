@extends('layouts.master')
@section('style')

@endsection

@section('content')
        <div class="center">
            <div class="row no-gutters bg-light position-relative">
                <div class="col-md-6 mb-md-0 p-md-4">
                    <img src="{{ url('images/grill2.jpg') }}"" class="w-100" alt="...">
                </div>
                <div class="col-md-6 position-static p-4 pl-md-0">
                    <h5 class="mt-0 text-center">เมนูอาหาร</h5>
                    <dl class="row" style="padding-top: 2rem;">
                        <dt class="col-sm-3">ชื่ออาหาร :</dt>
                        <dd class="col-sm-9"> ปลาแซลมอนย่างซอสเทอริยากิ</dd>

                        <dt class="col-sm-3">ส่วนผสม :</dt>
                        <dd class="col-sm-9">
                            <p>เนื้อปลาแซลมอน, คิคโคแมน อะยิ-มิริน, คิคโคแมน ซอสถั่วเหลือง (โชยุ) , ขิงฝน , น้ำมันมะกอก, งาขาวคั่ว, งาดำคั่ว, ต้นหอมญี่ปุ่นซอย, พริกชี้ฟ้าแดงซอย, ซอสเทอริยากิ</p>
                            <p></p>
                        </dd>

                        <dt class="col-sm-3"> ความอร่อย </dt>
                        <dd class="col-sm-9"> 8/10</dd>
                    </dl>
                </div>
            </div>

        </div>
@endsection
