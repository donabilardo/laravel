<?php mb_internal_encoding('UTF-8');?>
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
    </div>

    <div class="row">
        <div class="col-3">

            <form method="post" action="{{route('add_user')}}">
                @csrf
                <div class="input-group mb-3">

                    <input type="text" class="form-control" placeholder="имя пользователя" aria-label="Имя"
                           aria-describedby="basic-addon1" name="first_name" id="first_name">
                </div>
                <div class="input-group mb-3">

                    <input type="text" class="form-control" placeholder="фамилия пользователя" aria-label="Фамилия"
                           aria-describedby="basic-addon1" name="last_name" id="last_name">
                </div>
                <div class="input-group mb-3">

                    <input type="email" class="form-control" placeholder="email пользователя" aria-label="email"
                           aria-describedby="basic-addon1" name="email" id="email">
                </div>
                <div class="input-group mb-3">

                <textarea class="form-control" placeholder="Описание" aria-label="Описание"
                          aria-describedby="basic-addon1" name="fulltext" id="fulltext"></textarea>
                </div>
                <div class="input-group mb-3">

                    <input type="number" class="form-control" placeholder="Возраст" aria-label="Возраст"
                           aria-describedby="basic-addon1" name="age" id="age">
                    <button class="btn btn-success">Отправить</button>
                </div>
            </form>
        </div>


        <div class="col-6">
            @foreach($employee as $user)
                <p>{{$user->first_name}} {{$user->last_name}}, {{$user->age}} лет</p>
                <p>{{$user->fulltext}}</p>
                <p>{{$user->email}}</p>
            @endforeach

        </div>
    </div>
    <div class="row">
        <h2>Удаление пользователя</h2>
        <div class="col-6">
            <form class="del_user" method="post" action="del_user">
                @csrf
                <div class="mb-3">
                    <input class="form-control del_user_input" type="text" id="del_user">
                </div>
                <div class="mb-3">
                    <a class="btn btn-danger del_user_link" href="">Удалить пользователя</a>
                </div>
            </form>
        </div>
        <div class="col-6">

        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
<script src="js/script.js"></script>
</body>
</html>
