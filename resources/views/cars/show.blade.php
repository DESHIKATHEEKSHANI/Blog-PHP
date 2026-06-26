<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Car {{ $car->id }}</title>
</head>

<body>
    <h1>Car {{ $car->id }}</h1>

    <ul>
        <li>Make: {{ $car->make }}</li>
        <li>Model: {{ $car->model }}</li>
        <li>Produced On: {{ $car->produced_on }}</li>
    </ul>
</body>

</html>