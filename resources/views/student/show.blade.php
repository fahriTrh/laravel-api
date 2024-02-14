<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    {{-- @dd($student->books[0]->name) --}}
    <ul>
        <li>{{ $student->name }}</li>
        <li>{{ $student->nim }}</li>
        <li>
            @foreach ($student->books as $book)
                <ul>
                    <li>{{ $book->student_id }}</li>
                    <li>{{ $book->num_pages }}</li>
                </ul>
                <br>
            @endforeach
        </li>
    </ul>
</body>

</html>
