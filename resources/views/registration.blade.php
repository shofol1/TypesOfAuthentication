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
   <form action="{{ route('register_submit') }}" method="post">
    @csrf
    <div>Name</div>
    <div>
        <input type="text" name="name" id="">
    </div>
    <div>Email</div>
    <div>
        <input type="email" name="email" id="">
    </div>
    <div>Password</div>
    <div>
        <input type="password" name="password" id="">
    </div>
    <div>Confirm Password</div>
    <div>
        <input type="password" name="c_password" id="">
    </div>
    <div>
        <button>Submit</button>
    </div>
    <a href="{{ route('login') }}"> Already have an account?</a>

   </form>
</body>
</html>