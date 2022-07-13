$("#kategori").change(function() {
    var katID = $(this).val();
    if (katID) {
        $.ajax({
            type: "GET",
            url: "https://v3420031.mhs.d3tiuns.com/sistemspbe/getsubkategori?katID=" +
                katID,
            dataType: "JSON",
            success: function(res) {
                if (res) {
                    $("#id_sub_kategori").empty();
                    $("#id_sub_kategori").prop('disabled', false);
                    $("#id_sub_kategori").append(
                        "<option disabled selected>Pilih Sub Kategori</option>"
                    );
                    $.each(res, function(nama, id) {
                        $("#id_sub_kategori").append(
                            '<option value="' + id + '">' + nama + "</option>"
                        );
                    });
                } else {
                    $("#id_sub_kategori").empty();
                }
            },
        });
    } else {
        $("#id_sub_kategori").empty();
    }
});

function handleDeleteSubKategori(idKategori, idSubKategori) {
    $("#deletesubkategori").modal("show");

    const Kategori = document.getElementById("id_kategori_delete");
    Kategori.value = idKategori;
    const SubKategori = document.getElementById("id_sub_kategori_delete");
    SubKategori.value = idSubKategori;

    const content = document.getElementById("content-delete");
    content.innerHTML =
        "<h6>Apakah anda yakin ingin menghapus Sub Kategori ini?</h6>";
}

$(document).ready(function() {
    $('.js-example-basic-single').select2();
}); 