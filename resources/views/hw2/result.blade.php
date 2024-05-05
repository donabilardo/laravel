
<table class="table">
    <thead>
    <tr>
        <th scope="col">Имя</th>
        <th scope="col">Фамилия</th>
        <th scope="col">E-Mail</th>
    </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{$result['user_name']}}</td>
            <td>{{$result['user_soname']}}</td>
            <td>{{$result['email']}}</td>
        </tr>
    </tbody>
</table>


<pre>

    <?php echo json_encode($result, JSON_UNESCAPED_UNICODE); ?>

</pre>


