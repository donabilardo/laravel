<!doctype html>
<html lang="ru">
<head>
@include('.layout.parts.head')
</head>
<body>
@include('.layout.parts.header')
<div class="wrapper">

    <div class="content container mt-3">
        @yield('content')
    </div>

    <div class="footer">
        @include('.layout.parts.footer')
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="js/hw5.js"></script>
</body>
</html>
