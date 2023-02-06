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
    <main class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-slate-700 w-20 h-16 rounded flex justify-center items-center">
        <a href="table.php" class="text-white">Ke Table</a>
    </main>

    <?php
    $db->close();
    ?>
</body>

</html>