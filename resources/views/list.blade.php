<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    </head>
    <body class="antialiased">
        <form action="{{ route('list.update') }}" method="POST">
            @csrf
            <select name="car" id="">
                @foreach ($cars as $car)
                <option value="{{$car->id}}">{{$car->title}}</option>
                @endforeach
            </select>
            <select name="station" id="">
                @foreach ($stations as $station)
                <option value="{{$station->id}}">{{$station->title}}</option>
                @endforeach
            </select>
            <button type="submit">Submit</button>
        </form>
    </body>
</html>
