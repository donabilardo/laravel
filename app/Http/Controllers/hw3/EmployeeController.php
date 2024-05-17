<?php

namespace App\Http\Controllers\hw3;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class EmployeeController extends Controller
{
    protected string $lightStyle = "alert-light";
    protected string $errorStyle = "alert-danger";
    protected string $successStyle = "alert-success";

    public function index()
    {
        $title = "Тестирование модели";
        $info = "Тестовая модель";
        $style = $this->lightStyle;


        return view('hw3/testmodel', ['title' => $title, 'info' => $info, 'style' => $style]);
    }

    public function AddUser(Request $request)
    {

        $user = new Employee();
        $user->email = $request->email;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->age = $request->age;
        $user->fulltext = $request->fulltext;
        $user->save();

        $res = Employee::all();

        $title = "Тестирование модели";
        $info = "Добавил пользователя $user->first_name $user->last_name";
        $style = $this->successStyle;


//        return view('hw3/resultmodel', ['title' => $title, 'info' => $info, 'style' => $style, 'employee' => $res]);

        return json_encode(Employee::query()->first(),JSON_UNESCAPED_UNICODE);

    }


    public function DelUser(Request $request)
    {
        $user_name = $request->first_name;


//        $test = Employee::find(3);
//        $test = Employee::where('age', '>', 5)->get();
//        return $test;

        Employee::where('first_name', $user_name);

        return Employee::query()->where('first_name', $user_name)->get();


    }

    public function GetUser()
    {

    }


}
