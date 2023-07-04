<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAFTAR KARYAWAN</title>
</head>
<body>

    <table border="1px solid black">

    <tr>
        <th>ID KARYAWAN</th>
        <th>NAMA KARYAWAN</th>
        <th>NIK</th>
        <th>Alamat</th>

        <?php foreach($karyawan as $kry): ?>

            <tr>
                <td><?php echo $kry['id'] ?></td>
                <td><?php echo $kry['nama'] ?></td>
                <td><?php echo $kry['nik'] ?></td>
                <td><?php echo $kry['alamat'] ?></td>
            </tr>
           


        <?php endforeach; ?>
    </tr>
    </table>
    
</body>
</html>