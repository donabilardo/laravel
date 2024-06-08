<?php

namespace App\Http\Controllers\hw5;

use App\Http\Controllers\Controller;
use App\Models\Inputs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;

class InputsController extends Controller
{
    public function index()
    {

        return view('hw5.add_user', [

            'title' => 'Inputs',
            'keywords' => ['реквест запрос', 'учу ларавель', 'бла бла'],
            'menu' => [
                'Добавить пользователя' => route('add_user'),
                'Список пользователей' => route('list_user'),
            ]

        ]);

    }

    public function AddUser(Request $request)
    {

        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');
        $user_age = $request->input('user_age');
        $user_email = $request->input('user_email');
        $user_data = $request->input('user_data');


//        return "имя:  $first_name  <br>имя:  $last_name   <br>Возраст:   $user_age   <br>E-mail:   $user_email   <br>Данные:   $user_data";
//        return $request->request->all();
        $inputs = new Inputs();
        $inputs->first_name = $first_name;
        $inputs->last_name = $last_name;
        $inputs->age = $user_age;
        $inputs->email = $user_email;
        $inputs->fulltext = $user_data;
        $inputs->save();

        return response(['result'=>'Пользователь добавлен','name'=>$first_name], 200)->header('Content-type', 'application/json');



//        return response('Hello World', 200)
//            ->header('Content-Type', 'text/plain');


    }


    public function list_user()
    {
        return view('hw5.list_user', [
            'title' => 'Список пользователей',
            'keywords' => ['форма добавления', 'добавить пользователя', 'бла бла'],
            'menu' => [
                'Добавить пользователя' => route('add_user'),
                'Список пользователей' => route('list_user'),
            ],
            'users'  =>  Inputs::all()
        ]);
    }

    public function user_profile($id)
    {

        $user  =  Inputs::find($id);
        $user = json_encode($user,JSON_UNESCAPED_UNICODE);



        return view('hw5.user_profile',  [
            'title' => 'Список пользователей',
            'keywords' => ['форма добавления', 'добавить пользователя', 'бла бла'],
            'menu' => [
                'Добавить пользователя' => route('add_user'),
                'Список пользователей' => route('list_user'),
            ],
            'user'   =>  Inputs::find($id)
        ]);

    }

    public function deluser($id)
    {
        Inputs::query()->where('id',$id)->delete();
        Redirect::route('list_user');
    }
}
