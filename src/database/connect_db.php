<?php
class data_izin extends SQLite3
{
    function __construct()
    {
        $this->open('./database/data-tkl.db');
    }
}

$db = new data_izin();

if (!$db) {
    error_log($db->lastErrorMsg());
} else {
    error_log("Opened db successfully");
}
