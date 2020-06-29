@extends('layouts.template-admin')
@section('title','Data Barang')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center mt-3">
        <div class="col-10">
            <a href="{{url('admin/form')}}" class="btn btn-primary text-left">Tambah</a>
        </div>
    </div>
    <div class="row justify-content-center text-center my-4">
        <div class="col-10 table-responsive">
            <table class="table border table-hover">
                <tr class="bg-dark text-white">
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Deskripsi</th>
                    <th>Harga</th>
                    <th>Gambar</th>
                    <th>Stok</th>
                    <th>Kategori</th>
                    <th>Action</th>
                </tr>
                @foreach ($product as $item)
                    <tr>
                        <td>{{isset($i) ? ++$i : $i = 1}}</td>
                        <td>{{$item->nama_barang}}</td>
                        <td>{{$item->deskripsi}}</td>
                        <td>Rp.{{$item->harga}}</td>
                        <td>{{$item->gambar}}</td>
                        <td>{{$item->stok}}</td>
                        @if ($item->id_kategori == '1')
                            <td>Laki-laki</td>
                        @else
                            <td>Perempuan</td>
                        @endif
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{url('admin/form/'.$item->id_produk)}}" class="btn btn-warning">Edit</a>
                                {{-- <form action="{{url('admin/delete/'.$item->id_produk)}}" method="post">
                                    @csrf
                                    @method('DELETE') --}}
                                    <a href="{{url('admin/delete/'.$item->id_produk)}}" class="btn btn-danger" >Delete</a>
                                {{-- </form> --}}
                            </div>
                        </td>
                    </tr>
                    @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
