@extends('layouts.template')
@section('title','Men')

@section('content')
    <div class="container">
        <h2 class="text-white text-center m-3">Men Product</h2>
        <div class="row mt-5">
            @foreach ($product as $item)
            <div class="col-lg-4 col-md-auto col-xl-4 col-sm-12 text-center">
                <div class="card" style="width: 18rem;">
                    <img src="{{'tmp/product/'.$item->gambar}}" class="card-img-top img-fluid" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">{{$item->nama_barang}}</h4>
                        <p class="card-text">{{$item->deskripsi}}.</p>
                        <p class="card-footer">Rp.{{$item->harga}}</p>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col">
                <a class="btn btn-outline-primary mx-auto" href="{{url('men/all')}}">See All</a>
            </div>
        </div>
    </div>

@endsection