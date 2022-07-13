function handleEditOPD(units, id) {
    $("#editopd").modal("show");

    const isUnits = JSON.parse(units);
    const findUnitsByID = isUnits.find((unit) => unit.id_unit === parseInt(id));

    Object.entries(findUnitsByID)
        .filter(([key]) => !["nama_jenis_unit"].includes(key))
        .forEach(
            ([key, value]) =>
                (document.getElementById(`${key}_put`).value = value)
        );
}

function handleShowOPD(units, id) {
    $("#showopd").modal("show");

    const isUnits = JSON.parse(units);
    const findUnitsByID = isUnits.find((unit) => unit.id_unit === parseInt(id));

    Object.entries(findUnitsByID)
        .filter(([key]) => !["id_jenis_unit", "id_unit"].includes(key))
        .forEach(
            ([key, value]) =>
                (document.getElementById(`${key}_show`).value = value)
        );
}

function handleDeleteOPD(id) {
    $("#deleteopd").modal("show");

    const idJenisUnit = document.getElementById("id_unit_delete");
    idJenisUnit.value = id;

    const content = document.getElementById("content-delete");
    content.innerHTML = "<h6>Apakah anda yakin ingin menghapus OPD ini?</h6>";
}

// $(document).ready(function() {
//     $("#editopd").on("show.bs.modal", function(e) {

//         modal = $(this);
//         const idunit = $(e.relatedTarget).data('target-id-unit');
//         const idjenisunit = $(e.relatedTarget).data('target-id-jenis-unit');
//         const namaunit = $(e.relatedTarget).data('target-nama-unit');
//         const emailunit = $(e.relatedTarget).data('target-email-unit');
//         const teleponunit = $(e.relatedTarget).data('target-telepon-unit');
//         const alamatunit = $(e.relatedTarget).data('target-alamat-unit');

//         modal.find("#idopd").val(idunit);
//         modal.find("#idjenisopd").val(idjenisunit);
//         modal.find("#namaopd").val(namaunit);
//         modal.find("#emailopd").val(emailunit);
//         modal.find("#teleponopd").val(teleponunit);
//         modal.find("#alamatopd").val(alamatunit);
//     });
// });

// $(document).ready(function() {
//     $("#showopd").on("show.bs.modal", function(e) {
//         modal = $(this);
//         const namaJenisUnit = $(e.relatedTarget).data('target-nama-jenis-unit');
//         const namaunit = $(e.relatedTarget).data('target-nama-unit');
//         const emailunit = $(e.relatedTarget).data('target-email-unit');
//         const teleponunit = $(e.relatedTarget).data('target-telepon-unit');
//         const alamatunit = $(e.relatedTarget).data('target-alamat-unit');

//         modal.find("#jenisopd").val(":  " + namaJenisUnit);
//         modal.find("#namaopd").val(":  " + namaunit);
//         modal.find("#emailopd").val(":  " + emailunit);
//         modal.find("#teleponopd").val(":  " + teleponunit);
//         modal.find("#alamatopd").val(":  " + alamatunit);
//     });
// });
