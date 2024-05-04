<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Форма для заполнения GB</title>
</head>
<body>
<form action="">
    @csrf
    <input type="text" placeholder="You name..." name="name_user_input">
    <input type="text" placeholder="You soname..." name="soname_user_input">
    <input type="email" placeholder="You email..." name="email_user_input">
    <button type="submit">Send</button>
</form>
</body>
</html>
