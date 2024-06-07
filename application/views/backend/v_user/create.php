<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<title>portalsewakamera</title>

<style>
    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
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
    .form{
        
    }
</style>

</head>
<body>
    <header>
        <h1><a href="">Sewa Kamera</a></h1>
        <div class="container">
        <a href="<?php echo site_url('Home') ?>">Beranda</a> |
        <a href="<?php echo site_url('Kamera') ?>">Data Kamera</a> |
        <a href="<?php echo site_url('Pegawai') ?>">Data Pegawai</a> |
        <a href="<?php echo site_url('User') ?>">Data User</a> |
        <a href="<?php echo site_url('Transaksi') ?>">Data Transaksi</a> |
        <a href="<?php echo site_url('Auth/logout') ?>">Keluar</a>
        </div>
</header>
</body>
</html>

<form class="a" action="<?php echo site_url ('User/save') ?>" method="post">
    <label>No Ktp User </label><br>
    <input type="text" name="no_ktp" value=""><p></p>

    <label>Nama User</label><br>
    <input type="text" name="nm_user" value=""><p></p>

    <label>No Telepon User</label><br>
    <input type="text" name="no_telp" value=""><p></p>

    <label>Alamat User</label><br>
    <input type="text" name="alamat" value=""><p></p>

    <button type="submit" name="button">Simpan</button>
    <a href="<?php echo site_url('User') ?>"><button type="button"
    name="button">Batal</button></a>

</form>