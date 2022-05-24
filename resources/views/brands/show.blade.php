<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Samochód</title>
</head>

<body>
    <div class="container">
        <h1>{{ $brand->name }} </h1>
        <h3>Szczegóły: </h3>
        <ul>
            <li>Marka: {{ $brand->name}}</li>
        </ul>
        <div>
            <ol>
            @foreach ($brand->cars as $car)
                    <li> {{ $car->vin }} </li>
                @endforeach
            </ol>
            
        </div>
    </div>
</body>

</html>