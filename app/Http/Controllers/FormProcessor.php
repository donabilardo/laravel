<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormProcessor extends Controller
{
    public function test(Request $request): void
    {
        $a = $request->query;

        echo gettype($a);

        dump($a);

        foreach ($a as $item){
            echo $item . PHP_EOL;
        }
    }
}
