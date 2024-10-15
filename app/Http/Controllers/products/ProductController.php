<?php

namespace App\Http\Controllers\products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
   public function allProduct(){
    $id=5;
    $name='mohamed';
   return view('Products.allProduct' ,compact('id' ,'name'));
   }

   public function updateProduct($myId='check id'){
    return view('products.update' ,compact('myId'));
    }

    public function deleteProduct(){
        return view('products.delete');
        }

    public function addProduct(){
    return view('products.addProduct');
    }
}


