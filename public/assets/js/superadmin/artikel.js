$("#id_sub_kategori").change(function() {
    var subkatID = $(this).val();
    if (subkatID) {
        $.ajax({
            type: "GET",
            url: "https://v3420031.mhs.d3tiuns.com/sistemspbe/getartikel?subkatID=" +
                subkatID,
            dataType: "JSON",
            success: function(res) {
                if (res) {
                    $("#id_artikel").empty();
                    $("#id_artikel").prop('disabled', false);
                    $("#id_artikel").append(
                        "<option disabled selected>Pilih Sub Kategori</option>"
                    );
                    $.each(res, function(nama, id) {
                        $("#id_artikel").append(
                            '<option value="' + id + '">' + nama + "</option>"
                        );
                    });
                } else {
                    $("#id_artikel").empty();
                }
            },
        });
    } else {
        $("#id_sub_kategori").empty();
    }
});

function handleDeleteArtikel(id) {
    $("#deleteartikel").modal("show");

    const idArtikel = document.getElementById("id_artikel_delete");
    idArtikel.value = id;

    const content = document.getElementById("content-delete");
    content.innerHTML =
        "<h6>Apakah anda yakin ingin menghapus Artikel ini?</h6>";
}

function handleReject(id) {
    $("#reject").modal("show");

    const idArtikel = document.getElementById("id_artikel_put");
    idArtikel.value = id;
}

function handleRemoveHidden() {
    const myartikelNo = document.getElementsByClassName("myartikel-no");
    for(var i = 0; i < myartikelNo.length; i++){
        myartikelNo[i].removeAttribute('hidden');
     }
    const myartikelReq = document.getElementsByClassName("myartikel-req");
    for(var i = 0; i < myartikelReq.length; i++){
        myartikelReq[i].removeAttribute('hidden');
     }
}

function handleAddHidden() {
    const myartikelNo = document.getElementsByClassName("myartikel-no");
    for(var i = 0; i < myartikelNo.length; i++){
        myartikelNo[i].setAttribute('hidden', 'true');
     }
    const myartikelReq = document.getElementsByClassName("myartikel-req");
    for(var i = 0; i < myartikelReq.length; i++){
        myartikelReq[i].setAttribute('hidden', 'true');
     }
}

function handleShowLampiran(lampiran) {
    $("#showlampiran").modal("show");

    const lampiranArtikel = lampiran;

    const content = document.getElementById("content-delete");
    content.innerHTML =
        "<iframe src='../../assets/lampiran/"+lampiranArtikel+"' width='730' height='550'></iframe>";
}