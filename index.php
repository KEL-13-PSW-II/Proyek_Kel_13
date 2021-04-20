<!-- 
     Nama  : Meyliza Veronica Siregar
     NIM   : 11419058
     Kelas : 41TRPL2
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Barang</title>
</head>
<body>
    <p>Welcome Admin!
        <a href = login.php>Logout</a>&nbsp &nbsp<a href = index.php>Home</a><br>
    <a href = add_product.php>add_new_product</a><br>
    
    <?php
   
        $file_name = 'data.csv';
        $file = file_get_contents($file_name);
        $row = explode("\n", $file);
    ?>

    <table border = 1>
        <tr>
            <td>
                Nama
            </td>
            <td>
                Harga
            </td>
            <td>
                Diskon
            </td>
        </tr>

        <?php
            $nomor = 1;
            for($x = 0; $x<count($row)-1; $x++)
            {
                list($Nama, $Harga, $Diskon) = explode(";", $row[$x]);
        ?>

        <tr>
            <td><?php echo $Nama; ?></td>
            <td><?php echo $Harga; ?></td>
            <td><?php echo $Diskon; ?></td>
        </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>