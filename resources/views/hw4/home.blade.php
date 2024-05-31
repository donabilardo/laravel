@extends('layout.default')

@section('content')
    <h1>{{$title}}</h1>
    <form action="{{route('hw4')}}" method="post" class="formAge">
        @csrf
        <div class="mb-3 col-3">
            <label for="age" class="form-label">Возраст</label>
            <input type="number" class="form-control" id="age" name="age" placeholder="Введите ваш возвраст">
        </div>
        <div class="col-3 mb-3">
            <button type="submit" class="btn btn-success mb-3 sendButton">Отправить</button>
        </div>
    </form>
    <br>
    @isset($age)
        @php
            $res = intval($age);
        @endphp
        @if($res > 18)
            <h1>Вам больше 18</h1>
        @elseif($res < 18)
            <h1>Вам меньше 18</h1>
        @else
            <h1>Вам больше ХЗ</h1>
        @endif
    @endisset
    <script>
        const inputAge = document.getElementsByName('age')[0].value;
        const sendButton = document.querySelector('.sendButton');
        const formAge = document.querySelector('.formAge');
        let token = document.getElementsByName('_token')[0].value;
        const options = {
            method: "POST",
            body: JSON.stringify(inputAge),
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': token
            }
        };

        sendButton.addEventListener('click', function (ev) {
            // ev.preventDefault()
            console.log(inputAge)
        })
    </script>
@endsection



