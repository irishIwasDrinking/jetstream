<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class SpodStoreController extends Controller
{
    public function callSpodProductsApi(){
        $response = Http::spodapi()->get('/articles',['merchantId' => '129711']);
        //$response = Http::get('https://rest.spod.com/authentication');
            // 'X-SPOD-ACCESS-TOKEN' => '9377ee86-592b-46f3-ac85-122b979eef56'
            // 'id' => '129711'
        //dd($response->json());

        if ($response->ok()) {
            return view('store')->with('items',$response->json()) ;
        } else {
            return 'Error: ' . $response->status();
        }
    }
}
