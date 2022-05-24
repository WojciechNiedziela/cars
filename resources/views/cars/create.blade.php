<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stwórz samochód</title>
</head>
<body>
    <div class="container">
        <form action=" {{ route('cars.create') }}" method="post">
        <div>
            <label for="">Vin</label>
            <input type="text" name="vin" id="vin">
        </div>
        <div>
            <label for="">description</label>
            <input type="text" name="description" id="description">
        </div>
        <div>
            <label for="">color</label>
            <input type="text" name="color" id="color">
        </div>
        <div>
            <label for="">price</label>
            <input type="text" name="price" id="price">
        </div>  
        <div>
            <button type='submit'>Dodaj</button>
        </div>
        </form>
    </div>
</body>
</html>