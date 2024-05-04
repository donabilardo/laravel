<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class FormProcessor extends Controller
{
    public function test(Request $request): void
    {
        $a = $request->query;

        echo gettype($a);

        echo '<br>';
        var_dump($a);
        echo '<br>';


        dump($a);


        foreach ($a as $item) {
            echo $item . PHP_EOL;
        }


        echo "<pre>" . json_encode((array)$a, JSON_UNESCAPED_LINE_TERMINATORS | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) . "</pre>";
    }

    public function index(Request $request): string
    {

        return view('formview');
    }

    public function store(Request $request): string
    {
        //проверяем существует ли массив не пуст ли он
        if (count($request->query) != 0) {
            //если массив не пуст возвращаю json
            //return new Response(json_encode($request->query(), JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));

            //то же самое что и строка выше, но через ларавель

            return response()->json($request->query(), 200, [], JSON_UNESCAPED_UNICODE);

        } else {
            //если массив пустой или не существует возвращать ошибку
            //return new Response("Пустой запрос", 400);

            //то же самое что и строка выше, но через ларавель
            return response('', 400);

        }
    }
}
