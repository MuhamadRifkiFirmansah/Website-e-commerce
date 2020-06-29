<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $table = 'kategori';
    protected $fillable =
    [
        'id_kategori',
        'nama_kategori'
    ];

    // public function category()
    // {
    //     return $this->belongsTo('App\Product', 'kategori', 'kategori');
    // }
}
