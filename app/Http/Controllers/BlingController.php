<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlingController extends Controller
{

    public $url;

    public function __construct()
    {
        $url = "https://bling.com.br/Api/v2/";
    }

    public function wladi($endpoint, $value){
        return $url.$endpoint.$value;
    }

}
