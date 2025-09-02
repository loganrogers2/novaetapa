<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>A quantidade de itens é: {{ $quantidade }}</p>
   
    <ul>
        @foreach ($itens as $item)
            <li>
                {{ $item }}
                @if ($item == 'item 1')
                    <strong> produto em promoção</strong>
                @endif
            </li>
        @endforeach 
    </ul>
</body>
</html>