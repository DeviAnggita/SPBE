function handleDeleteMember(idInovasiPegawai, idInovasi) {
    $("#deletemember").modal("show");

    const InovasiPegawai = document.getElementById("id_inovasi_pegawai_delete");
    InovasiPegawai.value = idInovasiPegawai;
    const Inovasi = document.getElementById("id_inovasi_delete");
    Inovasi.value = idInovasi;

    const content = document.getElementById("content-delete");
    content.innerHTML =
        "<h6>Apakah anda yakin ingin menghapus Member ini?</h6>";
}

$(document).ready(function() {
    $('#selectPegawai').select2({
        dropdownParent: $("#staticBackdrop"),
        placeholder: "Pilih Pegawai"
      });
});