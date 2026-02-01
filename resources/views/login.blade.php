<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login RTG</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
    <link rel="icon" href="images/rtg.png" type>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="js/auth.js"></script>
</head>

<body>
    <div class="login-awal">
        <div class="login-box">

            <div class="logo">
                <img src="images/rtg.png" alt="Logo" width="50px">
                <b>RatetheGame</b>
            </div>

            <h3><b>Welcome Back!</b></h3>
            <p class="dont">
                Don't have an account?
                <a href="register">Create new account now</a>
            </p>

            <form id="loginForm" onsubmit="handleLogin(event)">
                <label>Email or Username</label><input type="text" id="email" name="email" required>
                <label>Password</label><input type="password" id="password" name="password" required>

                <div class="pilihan">
                    <input type="checkbox" id="remember" class="remember">
                    Stay signed in
                </div>
                <button type="submit">Log in</button>
                <div id="errorMsg" class="alert alert-danger mt-3" style="display:none;"></div>
            </form> 
            <div class="forgot">
                <a href="forgot">Forgot Password?</a>
            </div>
            <div class="coba">Or continue with Google :</div>
            
            <div class="nyoba">
                <img class="social" src="images/google.svg">
            </div>
        </div>
    </div>
</body>

</html>