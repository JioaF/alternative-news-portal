<?php

namespace App\Http\Controllers;

use App\Services\KompasScrap;
use Illuminate\Http\Request;

class KompasController extends Controller
{
    public function index(KompasScrap $ks){
        return view('news.kompas.index', [
            'news' => $ks->getAllNews()
        ]);
    }
    public function read(Request $request,  KompasScrap $ks){
        $url = $request->get('link');
        return view('news.kompas.read', $ks->readNews($url));
    }
}
