<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update samochodu</title>
</head>
<body>
    <div class="container">
        <form action=" {{ route('cars.update', ['id' => $car->id]) }}" method="post">
        <div>
            <label for="">Vin</label>
            <input type="text" name="vin" id="vin" value = " {{ $car-> vin}}">
        </div>
        <div>
            <label for="">color</label>
            <input type="text" name="color" id="color" value = " {{ $car-> color}}">
        </div>
        <div>
            <label for="">price</label>
            <input type="text" name="price" id="price" value = " {{ $car-> price}}">
        </div>  
        <div>
            <label for="">description</label>
            <input type="text" name="description" id="description" value = " {{ $car-> description}}">
        </div>
        </div>
        <div>
            <button type='submit'>Zaktualizuj</button>
        </div>
        </form>
    </div>
</body>
</html>