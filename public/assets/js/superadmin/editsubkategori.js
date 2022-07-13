$("#kategori").change(function () {
    var katID = $(this).val();
    if (katID) {
        $.ajax({
            type: "GET",
            url:
                "https://v3420031.mhs.d3tiuns.com/sistemspbe/getsubkategori?katID=" +
                katID,
            dataType: "JSON",
            success: function (res) {
                if (res) {
                    $("#id_sub_kategori").empty();
                    $("#id_sub_kategori").append(
                        "<option disabled selected>---Pilih Sub Kategori---</option>"
                    );
                    $.each(res, function (nama, id) {
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
