<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <title>
    Thinkion
    </title>

</head>

<body>

<body>
    <div class="container">
        <div class="logo_container">
            <h1> Thinkion </h1>  
        </div>
        <h2> Todo tu negocio en un sólo lugar </h2>
        <form method="POST" action="{{ route('validar-inicio') }}">
        @csrf
        <input class="input_name" type="text" name="name" placeholder="Name" required autocomplete="name">
            <input class="input_email" type="email" name="email" placeholder="Email" required autocomplete="email">
            <input class="input_pass" type="password" name="password" placeholder="Password" required autocomplete="new-password">
            <input class="submit_button" type="submit" value="Login">
            <a class="submit_button" href="{{route('registro')}}"> Register </a>
        </form>
    </div>
</body>


</body>

</html>











