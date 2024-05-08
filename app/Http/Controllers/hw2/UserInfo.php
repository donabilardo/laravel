<?php

namespace App\Http\Controllers\hw2;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use stdClass;


class UserInfo extends Controller
{
    public function GetUserInfo()
    {
        $user = new \stdClass();
        $user->id = 1;
        $user->name = 'John';
        $user->last_name = 'Connor';
        $user->age = 23;

        $json = json_encode($user);
        $response = new Response($json);
        $response->header("Content-type", "application/json");

        return $response;

    }

    public function GetUserInfo2()
    {
        $user = new stdClass();
        $user->id = 1;
        $user->name = 'John';
        $user->last_name = 'Connor';
        $user->age = 23;

        return response()->json($user);
    }

}
