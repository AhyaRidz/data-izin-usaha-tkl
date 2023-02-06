<!-- Table header -->
<tr>
    <th rowspan="3">No.</th>
    <th colspan="3">Pemilik Izin</th>
    <th rowspan="3">Alamat Pembangkit</th>
    <th colspan="3">Surat Izin</th>
    <th colspan="6">Sertifikat Laik Operasi</th>
</tr>
<tr>
    <th rowspan="2">Nama</th>
    <th rowspan="2">Alamat</th>
    <th rowspan="2">Kota/Kabupaten</th>
    <th rowspan="2">No. Surat</th>
    <th colspan="2">Masa Berlaku</th>
    <th rowspan="2">No. SLO & Register</th>
    <th colspan="2">Masa Berlaku</th>
    <th rowspan="2">Daya (Kva)</th>
    <th rowspan="2">Jenis</th>
    <th rowspan="2">Penggunaan</th>
</tr>
<tr>
    <th>Tanggal Mulai</th>
    <th>Tanggal Berakhir</th>
    <th>Tanggal Mulai</th>
    <th>Tanggal Berakhir</th>
</tr>

<!-- ------------------------------------------------------------------------------------------- -->

<?php
// SQLite untuk ambil data
$full_table = "SELECT
	pemilik.nama_pemilik,
	pemilik.alamat_pemilik,
	kota_kab.kota_kab,
	pemilik.alamat_pembangkit,
	surat_izin.no_surat,
	strftime('%d-%m-%Y', surat_izin.tgl_aktif) as tanggal_aktif_surat,
	strftime('%d-%m-%Y', surat_izin.tgl_akhir) as tanggal_akhir_surat,
	slo.no_slo,
	strftime('%d-%m-%Y', slo.tgl_aktif) as tanggal_aktif_slo,
	strftime('%d-%m-%Y', slo.tgl_akhir) as tanggal_akhir_slo,
	slo.daya,
	jenis_slo.jenis_slo,
	penggunaan_slo.penggunaan_slo
FROM pemilik JOIN kota_kab JOIN surat_izin JOIN slo JOIN jenis_slo JOIN penggunaan_slo
ON pemilik.id_kota_kab = kota_kab.id_kota_kab AND 
	surat_izin.id_pemilik = pemilik.id_pemilik AND
    slo.id_jenis_slo = jenis_slo.id_jenis_slo AND
    slo.id_penggunaan_slo = penggunaan_slo.id_penggunaan_slo AND
    slo.id_surat_izin = surat_izin.id_surat_izin;";

// Ubah format tanggal ke Indonesia
function tgl_indo($tgl)
{
    $bulan = array(
        1 =>
        'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );
    $break = explode('-', $tgl);

    return $break[0] . ' ' . $bulan[(int)$break[1]] . ' ' . $break[2];
}

$rowCount = 0;
$data_tabel = $db->query($full_table);

// Tampilkan data yang diambil
echo "<tr>";
while ($row = $data_tabel->fetchArray(SQLITE3_ASSOC)) {
    echo "<td>" . htmlentities($rowCount + 1) . "</td>";
    echo "<td>" . htmlentities($row['nama_pemilik']) . "</td>";
    echo "<td>" . htmlentities($row['alamat_pemilik']) . "</td>";
    echo "<td>" . htmlentities($row['kota_kab']) . "</td>";
    echo "<td>" . htmlentities($row['alamat_pembangkit']) . "</td>";

    echo "<td>" . htmlentities($row['no_surat']) . "</td>";
    echo "<td>" . htmlentities(tgl_indo($row['tanggal_aktif_surat'])) . "</td>";
    echo "<td>" . htmlentities(tgl_indo($row['tanggal_akhir_surat'])) . "</td>";
    
    echo "<td>" . htmlentities($row['no_slo']) . "</td>";
    echo "<td>" . htmlentities(tgl_indo($row['tanggal_aktif_slo'])) . "</td>";
    echo "<td>" . htmlentities(tgl_indo($row['tanggal_akhir_slo'])) . "</td>";
    echo "<td>" . htmlentities($row['daya']) . "</td>";
    echo "<td>" . htmlentities($row['jenis_slo']) . "</td>";
    echo "<td>" . htmlentities($row['penggunaan_slo']) . "</td>";
}
echo "</tr>";
?>