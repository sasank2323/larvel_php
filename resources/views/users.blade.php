<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,th,td
        {
            border:1px solid black;
            border-collapse: collapse;
        }
        </style>
</head>
<body>
    @if(isset($users))
        <table>
            <tr>
                <th>name</th>
                <th>Roll Number</th>
                <th>marks</th>
                <th>address</th>
            </tr>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->roll_number }}</td>
                <td>{{ $user->marks }}</td>
                <td>{{ $user->address }}</td>
            </tr>
            @endforeach
        </table>
    @endif
</body>
</html>