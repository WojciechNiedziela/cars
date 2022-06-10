<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Użytkownicy</title>
</head>

<body>
    <div class="container">
        <h3>Użytkownicy</h3>
        <div class="users">

            <table>
                <thead>
                    <tr>
                        <th>Lp</th>
                        <th>Nazwa użytkownika</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>                  

                        </tr>
                    @endforeach
                </tbody>
            </table>

            <a href="/home">Strona główna</a>
        </div>
    </div>
</body>

</html>