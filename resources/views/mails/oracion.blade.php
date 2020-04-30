<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Registro Oraci&oacute;n</title>
</head>
<body>
    <p>Hola! {{ $oracion->nombres }}</p>
    <p>Su petici&oacute;n de oraci&oacute;n ha sido registrado con éxito.</p>
    <p>Pronto nos comunicaremos con usted.</p>
    <img src="{{ $message->embed(public_path() . '/images/ministry-2@1.5x.jpg') }}" />
    <p>Bendiciones.</p>
</body>
</html>