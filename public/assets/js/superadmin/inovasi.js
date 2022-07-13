function handleDeleteInovasi(id) {
    $("#deleteinovasi").modal("show");

    const idInovasi = document.getElementById("id_inovasi_delete");
    idInovasi.value = id;

    const content = document.getElementById("content-delete");
    content.innerHTML =
        "<h6>Apakah anda yakin ingin menghapus Inovasi ini?</h6>";
}

function handleRemoveHidden() {
    const myInovasi = document.getElementsByClassName("myinovasi-show");
    for(var i = 0; i < myInovasi.length; i++){
        myInovasi[i].removeAttribute('hidden');
     }
    // myInovasi.removeAttribute("hidden");
}

function handleAddHidden() {
    const myInovasi = document.getElementsByClassName("myinovasi-show");
    for(var i = 0; i < myInovasi.length; i++){
        myInovasi[i].setAttribute('hidden', 'true');
     }
    // myInovasi.removeAttribute("hidden");
}

function handleShowLampiran(lampiran) {
    $("#showlampiran").modal("show");

    const lampiranInovasi = lampiran;

    const content = document.getElementById("content-delete");
    content.innerHTML =
        "<iframe src='../../assets/lampiran/"+lampiranInovasi+"' width='730' height='550'></iframe>";
}