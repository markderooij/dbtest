<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach($planets as $planet)
        <h2>{{ $planet->name }}</h2>
        <p>{{ $planet->description }}</p>
        <p>{{ $planet->size_in_km }}</p>
    @endforeach
</body>
</html>