<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Start</title>
</head>

<body>
    <h1>Cooming soon</h1>
    <h2>Posts Page</h2>

    @foreach ($users as $key => $user)
    <p>{{ $key+1 }} - This is user {{ $user }}</p>
    @if ($key == 1)
    @break
    @endif
    @endforeach

</body>

</html>
