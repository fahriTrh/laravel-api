<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    @foreach ($students as $student)
    <ul>
        <li>Name: {{ $student->name }}</li>
        <li>Nim: {{ $student->nim }}</li>
    </ul>
    @endforeach
</body>
</html>