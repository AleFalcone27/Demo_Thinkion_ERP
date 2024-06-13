<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">
    <title> Dashboard </title>
</head>

<body>
    <div class="nav_bar">
        <div class="icon_container">
        </div>
        <div class="nav_bar_items_container">
            <div class="inbox_icon_container">
                <a href="">
                    <img class="inbox_icon" src="." alt="">
                </a>
            </div>
            <div class="done_icon_container">
                <img class="done_icon" src="">
                </a>
            </div>
            <div class="admin_icon_container">
                <a href="/user/admin">
                    <img class="admin_icon" src="" alt="">
                </a>
            </div>
        </div>

    </div>
    <form method="POST" action="{{ route('agregarTarea') }}">
        @csrf
        <input class="add_task" type="submit" value="+">
    </form>

    <form method="POST" action="{{ route('agregarTarea') }}" class="frmTask">
        @csrf
        <input name="titulo"  type="input" placeholder="Titulo">
        <input name="descripcion" type="input" placeholder="Descripcion">
        <input name="tiempoEstimado" type="input" placeholder="timepoEstimado">
        <input name="fecha" class="" type="date" placeholder="fecha">
        <input class="" type="submit" value="Agregar">
    </form>



</body>

</html>