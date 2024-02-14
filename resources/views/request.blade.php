<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body {
            background-color: #000;
            color: #ffffff;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <ul>
        <li>Path: {{ $path }}</li>
        <li>Url: {{ $url }}</li>
        <li>Full Url: {{ $fullUrl }}</li>
        <li>Append Query: {{ $fullUrlWithQuery }}</li>
        <li>Host: {{ $host }}</li>
        <li>Method: {{ $method }}</li>
        <li>IP Address: {{ $ipAddress }}</li>
        <li>
            Query:
            @foreach ($query as $q)
                {{ $q }}
            @endforeach
        </li>
        <li>All Input: 
            <ul>
                @foreach ($allInput as $input)
                    <li>{{ $input }}</li>
                @endforeach
            </ul>
        </li>
    </ul>

    <form action="{{ route('request.post') }}" method="POST">
        @csrf
        <input type="text" name="name" value="Fahri">
        <input type="text" name="level" value="junior">
        <button type="submit">Post</button>
    </form>

    <form action="{{ route('request.put') }}" method="POST">
        @csrf
        @method('put')
        <button type="submit">Put</button>
    </form>
</body>
</html>