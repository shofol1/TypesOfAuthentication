<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @include('nav')
   <form action="">
    <div>Email</div>
    <div>
        <input type="email" name="" id="">
    </div>
    <div>Password</div>
    <div>
        <input type="password" name="" id="">
    </div>
    <div>
        <button>Submit</button>
    </div>
    <a href="{{ route('forgetpass') }}"> forgotten Password?</a>
   </form>
</body>
</html>