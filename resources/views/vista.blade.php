<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hola Usuario</h1>
    @foreach ( $usuarios as $usuarios )
        <div>
            <h3>
                {{$usuarios>$nombre}}
            </h3>
            <br>
            <p>
                {{$usuarios>$email}}
            </p>
        </div>
    @endforeach
</body>
</html>