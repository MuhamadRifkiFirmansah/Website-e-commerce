@extends('layouts.template-admin')
@section('title','Tambah')

@section('content')

    <div class="container-fluid">
        <div class="row justify-content-center mt-5">
            <div class="col-10">
                <h2 class="text-center">Form Product</h2>
                <form action="{{url('admin/index/'.@$product->id_produk)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @if (!empty($product))
                        @METHOD('PUT')
                    @endif
                    <div class="form">
                        <div class="form-group">
                            <label for="">Nama Barang</label>
                            <input type="text" name="nama_barang" value="{{old('nama_barang',@$product->nama_barang)}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea class="form-control" id="deskripsi" name="deskripsi" value="{{old('deskripsi',@$product->deskripsi)}}" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Harga</label>
                            <input type="text" name="harga" class="form-control" value="{{old('harga',@$product->harga)}}">
                        </div>
                        <div class="form-group">
                            <label for="">Stok</label>
                            <input type="text" class="form-control" name="stok" value="{{old('stok',@$product->stok)}}">
                        </div>
                        <div class="form-group">
                            <label for="">Kategori</label>
                            <select name="id_kategori" id="" class="form-control">
                                @foreach($category as $row)
                                <option value ="{{$row->id_kategori}}"
                                    @if(@$product->id_kategori == $row->id_kategori)
                                    selected
                                    @endif>
                                    @if ($row->nama_kategori == '1')
                                        Laki-laki
                                    @else
                                        Perempuan
                                    @endif
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="custom-file">
                            <input type="file" name="file" class="custom-file-input" id="validatedInputGroupCustomFile">
                            <label class="custom-file-label" for="validatedInputGroupCustomFile">Choose file...</label>
                        </div>
                    </div>
                    @if(empty($product))
                        <button type="submit" class="btn-block btn btn-primary mt-3 text-uppercase">Submit</button>
                    @elseif(!empty($product))
                        <button type="submit" class="btn-block btn btn-warning mt-3 text-uppercase">Edit</button>
                    @endif
                </form>
            </div>
        </div>
    </div>
    <br><br>    
@endsection