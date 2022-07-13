function handleEditKategori(kategoris, id) {
    $("#editkategori").modal("show");

    const isKategoris = JSON.parse(kategoris);
    const findKategorisByID = isKategoris.find(
        (kategori) => kategori.id_kategori === parseInt(id)
    );

    Object.entries(findKategorisByID)
        // .filter(([key]) => !["nama_jenis_unit"].includes(key))
        .forEach(
            ([key, value]) =>
            (document.getElementById(`${key}_put`).value = value)
        );
}

function handleDeleteKategori(id) {
    $("#deletekategori").modal("show");

    const idKategori = document.getElementById("id_kategori_delete");
    idKategori.value = id;

    const content = document.getElementById("content-delete");
    content.innerHTML =
        "<h6>Apakah anda yakin ingin menghapus Kategori ini?</h6>";
}