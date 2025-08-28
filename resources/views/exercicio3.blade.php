<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>exercicio3</h1>
    <ol>
        @foreach ($preco as $precos)
        <li>{{ $precos }}</li>
        @endforeach
    </ol>
</body>
</html>