<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Manajemen Sampah</title>
</head>
<body>
    <h1>Dashboard Manajemen Sampah</h1>
    <table border="1">
        <tr>
            <th>Jenis</th>
            <th>Jumlah</th>
            <th>Tanggal</th>
        </tr>
        <?php foreach ($waste_data as $data): ?>
            <tr>
                <td><?php echo $data->type; ?></td>
                <td><?php echo $data->quantity; ?></td>
                <td><?php echo $data->date; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
