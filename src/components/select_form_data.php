<?php
    $select_kota_kab = "SELECT * FROM kota_kab;";
    $data_kota_kab = $db -> query($select_kota_kab);

    $select_jenis_slo = "SELECT * FROM jenis_slo";
    $data_jenis_slo = $db->query($select_jenis_slo);
    
    $select_penggunaan_slo = "SELECT * FROM penggunaan_slo";
    $data_penggunaan_slo = $db->query($select_penggunaan_slo);
