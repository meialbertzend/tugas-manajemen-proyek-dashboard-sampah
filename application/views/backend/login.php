<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: 'Roboto', sans-serif;
            background-color: #f0f0f0;
        }

        .login-container {
            display: flex;
            background-color: #5F9EA0;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            overflow: hidden;
        }

        .login-image {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: white;
            padding: 20px;
        }

        .login-image img {
            width: 250px;
            
        }

        .login-image p {
            font-family: 'Roboto', sans-serif;
            font-size: 16px;
            color: #333;
            margin-top: 10px;
        }

        .login-form {
            padding: 50px;
            width: 400px;
        }

        .login-form h2 {
            margin: 0 0 20px;
            color: white;
            font-family: 'Montserrat', sans-serif;
            font-size: 24px;
        }

        .login-form .social-login {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .login-form .social-login button {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 48%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 12px;
            font-family: 'Roboto', sans-serif;
        }

        .login-form .social-login button img {
            width: 20px;
            margin-right: 8px;
        }

        .login-form input {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-family: 'Roboto', sans-serif;
        }

        .login-form .remember-me {
            display: flex;
            align-items: center;
        }

        .login-form .remember-me input {
            margin-right: 5px;
        }

        .login-form .remember-me label {
            font-family: 'Roboto', sans-serif;
            font-size: 11px;
            color: white;
        }

        .login-form button.login-button {
            width: 100%;
            padding: 10px;
            background-color: white;
            border: none;
            border-radius: 5px;
            color: #5F9EA0;
            font-size: 14px;
            cursor: pointer;
            font-family: 'Montserrat', sans-serif
        }

        .login-form p {
            margin: 20px 0 0;
            color: #666;
            text-align: center;
            font-family: 'Roboto', sans-serif;
            font-size: 14px;
    }
        .login-container p {
            font-family: 'Montserrat', sans-serif;
            color: #009999;
        }
</style>

</head>
<body>
    <div class="login-container">
        <div class="login-image">
            <p>SISTEM PENCATATAN SAMPAH<br>TPS GO-SARI</p>
            <img src="https://img.freepik.com/premium-vector/simplified-cute-characters-illustrations-websites-application-screens_711010-1022.jpg?w=740" alt="Illustration">
            <p>Starts for free and get<br>attractive offers</p>
        </div>
        <div class="login-form">
            <h2>Login</h2>
            <form action="<?php echo site_url('auth/login') ?>" method="POST"> 
            <input type="text" name="id_user" placeholder="Id User" class="input-control">
            <input type="password" name="password" placeholder="Password" class="input-control">
            <div class="remember-me">

                <label for="rememberMe">Remember me</label>
            </div>

            <button class="login-button">Login</button>
            <div class="error-message"></div>
            <br></br>
            <div class="social-login">
                <button style="background-color: white; color: black;">
                    <img src="https://th.bing.com/th/id/OIP.t1rsr55wqbF2BJfjO81tsQHaHl?rs=1&pid=ImgDetMain" alt="Google">
                    Sign in with Google
                </button>
                <button style="background-color: #3B5998; color: white;">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" alt="Facebook">
                    Sign in with Facebook
                </button>
            </div>
        </div>
    </div>
</body>
</html>
