<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/register.css" rel="stylesheet">
    <link rel="icon" href="images/rtg.png" type>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="js/auth.js"></script>
</head>

<body>
    <div class="gatau">
        <div class="wrapin">
            <div class="mantap">    
                <img class="gambar" src="images/rtg.png" alt="RTG Logo" width="50">
                <b class="RTG">RatetheGame</b><br>
            </div>
            <div class="acc"><br>
                <b>Create Account</b><br>
                Glad to see you! Connect with us—create an account.
            </div>

            <br>
            <form id="registerForm" onsubmit="handleRegister(event)">
                <div id="errorMsg" class="alert alert-danger mt-3" style="display:none;"></div>
                <div id="successMsg" class="alert alert-success mt-3" style="display:none;"></div>

                <label>Email</label><br>
                <input type="email" id="email" name="email" class="formulir" required><br>

                <label>Username</label><br>
                <input type="text" id="name" name="name" class="formulir" required><br>

                <label>Password</label><br>
                <input type="password" id="password" name="password" class="formulir" required><br>

                <label>Confirm Password</label><br>
                <input type="password" id="password_confirmation" name="password_confirmation" class="formulir" required><br>

                <button class="daftar" type="submit">Register</button>

                <a href="login">Already have an account?</a>
            </form>
            <div class="coba">Or continue with Google :</div>
            <div>
                <img class="social" src="images/google.svg">
            </div>
        </div>
    </div>
</body>

</html>