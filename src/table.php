<?php
// Connect to database
require_once "./database/connect_db.php";
?>

<!-- ------------------------------------------------------------------------------------------- -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Data Izin Usaha Ketenagalistrikan</title>
    <link rel="stylesheet" href="../dist/output.css" />
</head>

<body>
    <h1 class="text-3xl font-bold underline">Data Izin Usaha Ketenagalistrikan Di Kalimantan Timur</h1>
    <p><a href="tambah_data.php">Tambah data baru</a></p>
    <table>
        <?php
        require_once "./components/select_tabel.php";
        ?>
    </table>
    <?php
    $db->close();
    ?>
</body>

</html>