<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){



        $data = ['product1'=>'iPhone','product2'=>'Samsung'];

    return view('products/home')->with('data',$data) ;

    }

public function show($name){


$data = ['iphone'=>'iPhone','samsung'=>'Samsung'];
return view('products.home',['products'=>$data[$name] ?? 'Product '.$name.' Does not exist']);
}






}
