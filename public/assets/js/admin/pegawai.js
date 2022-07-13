function handleEditPegawai(pegawais, id) {
    $("#editpegawai").modal("show");

    const isPegawais = JSON.parse(pegawais);
    const findPegawaisByID = isPegawais.find((pegawai) => pegawai.id_user === parseInt(id));

    Object.entries(findPegawaisByID)
        .filter(([key]) => !["alamat_unit", "created_at", "email_unit", "id_jenis_unit", "nama_unit", "remember_token", "telepon_unit", "updated_at", "password", "role", "id_unit"].includes(key))
        .forEach(
            ([key, value]) =>
            (document.getElementById(`${key}_put`).value = value)
        );
}

function handleShowPegawai(pegawais, id) {
    $("#showpegawai").modal("show");

    const isPegawais = JSON.parse(pegawais);
    const findPegawaisByID = isPegawais.find((pegawai) => pegawai.id_user === parseInt(id));

    Object.entries(findPegawaisByID)
        .filter(([key]) => !["alamat_unit", "created_at", "email_unit", "id_jenis_unit", "id_unit", "id_user", "password", "remember_token", "telepon_unit", "updated_at"].includes(key))
        .forEach(
            ([key, value]) =>
            (document.getElementById(`${key}_show`).value = value)
        );
}


function handleDeletePegawai(id) {
    $("#deletepegawai").modal("show");

    const idUser = document.getElementById("id_user_delete");
    idUser.value = id;

    const content = document.getElementById("content-delete");
    content.innerHTML = "<h6>Apakah anda yakin ingin menghapus Pegawai ini?</h6>";
}