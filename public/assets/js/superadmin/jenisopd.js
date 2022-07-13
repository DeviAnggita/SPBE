function handleEditJenisOPD(jenisunits, id) {
    $("#editjenisopd").modal("show");

    const isJenisUnits = JSON.parse(jenisunits);
    const findJenisUnitsByID = isJenisUnits.find(
        (jenisunit) => jenisunit.id_jenis_unit === parseInt(id)
    );

    Object.entries(findJenisUnitsByID)
        // .filter(([key]) => !["nama_jenis_unit"].includes(key))
        .forEach(
            ([key, value]) =>
            (document.getElementById(`${key}_put`).value = value)
        );
}

function handleDeleteJenisOPD(id) {
    $("#deletejenisopd").modal("show");

    const idJenisUnit = document.getElementById("id_jenis_unit_delete");
    idJenisUnit.value = id;

    const content = document.getElementById("content-delete");
    content.innerHTML =
        "<h6>Apakah anda yakin ingin menghapus Jenis OPD ini?</h6>";
}