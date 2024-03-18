<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chat Rooms</title>
</head>
<body>
<div id="app">
    <h1>Chat Rooms</h1>
    <ul>
        @foreach($rooms as $room)
            <li>
                <a href="{{ route('rooms.show', $room->id) }}">Join {{ $room->name }}</a>
            </li>
        @endforeach
    </ul>
</div>
</body>
</html>
