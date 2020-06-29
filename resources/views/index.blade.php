@extends('layouts.template')
@section('title','Viliments')
@section('content')
    
    <!-- Features -->
    <div class="row features ">
        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 px-0 features-1" onclick="location.href='men'">
            <p class="text-center title"><a class="border_menu text-uppercase text-white">Shop Men</a></p>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 px-0 features-2" onclick="location.href='women'">
            <p class="text-center title"><a class="border_menu text-uppercase text-white">Shop Women</a></p>
        </div>
    </div>


    {{-- info --}}
    <div class="row px-0 info">
        <div class="col info-border">
            <p class="mt-3 text-center text-white text-uppercase">Free return & exchange <a href="">More info</a></p>
        </div>
        <div class="col">
            <p class="mt-3 text-center text-white text-uppercase">Need help ? <a href="">Here</a> </p>
        </div>
    </div>
@endsection