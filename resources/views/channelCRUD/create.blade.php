<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    Create new channel
    <form action="{{route('channel.storage')}}" method="post">
        @csrf
        <div>
            <label for="">Name</label>
            <input type="text" name="name">
        </div>
        <div>
            <input type="submit" value="create channel">
        </div>
    </form>
</body>
</html>