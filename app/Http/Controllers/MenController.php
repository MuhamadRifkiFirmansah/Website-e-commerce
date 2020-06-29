<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class MenController extends Controller
{
    public function index()
    {
        $data['product'] = Product::where('id_kategori','=','1')->paginate(3);

        return view('men.index',$data);
    }
}
