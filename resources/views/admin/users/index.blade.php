<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Users</h1>

    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Ações</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($users as $user)

            <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Users</h1>
    <table>
        

        
            @forelse ($users as $user)

            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Ações</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>-</td>
                </tr>

            @empty
                <tr>
                    <td colspan="100">Nenhum usuário econtrado no banco de dados </td>
                </tr>     
            @endforelse
        </tbody>
    </table>
</body>
</html>


                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>-</td>
                </tr>

            @empty
                <tr>
                    <td colspan="100">Nenhum usuário econtrado no banco de dados </td>
                </tr>     
            @endforelse
        </tbody>
    </table>
</body>
</html>