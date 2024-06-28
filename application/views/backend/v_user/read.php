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
</body>
</html>

<style>
    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    tr{
        border-collapse: collapse;
        font-size: 12pt;
        border: 1px solid #cccccc;
    }
    td{
        padding: 3px;
        height: 25px;
    }
    th{
        background-color: #2096BA;
        color: white;
        height: 30px;
    }
    h2{
        font-weight: 600;
        font-size: 21px;
        color: #2096BA;
        padding-left: 300px;
        padding-bottom: 5px;
        padding-top: 5px;
    }
    h4 {
        padding-left: 905px;
    }
    
</style>


<h2> Data Pegawai </h2>
<table border="1" width="70%">
    <tr>
    <th>Id</th>
    <th>Nama</th>
    <th>Email</th>
    <th>Peran</th>
    <th>Nasabah</th>
    <th>Password</th>
    <th>Aksi</th>
    </tr>
    <?php
    $no=1; 
    //$read yang diambil dari control function index 
    foreach ($read->result_array() as $row) { 
    ?>
    <tr>
    <td><?php echo $row['id_user'] ?></td>
    <td><?php echo $row['nm_user'] ?></td>
    <td><?php echo $row['email_user'] ?></td>
    <td><?php echo $row['peran_user'] ?></td>
    <td><?php echo $row['nasabah'] ?></td>
    <td><?php echo $row['password'] ?></td>
    <td>
    <!--memanggil halaman edit atau edit.php-->
    <a href="<?php echo site_url('User/edit/'.$row['id_user'])?>"
title="tombol utk merubah data">Ubah</a> |
<!--memanggil aksi delete-->
<a href="<?php echo site_url('User/delete/'.$row['id_user'])?>" onclick="javascript: return confirm('Yakin Mau dihapus <?php echo $row['nm_pegawai'];?>')">Hapus</a>
</td>
</tr>
<?php
$no++;
}
?>
</table>

<!--untuk memanggil halaman tambah atau file create.php-->
<h4>
<a href="<?php echo site_url('User/create') ?>"
title="untuk menambah data">Tambah</a>
</h4>