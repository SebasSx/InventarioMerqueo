<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ProductController extends Controller
{
    public function store(Request $request){

        Product::create($request->all());

        $products = Product::all();

        return view("products.index")->with(['products'=>$products]);
    }


    public function chargeFile(Request $request)
    {
        Excel::load($request->file('file'), function($file){
               $result = $file->get();

               foreach ($result as $key => $value){
                   if($value->comando == 'activar'){
                       $this->activar($value->id);
                   }

                   if($value->comando == 'inactivar'){
                       $this->inactivar($value->id);
                   }

                   if($value->comando == 'agregar'){
                       $this->agregar($value->id, $value->valor);
                   }

                   if($value->comando == 'restar'){
                       $this->restar($value->id, $value->valor);
                   }
               }

        })->get();

        $products = Product::all();

        return view("products.index")->with(['products'=>$products]);
    }

    public function activar($id){

        $product = Product::findOrFail($id);
        $product->estado = 1;
        $product->save();

    }

    public function inactivar($id){

        $product = Product::findOrFail($id);
        $product->estado = 0;
        $product->save();

    }

    public function agregar($id, $valor){

        $product = Product::findOrFail($id);
        $product->unidades = $product->unidades + (int) $valor;
        $product->save();
    }

    public function restar($id, $valor){

        $product = Product::findOrFail($id);
        $product->unidades = $product->unidades - (int) $valor;
        $product->save();

    }
}
