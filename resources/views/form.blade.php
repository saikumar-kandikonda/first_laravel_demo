<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <x-header/>
    <div> 
        <ul>
    @foreach($errors->all() as $e)
    <li>{{$e}}</li>
    @endforeach
    </ul>
    </div>
    <form action="usercontrol" method="post">
        @csrf
enter your name <input type="text" name="name">
enter your email <input type="text" name="email">
enter your passwrod <input type="password" name="pwd">
enter your mobilenumber <input type="text" name="mobile">
<input type="submit">
</form>
</body>
</html>