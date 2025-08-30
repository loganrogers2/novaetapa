<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Dados Associativos</h1>
    <ul>
        @foreach ($dados as $chave => $valor)
        <li>
        este é a primeira chave: {{ $chave }} e o valor é: {{ $valor }}
        </li>
        @endforeach
    </ul>
</body>
</html> 