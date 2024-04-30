<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Offers extends Controller
{
    public function __invoke()
    {
        $offers = DB::connection('mysql')->table('offers')->select('name', 'link')->get();

        return view('bankList',
            ['offers' => $offers],
            ['dir' => __DIR__]
        );
    }
}
