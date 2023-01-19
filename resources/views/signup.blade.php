<head>
    <title> Sign Up | Henil Code</title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <div class="login-main">
        <div class="box">
            <div class="user-header">
                <img src="favicon.ico" alt="not load">
                <div class="h-data">
                    <a href="/" class="logo_name">Henil Codes</a>
                    <h5>Create Account</h5>
                </div>
            </div>
            <div class="infor">
                <form autocomplete="off" action="UserLog_phcode.php" method="post">
                    <div class="input_box">
                        <span class="TagIn">User name</span>
                        <input type="text" name="U_name" class="input" placeholder="type username" id="user" required title="User Name">
                    </div>
                    <div class="input_box">
                        <span class="TagIn">Email Address</span>
                        <input type="email" name="U_email" class="input" placeholder="type email" id="Uemail" required title="Email Address">
                    </div>
                    <div class="input_box">
                        <span class="TagIn">password</span>
                        <div class="passwor">
                            <input type="password" name="U_password" class="inputx" placeholder="type Password" id="Upassword" required title="Password">
                            <span class="bi bi-eye-fill" id="show_hide_password"></span>
                        </div>
                    </div>
                    <button class="Log_Button" type="submit" id="login" name="U_Signup">Sign Up</button>
                </form>
            </div>
            <div class="or">
                <div class="desd"></div>
                <span class="osr">OR</span>
                <div class="desd"></div>
            </div>
            <div class="box1_bottm">
                <span class="crea">Have an account?</span> <a href="{{ url('login') }}" class="sign_up"> Log In</a>
            </div>
        </div>

        <div class="Footer">
            <span>© 2022 <a href="/"> Henil Code</a> </span>
        </div>
    </div>
</body>
<script src="js/login.js"></script>