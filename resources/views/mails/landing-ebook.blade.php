<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Ebook - El Poder escondido de la Iglesia</title>
</head>
<body>
    <p>Hola {{ $landing->nombres }}</p>
    <p>Gracias por su interés en el nuevo libro "El Poder escondido de la Iglesia", esperamos sea de bendición
       para su vida. Adjuntamos el libro para que pueda ser accedido desde cualquier dispositivo. Shalom.
    </p>
    <br>
    <img src="{{ $message->embed(public_path() . '/images/background-ebook.jpg') }}" />
    <br>
    <p>Bendecido día.</p>
</body>
</html>