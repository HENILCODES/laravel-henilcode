<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />
    <link rel="icon" href="favicon.ico">
    <title> Log in | Henil Code</title>
    <link rel="stylesheet" href="../css/user.css">
<head>
<body>
    <div class="login-main">
        <div class="box">
            <div class="user-header">
                <img src="favicon.ico" alt="not load">
                <div class="h-data">
                    <a href="/" class="logo_name">Henil Codes</a>
                    <h5>Welcome back!</h5>
                </div>
            </div>
            <div class="infor">
                <form autocomplete="off" action="/userD" method="post">
                    @method('PUT')
                    @csrf
                    <div class="input_box">
                        <span class="TagIn">User name</span>
                        <input type="text" name="U_name" class="input" placeholder="type username" id="user" required title="User Name">
                    </div>
                    <div class="input_box">
                        <span class="TagIn">password</span>
                        <div class="passwor">
                            <input type="password" name="U_password" class="inputx" placeholder="type Password" id="Upassword" required title="Password">
                            <span class="bi bi-eye-fill" id="show_hide_password"></span>
                        </div>
                    </div>
                    <button class="Log_Button" type="submit" id="login" name="U_Login">Log in</button>
                </form>
            </div>
            <div class="or">
                <div class="desd"></div>
                <span class="osr">OR</span>
                <div class="desd"></div>
            </div>
            <div class="box1_bottm">
                <span class="crea">Don't have an account?</span> <a href="{{ url('signup') }}" class="sign_up"> Sign up</a>
            </div>
        </div>
        <div class="Footer">
            <span>&copy; 2022 <a href="/"> Henil Code</a> </span>
        </div>
    </div>
</body>
<script src="js/login.js"></script>