<?php

namespace App\Http\Controllers\hw4;

use App\Http\Controllers\Controller;
use App\Models\Layout;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;


class LayoutController extends Controller
{
    public function index()
    {
        $test = new Layout();
        $test->name = "Test name11";
        $test->age = 1113;
        $test->save();
        return view('hw4.home',['title'=>'Главная']);
    }

    public function Contacts()
    {
        return view('hw4.contacts',['title'=>'Контакты']);
    }

    public function checkAge(Request $request)
    {
        return view('hw4.home',['title'=>'Проверка возраста', 'age'=>$request->input('age')]);
    }

}
