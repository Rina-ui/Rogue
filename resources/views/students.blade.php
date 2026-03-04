<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>

    * {
        padding: 2%;
        margin: 2%;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        font-family: "CaskaydiaCove Nerd Font", cursive;
        border-radius: 5px;
        font-size: 11px;
    }

    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #fff2f2;
    }

    tr:hover {
        background-color: #f5f5f5;
    }
</style>
<body>
<div>
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Age</th>
        </tr>
        </thead>
        <tbody>
        @foreach($students as $student)
            <tr>
                <td>{{$loop -> index + 1}}</td>
                <td>{{$student['firstname']}}</td>
                <td>{{$student['lastname']}}</td>
                <td>{{$student['age'] >= 18 ? 'Majeur':'Mineur'}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
