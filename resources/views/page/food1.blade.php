@extends('layouts.master')
@section('style')

@endsection

@section('content')
        <div class="center">
            <div class="row no-gutters bg-light position-relative">
                <div class="col-md-6 mb-md-0 p-md-4">
                    <img src="{{ url('images/pop_food.jpg') }}"" class="w-100" alt="...">
                </div>
                <div class="col-md-6 position-static p-4 pl-md-0">
                    <h5 class="mt-0 text-center">เมนูอาหาร</h5>
                    <dl class="row" style="padding-top: 2rem;">
                        <dt class="col-sm-3"> ชื่ออาหาร :</dt>
                        <dd class="col-sm-9"> เสต็กหมูพริกไทยดำ</dd>

                        <dt class="col-sm-3"> ส่วนผสม :</dt>
                        <dd class="col-sm-9">
                            <p>เนื้อหมูสันนอก, ซอสหอยนางรม, ซอสมะเขือเทศ, มายองเนส, น้ำมันงา, พริกไทยดำบุบ, โรสแมรี่, เนยสด, ซอสพริกไทยดำ</p>
                            <p></p>
                        </dd>

                        <dt class="col-sm-3">ความอร่อย </dt>
                        <dd class="col-sm-9"> 8/10</dd>
                    </dl>
                </div>
            </div>

        </div>
@endsection


    