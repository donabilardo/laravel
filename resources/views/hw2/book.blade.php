<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css">
    <title>{{$title}}</title>
</head>
<body>
<div class="container">
    @include('component/navbar/index')
    <div class="alert {{$style}}" role="alert" style="margin: 20px 0px">
        <h4>{{$info}}</h4>
        {{$composer_data}}<br>
        {{$mydata}}
    </div>

    <div class="row">
        <div class="col-6">
            <table class="table">
                <tbody>
                <thead>
                <tr>
                    <td><strong>ID</strong></td>
                    <td><strong>Книга</strong></td>
                    <td></td>
                </tr>
                </thead>
                @foreach($book as $key => $item)
                    <tr>
                        <td>{{$key}}</td>
                        <td>{{$item}}</td>
                        <td><a href="/book/{{$key}}" class="btn btn-danger btn-sm" @csrf>Удалить книгу</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            <form method="post" action="/book/add">
                <h3>Добавить книгу</h3>
                @csrf
                <input type="text" class="form-control mb-3" placeholder="Название книги" name="book_name_add">
                <button type="submit" class="btn btn-success  mb3">Сохранить</button>
            </form>
        </div>
        <div class="col-6">
            <p class="inf">
    Форма для просмотра, добавления и удаления книг
            </p>
        </div>
    </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>
