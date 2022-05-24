<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modele</title>
</head>

<body>
    <div class="container">
        <h3>Modele</h3>
        <div class="brands">

            <table>
                <thead>
                    <tr>
                        <th>Lp</th>
                        <th>Nazwa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($models as $models)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $models->name }}</td>

                            <td>
                                <a href="{{ route('models.show', ['id' => $models->id]) }}">Szczegóły</a> 
                            </td>

                            <td>
                                <form action="{{ route('models.destroy', ['id' => $models->id]) }}" method="get">
                                    <button type="submit">Usuń</button>
                                </form>

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