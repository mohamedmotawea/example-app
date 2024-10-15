<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class NewStore extends Controller
{
  public function action(){
    return view('product.allProduct');
  }
};
