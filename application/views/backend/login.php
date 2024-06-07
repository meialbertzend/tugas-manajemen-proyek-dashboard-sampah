<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>login | SEWA KAMERA</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">

<style>
    *{
        padding: 0;
        margin: 0;
        font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }
    body{
        background-color: #f8f8f8;
    }
    body h2{
        color: #2096BA;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    #bg-login{
        display: flex;
        height: 100vh;
        justify-content: center;
        align-items: center;
    }
    .box-login{
        text-align: center;
        width: 300px;
        min-height: 250px;
        border: 1px solid #ccc;
        background-color: #F0F5F8;
        padding: 20px;
        box-sizing: border-box;
    }
    .box-login h2{
        text-align: center;
        margin-bottom: 10px;
    }
    .input-control{
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        box-sizing: border-box;
    }
    .btn{
        padding: 8px 15px;
        background-color: #2096BA;
        color: #fff;
        border: none;
        cursor: pointer;
    }
</style>

</head>
<body id="bg-login">
    <div class="box-login">
        <h2>LOGIN</h2>
        <form action="<?php echo site_url('auth/login') ?>" method="POST"> 
        <label></label><br>
        <input type="text" name="id_pegawai" placeholder="Id Pegawai" class="input-control"><p></p>
        <label></label><br>
        <input type="password" name="password" placeholder="Password" class="input-control"><p></p>

<button type="submit" class="btn">Login</button>
      <div class="error-message"></div>
        </form>
    </div>
</body>
</html>