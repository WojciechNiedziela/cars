<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Samochody</title>
</head>

<body>
    <div class="conatiner">
        <h3>Samochody</h3>
        <div class="nav">
            <div>
            <a href=" / "> Strona główna </a> 
            </div>
            <div>
            <a href=" {{ route('cars.create') }} "> Stwórz </a> 
            </div>
        </div>
        <div class="cars">

            <div class="filtrs">
                <form action="{{ route('cars.list') }}" method="get">
                    <div style="display: inline-block; margin:10px;">
                        <label for="vin">Vin</label>
                        <input type="text" name="vin" id="vin">
</div>
                    <div style="display: inline-block; margin:10px;">
                        <label for="color">Kolor</label>
                        <input type="text" name="color" id="color">  
</div>
                    <div style="display: inline-block; margin:10px;">
                        <label for="minPrice">Minimalna cena</label>
                        <input type="text" name="minPrice" id="minPrice">  
                    </div>
                    <div style="display: inline-block; margin:10px;">
                        <label for="description">Opis</label>
                        <input type="text" name="description" id="description">  
                    </div>
                    <div>
                        <button type="submit">Filtruj</button>
                    </div>
                </form>
            </div>
            
            <table>
                <thead>
                    <tr>
                        <th>Lp</th>
                        <th>Vin</th>
                        <th>Opis</th>
                        <th>Kolor</th>
                        <th>Cena</th>
                        <th>Szczegóły</th>
                        <th>Usuń</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cars as $car)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $car->vin }}</td>
                            <td>{{ $car->description }}</td>
                            <td>{{ $car->color }}</td>
                            <td>{{ $car->price }}</td>
                            <td>
                                <a href="{{ route('cars.show', ['id' => $car->id]) }}">Szczegóły</a> 
                            </td>
                            <td>
                                <a href="{{ route('cars.update', ['id' => $car->id]) }}">Edytuj</a> 
                            </td>
                            <td>
                                <form action=" {{ route('cars.destroy', ['id' => $car->id]) }} " method="post">
                                    <button type ="submit">Usuń<b/utton>    
                                <form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            
            <a href="/home">Strona główna</a>
        </div>
    </div>
</body>

</html>