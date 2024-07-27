<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    Edit Channel
    <form action="{{route('channel.update',['channel'=>$channel])}}" method="post">
        @csrf
        @method('put')
        <div>
            <label for="">Name</label>
            <input type="text" name="name" value="{{$channel->name}}">
        </div>
        <div>
            <input type="submit" value="Update">
        </div>
    </form>
</body>
</html>