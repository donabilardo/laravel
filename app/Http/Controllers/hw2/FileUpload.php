<?php

namespace App\Http\Controllers\hw2;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FileUpload extends Controller
{
    protected string $lightStyle = "alert-light";
    protected string $errorStyle = "alert-danger";
    protected string $successStyle = "alert-success";
    protected static array $files;

    public function __construct()
    {
        self::$files[] = 0;
    }

    public function index()
    {
        $title = "Загрузка файлов на сервер";
        $info = "Форма загрузки файлов на сервер";
        $style = $this->lightStyle;
        return view('hw2/file', ['title' => $title, 'info' => $info, 'style' => $style, 'files' => self::$files]);
    }

    public function upload(Request $request)
    {
        $title = "Загрузка файлов на сервер";

        $style = $this->successStyle;
        self::$files[] = '11111111';


        $name = $request->input('input_file_name');
        $file = $request->file('input_file');
        $realpath = $file->getRealPath();
        $newFileName = $name . '.' .$file->getClientOriginalExtension();
        $info = "Файл $newFileName загружен";
        $file->move('./uploads', $newFileName);
        $urlPath = '/uploads/' . $newFileName;
        self::$files[] = $urlPath;

//        dump($name);
//        dump($file);


//        dump($request->header());

        return view('hw2/file', ['title' => $title, 'info' => $info, 'style' => $style, 'files' => self::$files]);

    }
}
