<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(): string
    {
        $title = 'Продвинутое программирование на PHP — Laravel';
        return view('home.index', compact('title'));
    }
}
