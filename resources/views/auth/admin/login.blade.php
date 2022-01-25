<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SBDA Admin Sign In</title>

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="/css/login-css/animate.css">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="/css/login-css/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>

<body>
<div class="container">
    <div class="top">
        <h1 id="title" class="hidden">
            <span id="logo">
                <img src="{{ asset('images/logo/logo.png') }}" alt="SBDA" height="110">
            </span>
        </h1>
    </div>
    <div class="login-box animated fadeInUp">
        <div class="box-header">
            <h2>Admin</h2>
        </div>
        <form action="{{ route('admin.login.post') }}" method="POST" >
            <label for="username">Email</label>
            <br/>
            <input type="text" id="username" name="email">
            <br/>
            <label for="password">Password</label>
            <br/>
            <input type="password" id="password" name="password" >
            <br/>
            <button type="submit">Sign In</button>
            <br/>
        </form>
        <a href="#"><p class="small">Forgot your password?</p></a>
    </div>
</div>
</body>

<script>
    $(document).ready(function () {
        $('#logo').addClass('animated fadeInDown');
        $("input:text:visible:first").focus();
    });
    $('#username').focus(function() {
        $('label[for="username"]').addClass('selected');
    });
    $('#username').blur(function() {
        $('label[for="username"]').removeClass('selected');
    });
    $('#password').focus(function() {
        $('label[for="password"]').addClass('selected');
    });
    $('#password').blur(function() {
        $('label[for="password"]').removeClass('selected');
    });
</script>

</html>
