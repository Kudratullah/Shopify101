<?php

namespace App\Http\Controllers;

use Gnikyt\BasicShopifyAPI\BasicShopifyAPI;
use Illuminate\Support\Facades\Auth;

class Welcome extends Controller {
    public function index() {

        $shop = Auth::user();
        /** @type BasicShopifyAPI $api */
        $api = $shop->api();
        $data = $api->rest('GET', '/admin/shop.json');

        return view('welcome', [
            'pageTitle' => 'Welcome',
            'user' => auth()->user(),
            'data'  => $data['body']['container']['shop'],
        ] );
    }
}
