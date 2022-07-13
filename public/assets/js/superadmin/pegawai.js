function handleEditPegawai(pegawais, id) {
    $("#editpegawai").modal("show");

    const isPegawais = JSON.parse(pegawais);
    const findPegawaisByID = isPegawais.find((pegawai) => pegawai.id_user === parseInt(id));

    Object.entries(findPegawaisByID)
        .filter(([key]) => !["alamat_unit", "created_at", "email_unit", "id_jenis_unit", "nama_unit", "remember_token", "telepon_unit", "updated_at", "password"].includes(key))
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

$("#selectOPD").change(function() {
    var unitID = $(this).val();
    if (unitID) {
        $.ajax({
            type: "GET",
            url: "https://v3420031.mhs.d3tiuns.com/sistemspbe/getpegawai?unitID=" +
                unitID,
            dataType: "JSON",
            success: function(res) {
                if (res) {
                    $("#selectPegawai").empty();
                    $("#selectPegawai").prop('disabled', false);
                    $("#selectPegawai").append(
                        "<option disabled selected>Pilih Pegawai</option>"
                    );
                    $.each(res, function(nama_pegawai, id_user) {
                        $("#selectPegawai").append(
                            '<option value="' + id_user + '">' + nama_pegawai + "</option>"
                        );
                    });
                } else {
                    $("#selectPegawai").empty();
                }
            },
        });
    } else {
        $("#selectPegawai").empty();
    }
});