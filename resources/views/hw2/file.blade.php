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
        <div class="col-6">
            <form method="post" action="{{route('upload')}}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="input_file_name" class="form-label">Имя для файла</label>
                    <input class="form-control" type="text" placeholder="Enter name for file"
                           aria-label="Enter name for file" name="input_file_name">
                </div>
                <div class="mb-3">
                    <label for="formFile" class="{{$style}}">Выберите файл для загрузки</label>
                    <input class="form-control" type="file" id="formFile" name="input_file">
                </div>
                <div class="mb-3">
                    <button class="btn btn-success" type="submit">Загрузить</button>
                </div>

                <div id="carouselExample" class="carousel slide">
                    <div class="carousel-inner">
{{--                        @for($i = 1; $i < count($files); $i++)--}}
{{--                            <div class="carousel-item active">--}}
{{--                                <img src="{{$files[$i]}}" class="d-block w-100">--}}
{{--                            </div>--}}
{{--                        @endfor--}}
                        @foreach($files as $item)
                            <div class="carousel-item active">
                                <img src="{{$item}}" class="d-block w-100">
                            </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                            data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                            data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

            </form>
            {{var_dump($files)}}

        </div>
        <div class="col-6 inf">
            <p>Реализация загрузки файлов на сервер</p>
        </div>
    </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>
