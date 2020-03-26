<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Sanpham;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function create (){
        return view('register');
    }


    public function sanpham(){

        for($sanpham = 0 ;$sanpham < 100000 ;$sanpham++){
        $sanpham = new Sanpham();

        $sanpham->name = "But";
        $sanpham->Price = 100;

        $sanpham->save();

        }
        return view('sanpham');

    }
}
