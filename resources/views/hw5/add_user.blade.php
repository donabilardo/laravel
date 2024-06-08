@extends('layout.default')

@section('content')
    <div class="container">
        <h1 class="center">Добавить пользователя</h1>

        <div class="row">
            <div class="col-md-4">
                <form action="{{ route('add_user_post') }}" method="POST" class="form">
                    @csrf


                    <div class="mb-3">
                        <label for="first_name" class="form-label">Имя пользователя</label>
                        <input type="text" class="form-control first_name" id="first_name" name="first_name"
                               placeholder="Иван" required>
                    </div>
                    <div class="mb-3">
                        <label for="last_name" class="form-label">Фамилия пользователя</label>
                        <input type="text" class="form-control last_name" id="last_name" name="last_name"
                               placeholder="Петров" required>
                    </div>
                    <div class="mb-3">
                        <label for="user_age" class="form-label">Возраст пользователя</label>
                        <input type="number" class="form-control user_age" id="user_age" name="user_age"
                               placeholder="Сколько лет" required>
                    </div>
                    <div class="mb-3">
                        <label for="user_email" class="form-label">Email address</label>
                        <input type="email" class="form-control user_email" id="user_email" name="user_email"
                               placeholder="ivan@example.com" required>
                    </div>
                    <div class="mb-3">
                        <label for="user_data" class="form-label">Email пользователя</label>
                        <textarea class="form-control user_data" id="user_data" name="user_data" rows="3"
                                  required></textarea>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary send_btn">Добавить</button>
                    </div>


                </form>
            </div>
            <div class=" col-md-4 info">

            </div>

        </div>

    </div>
@endsection
