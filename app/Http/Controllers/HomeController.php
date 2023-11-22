<?php

namespace App\Http\Controllers;

use App\Services\KompasScrap;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(KompasScrap $ks){
        $limit = 2;
        return view('index', [
            'kompas' => array_slice($ks->getAllNews(), 0, $limit)
        ]);
    }
}
