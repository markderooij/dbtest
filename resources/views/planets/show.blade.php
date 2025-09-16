<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h2>{{ $planet[0]->name }}</h2>
    {{ $planet[0]->description }}
    {{ $planet[0]->size_in_km }}
</body>
</html>