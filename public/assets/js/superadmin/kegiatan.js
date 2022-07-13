function handleDeleteKegiatan(idKegiatan, idInovasi) {
    $("#deletekegiatan").modal("show");

    const Kegiatan = document.getElementById("id_kegiatan_delete");
    Kegiatan.value = idKegiatan;
    const Inovasi = document.getElementById("id_inovasi_delete");
    Inovasi.value = idInovasi;

    const content = document.getElementById("content-delete");
    content.innerHTML =
        "<h6>Apakah anda yakin ingin menghapus Kegiatan ini?</h6>";
}

function handleShowLampiran(lampiran) {
    $("#showlampiran").modal("show");

    const lampiranKegiatan = lampiran;

    const content = document.getElementById("content-delete");
    content.innerHTML =
        "<iframe src='../../assets/lampiran/"+lampiranKegiatan+"' width='730' height='550'></iframe>";
}