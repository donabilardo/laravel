<?php

namespace App\Http\Controllers\hw2;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookController extends Controller
{

    protected array $book = [
        'Book1', 'Book2', 'Book3'
    ];

    protected string $lightStyle = "alert-light";
    protected string $errorStyle = "alert-danger";
    protected string $successStyle = "alert-success";

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $title = "Список книг";
        return view('hw2/book', ['book' => $this->book, 'info' => $title, 'title'=>$title, 'style'=>"alert-light"]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $book = $request->book_name_add;
        $this->book[] = $book;
        $info = "Книга $book добавлена";
        return view('hw2/book', ['book' => $this->book, 'info' => $info, 'title'=>"Списко книг", 'style'=>"alert-success"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        if (key_exists($id, $this->book)) {
            $tmp = $this->book[$id];
            unset($this->book[$id]);
            return view('hw2/book',['book' => $this->book, 'info' => "Книга $tmp удалена", 'title'=>"Списко книг",'style'=>"alert-success"]);

        } else {
            return view('hw2/book',['book' => $this->book, 'info' => 'Ошибка при удалении книги', 'title'=>"Списко книг",'style'=>"alert-danger"]);
        }

    }
}
