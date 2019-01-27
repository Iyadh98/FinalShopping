<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{URL::asset('assets/css/bootstrap.min.css')}}">
    <style>
        .bd1{
            background-color: #0c673b;
            width:50%;
            height: 300px;
            border-radius: 10px;
            left: 50%;
            top: 50%;
            margin-left: -25%;
            position: absolute;
            margin-top: -25%;
        }
    </style>
</head>
<body  style="background-color: #0b2e13">

<div class="container bd1">

<form action="{{ action('UserController@isAdm') }}" method="post">
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</body>
</html>