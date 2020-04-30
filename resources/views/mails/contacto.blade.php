<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Registro Contacto</title>
</head>
<body>
    <p>Hola! {{ $contacto->nombres }}</p>
    <p>Sus datos han sido registrados con éxito.</p>
    <p>Pronto nos comunicaremos con usted.</p>
    <img src="{{ $message->embed(public_path() . '/images/ministry-1@1.5x.jpg') }}" />
    <p>Bendiciones.</p>
</body>
</html>