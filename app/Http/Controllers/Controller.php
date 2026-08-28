<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function index(){
        $product = [
            (object)['nama' => 'kaos'],
            (object)['harga']
        ];
    }
}

