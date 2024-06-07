<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">

    <link rel="stylesheet" href="style.css">

<title>portalsewakamera</title>

<style>
    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    section{
        display: flex;
        margin-bottom: 0px;

    }
    img{
        margin-left: 60px;

    }
    .kolom{
        margin-top: 190px;
        margin-bottom: 20px;
    }
    .kolom .deskripsi{
        font-size: 20px;
        margin-left: 30px;
        font-family: 'brush';
        line-height: 20px;
        color: #364f6b;
    }
    h2{
        font-family:'comic sans ms';
        font-weight: 800px;
        font-size: 30px;
        margin-left: 30px;
        color: #364f6b;
        width: 100%;
        line-height: 50px;
    }
    h3{
        font-family:'comic sans ms';
        font-weight: 800px;
        font-size: 30px;
        margin-left: 30px;
        color: #364f6b;
        width: 100%;
        line-height: 50px;
    }
    h4{
        margin-left: 30px;
        line-height: 30px;
        font-size: 15px;
        color: #364f6b;
    }
    header{
        height: px;
        background-color: #2096BA;
        font-family: sans-serif;
        font-weight:500px;
        color: black;
        line-height: 10px;
        padding: 2rem;
    }
    header a{
        font-family: Georgia, 'Times New Roman', Times, serif;
        text-decoration: none;
        color: white;
    }
    header h1{
        float: left;
        font-size: 24px;
        padding-left: 25px;
    }
    .container{
        float: right;
        padding-right: 30px;
    }
    .container::after{
        content: block;
        clear: both; 
    }
    
</style>


</head>
<body>
    <header>
        <h1><a href="">IFE CAMERAS</a></h1>
        <div class="container">
        <a href="<?php echo site_url('Home') ?>">Dashboard</a> |
        <a href="<?php echo site_url('Pegawai') ?>">Data Pegawai</a> |
        <a href="<?php echo site_url('Kamera') ?>">Data Kamera</a> |
        <a href="<?php echo site_url('User') ?>">Data User</a> |
        <a href="<?php echo site_url('Transaksi') ?>">Data Transaksi</a> |
        <a href="<?php echo site_url('Auth/logout') ?>">Keluar</a>
        </div>
</header>

<section id="home">
    <img src="https://i.pinimg.com/564x/c5/f6/bf/c5f6bf4a9df6d74588566d7fbb0c43c6.jpg" />
    <div class="kolom">
        <p class="deskripsi"> Sewa di IFE CAMERAS</p>
        <h2>Abadikan setiap moment dengan kamera</h2> 
        <h3>Biarkan foto berbicara lebih keras dari anda</h3>
        <h4>be your self, there's no one better</h4>
    </div>
</html>

 