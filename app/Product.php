<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Product extends Model
{
    public $table = 'produk';
    protected $primaryKey = 'id_produk';

    protected $fillable = [
        'nama_barang', 'deskripsi','harga','gambar','stok','id_kategori'
    ];

    public function category()
    {
        return $this->hasOne('Category', 'id_kategori', 'kategori');
    }
}
