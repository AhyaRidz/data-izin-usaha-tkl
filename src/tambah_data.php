<?php
// Connect to database
require_once "./database/connect_db.php";
require_once './components/select_form_data.php'
?>

<!-- ------------------------------------------------------------------------------------------- -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data - Data Izin Usaha Ketenagalistrikan</title>
    <link rel="stylesheet" href="../dist/output.css" />
</head>

<body>
    <main id="main-form" class="block w-full sm:w-96 mx-auto my-8">
        <h1 class="mb-4 text-center text-3xl">Tambah data baru</h1>
        <form method="post">
            <div class="forms">
                <div id="input-data" class="input-data d-flex-col">
                    <h2 class="my-2 text-2xl">Data Pemilik Izin</h2>
                    <label for="nama_pemilik">Nama Perusahaan</label>
                    <input type="text" name="nama_pemilik" id="nama_pemilik" class="border-b-2 mb-2" placeholder="PT. Nama Perusahaan">
                    <label for="alamat_pemilik">Alamat Perusahaan</label>
                    <input type="text" name="alamat_pemilik" id="alamat_pemilik" class="border-b-2 mb-2" placeholder="Jl. Alamat Perusahaan">
                    <label for="kota_kab">Kota/Kabupaten</label>
                    <select name="kota_kab" id="kota_kab" class="border-b-2 mb-2">
                        <option value="">--Pilih Salah Satu--</option>
                        <?php
                        while ($row = $data_kota_kab->fetchArray(SQLITE3_ASSOC)) {
                            echo "<option value='" . htmlentities($row['id_kota_kab']) . "'>" . htmlentities($row['kota_kab']) . "</option>";
                        }
                        ?>
                        <option value="new">Lainnya</option>
                    </select>
                    <label for="alamat_pembangkit">Alamat Pembangkit</label>
                    <input type="text" name="alamat_pembangkit" id="alamat_pembangkit" class="border-b-2 mb-2" placeholder="Jl. Alamat Pembangkit">
                </div>
                <hr class="mt-2 border-black">
                <div id="input-data" class="input-data d-flex-col">
                    <h2 class="my-2 text-2xl">Data Surat Izin</h2>
                    <label for="no_surat">Nomor Surat Izin</label>
                    <input type="text" name="no_surat" id="no_surat" class="border-b-2 mb-2">
                    <label for="tgl_aktif_surat_izin">Tanggal Aktif Surat Izin</label>
                    <input type="date" name="tgl_aktif_surat_izin" id="tgl_aktif_surat_izin" class="border-b-2 mb-2">
                    <label for="tgl_akhir_surat_izin">Tanggal Akhir Surat Izin</label>
                    <input type="date" name="tgl_akhir_surat_izin" id="tgl_akhir_surat_izin" class="border-b-2 mb-2">
                </div>
                <hr class="mt-2 border-black">
                <div id="input-data" class="input-data d-flex-col">
                    <h2 class="my-2 text-2xl">Data Surat Laik Operasi (SLO)</h2>
                    <label for="no_slo">Nomor SLO</label>
                    <input type="text" name="no_slo" id="no_slo" class="border-b-2 mb-2">
                    <label for="tgl_aktif_slo">Tanggal Aktif SLO</label>
                    <input type="date" name="tgl_aktif_slo" id="tgl_aktif_slo" class="border-b-2 mb-2">
                    <label for="tgl_akhir_slo">Tanggal Akhir SLO</label>
                    <input type="date" name="tgl_akhir_slo" id="tgl_akhir_slo" class="border-b-2 mb-2">
                    <label for="daya">Daya (Kva)</label>
                    <input type="number" name="daya" id="daya" class="border-b-2 mb-2" placeholder="300">
                    <label for="jenis_slo">Jenis SLO</label>
                    <select name="jenis_slo" id="jenis_slo" class="border-b-2 mb-2">
                        <option value="">--Pilih Salah Satu--</option>
                        <?php
                        while ($row = $data_jenis_slo->fetchArray(SQLITE3_ASSOC)) {
                            echo "<option value='" . htmlentities($row['id_jenis_slo']) . "'>" . htmlentities($row['jenis_slo']) . "</option>";
                        }
                        ?>
                    </select>
                    <label for="penggunaan_slo">Penggunaan SLO</label>
                    <select name="penggunaan_slo" id="penggunaan_slo" class="border-b-2 mb-2">
                        <option value="">--Pilih Salah Satu--</option>
                        <?php
                        while ($row = $data_penggunaan_slo->fetchArray(SQLITE3_ASSOC)) {
                            echo "<option value='" . htmlentities($row['id_penggunaan_slo']) . "'>" . htmlentities($row['penggunaan_slo']) . "</option>";
                        }
                        ?>
                    </select>
                </div>
                <hr class="mt-2 border-black">
            </div>

            <input type="submit" value="Submit" class="w-full mt-2 py-2 text-white bg-slate-600 rounded">
        </form>
    </main>
</body>

</html>