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
        <div class="nav">
            <a href="{{route('cars.list')}}"> Samochody </a>
        </div>
        <form action=" {{ route('cars.create') }}" method="post">
        <div>
            <label for="">Vin</label>
            <input type="text" name="vin" id="vin">
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
            <label for="">registration_date</label>
            <input type="text" name="registration_date" id="registration_date">
        </div>
        <div>
            <label for="">description</label>
            <input type="text" name="description" id="description">
        </div>
        <div>
            <label for="">created_at</label>
            <input type="text" name="created_at" id="created_at">
        </div>
        <div>
            <label for="">brand_id</label>
            <input type="text" name="brand_id" id="brand_id">
        </div>
        <div>
            <label for="">model_id</label>
            <input type="text" name="model_id" id="model_id">
        </div>
        <div>
            <button type='submit'>Dodaj</button>
        </div>
        </form>
    </div>
</body>
</html>