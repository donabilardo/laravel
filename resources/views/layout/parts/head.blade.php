<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{$title}}</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
{{--@isset($keywords)--}}
{{--    --}}{{--    <meta name="keywords" content="@foreach($keywords as $keyword)@if($loop->last){{$keyword}}@else{{$keyword}},@endif @endforeach">--}}
{{--    комент выше выводит ключевые слова как положено. без пробелов--}}
{{--    <meta name="keywords"--}}
{{--          content="--}}
{{--          @foreach($keywords as $keyword)--}}
{{--            @if($loop->last)--}}
{{--                {{$keyword}}--}}
{{--            @else{{$keyword}},--}}
{{--            @endif--}}
{{--          @endforeach">--}}
{{--@endisset--}}

@isset($keywords)
    <meta name="keywords" content="{{implode(',', $keywords)}}">
@endisset

<style>
    html,
    .content {
        min-height: calc(100vh - 80px);
    }
</style>
