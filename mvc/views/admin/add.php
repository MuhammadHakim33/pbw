<div class="container mt-4">
    <div class="card mx-auto" style="max-width:400px;">
        <div class="card-header">
            <h5 class="mb-0">Tambah Barang</h5>
        </div>
        <div class="card-body">
            <form action="<?= BASEURL; ?>index.php?url=admin/store" method="POST">
                <div class="mb-3">
                    <label class="form-label" for="nama">Nama:</label>
                    <input class="form-control" type="text" name="nama" id="nama" required>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="stok">Stok:</label>
                    <input class="form-control" type="number" name="stok" id="stok" required>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="harga">Harga:</label>
                    <input class="form-control" type="number" name="harga" id="harga" required>
                </div>
                <button class="btn btn-primary" type="submit">Simpan</button>
            </form>
        </div>
    </div>
</div>