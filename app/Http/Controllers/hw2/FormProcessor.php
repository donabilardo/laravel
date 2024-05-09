<?php

namespace App\Http\Controllers\hw2;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class FormProcessor extends Controller
{
    public function index(): string
    {
        $title = "Урок 2. Контроллеры, экшены и роутинг";
        return view('hw2.userform', compact('title'));
    }

    public function store(Request $request)
    {

        $result = ["user_name" => $request->user_name, "user_soname" => $request->user_soname, "email" => $request->email];
        $title = "Форма добавления пользователя";
//        dump($result);
        return view('hw2/resultform', compact('result', 'title'));
    }
}
