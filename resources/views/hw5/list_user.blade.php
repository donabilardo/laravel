@extends('layout.default')

@section('content')
    <div class="container">
        <h1>Список пользователей</h1>
        <div class="row">
            <div class="col-md-6">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col"><font style="vertical-align: inherit;"><font
                                    style="vertical-align: inherit;">ID</font></font></th>
                        <th scope="col"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Имя</font></font>
                        </th>
                        <th scope="col"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Фамилия</font></font>
                        </th>
                        <th scope="col"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Профиль</font></font>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <th scope="row"><font style="vertical-align: inherit;"><font
                                        style="vertical-align: inherit;">{{$user->id}}</font></font></th>
                            <td><font style="vertical-align: inherit;"><font
                                        style="vertical-align: inherit;">{{$user->first_name}}</font></font></td>
                            <td><font style="vertical-align: inherit;"><font
                                        style="vertical-align: inherit;">{{$user->last_name}}</font></font></td>
                            <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                        <a href="list_user/{{$user->id}}">Профиль</a>
                                    </font></font></td>
                        </tr>
                    @endforeach

                    </tbody>

                </table>
            </div>
        </div>
    </div>
@endsection
