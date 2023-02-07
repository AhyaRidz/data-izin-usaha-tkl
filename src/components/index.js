function toggle_data_baru() {
  const kota_kab = document.querySelector("#kota_kab");
  const kota_kab_value = kota_kab.value;
  //   console.log(kota_kab_value);
  if (kota_kab_value == "new") {
    console.log("new");
    kota_kab_baru.style.display = "block";
  } else {
    kota_kab_baru.style.display = "none";
  }

  const jenis_slo = document.querySelector("#jenis_slo");
  const jenis_slo_value = jenis_slo.value;
  if (jenis_slo_value == "new") {
    jenis_baru.style.display = "block";
  } else {
    jenis_baru.style.display = "none";
  }

  const penggunaan_slo = document.querySelector("#penggunaan_slo");
  const penggunaan_slo_value = penggunaan_slo.value;
  if (penggunaan_slo_value == "new") {
    penggunaan_baru.style.display = "block";
  } else {
    penggunaan_baru.style.display = "none";
  }
}

const kota_kab_baru = document.querySelector("#kota_kab_baru");
const jenis_baru = document.querySelector("#jenis_baru");
const penggunaan_baru = document.querySelector("#penggunaan_baru");
kota_kab_baru.style.display = "none";
jenis_baru.style.display = "none";
penggunaan_baru.style.display = "none";
