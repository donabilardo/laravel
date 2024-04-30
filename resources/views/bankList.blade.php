<div>
    <table width="50%" border="2px">
        @foreach($offers as $offer)
            <tr>
                <td>{{$offer->name}}</td>
                <td>{{$offer->link}}</td>
            </tr>
        @endforeach
        <tr>
            <td colspan="2">
                {{$dir}}
            </td>
        </tr>
    </table>
</div>
