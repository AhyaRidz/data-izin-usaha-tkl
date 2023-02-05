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
    <title>Document</title>
    <link rel="stylesheet" href="../dist/output.css" />
</head>

<body>
    <h1 class="text-3xl font-bold underline">Table here</h1>

    <table>
        <?php
        require_once "./components/select_table.php";
        ?>
    </table>
    <?php
    $db->close();
    ?>
</body>

</html>