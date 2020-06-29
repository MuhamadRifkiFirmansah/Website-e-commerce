<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
use App\Product;
use App\Category;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data['product'] = Product::all();
        return view('admin.index',$data);        
    }

    public function create()
    {  
        $data['category'] = Category::all();
        return view('admin.add',$data);
    }

    public function store(Request $request)
    {
        $input= $request->all();
        

		$file = $request->file('file');
        //video
        $nama_file = time()."_".$file->getClientOriginalName();
        $tujuan_upload = 'tmp/product';
        $file->move($tujuan_upload,$nama_file);

        $product = new Product;
        $product->nama_barang = $input['nama_barang'];
        $product->deskripsi = $input['deskripsi'];
        $product->harga = $input['harga'];
        $product->stok = $input['stok'];
        $product->id_kategori = $input['id_kategori'];
        $product->gambar = $nama_file;       

        $product->save();
        
        return redirect('admin/index');
    }

    public function edit($id_produk)
    {

        $data['category'] = Category::all();
        $data['product'] = Product::find($id_produk);
        return view('admin.add', $data);
    }

    public function update(Request $request,$id_produk)
    {
        $input= $request->all();

        $product = Product::find($id_produk);
        $product->nama_barang = $input['nama_barang'];
        $product->deskripsi = $input['deskripsi'];
        $product->harga = $input['harga'];
        $product->stok = $input['stok'];
        $product->id_kategori = $input['id_kategori'];
        
        if ($request->hasFile('file'))
        {
            $file = $request->file('file');
            // if ($file->file != '' && File::exists('tmp/product'. $file->file))
            //     File::delete($destination . $file->file);
            $name = time().'-'.$file->getClientOriginalName();
            $destination = "tmp/product";

            $file->move($destination,$name);
        }
        
        $product->gambar = $name;
        $product->save();

        return redirect('admin/index');
    }

    public function destroy(Request $request,$id_produk)
    {
        $data = Product::find($id_produk);
        $gambar = $data->gambar;
        File::delete('tmp/product/'.$gambar);
        $data->delete();

        return redirect('admin/index');
    }
}
