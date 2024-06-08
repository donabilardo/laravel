@extends('layout.default')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">

            <div class="card">
                <div class="card-body">
                    <h1>Профиль пользователя, {{$user->first_name}}</h1>
                    <p>Имя: {{$user->first_name}}</p>
                    <p>Фамилия:  {{$user->last_name}}</p>
                    <p>Дата регистрации: {{$user->created_at}}</p>
                    <p>Email: {{$user->email}}</p>
                    <div class="card-footer">
                        Удалить профиль: <a href="{{route('deluser', $user->id)}}" class="btn btn-danger">OK</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
