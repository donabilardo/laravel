<header class="p-3 text-bg-dark">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
{{--                <li><a href="{{route('layout')}}" class="nav-link px-2 text-white">Главная</a></li>--}}
{{--                <li><a href="{{route('contacts')}}" class="nav-link px-2 text-white">Контакты</a></li>--}}

                @foreach($menu as $key=>$url)
                    <li><a href="{{$url}}" class="nav-link px-2 text-white">{{$key}}</a></li>
                @endforeach
            </ul>


            {{--            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">--}}
            {{--                <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search" wfd-id="id0">--}}
            {{--            </form>--}}

            {{--            <div class="text-end">--}}
            {{--                <button type="button" class="btn btn-outline-light me-2">Login</button>--}}
            {{--                <button type="button" class="btn btn-warning">Sign-up</button>--}}
            {{--            </div>--}}
        </div>
    </div>
</header>

