<div class="container mt-4">
    <div class="card mx-auto" style="max-width:400px;">
        <div class="card-header">
            <h5 class="mb-0">Edit Barang</h5>
        </div>
        <div class="card-body">
            <form action="<?= BASEURL; ?>index.php?url=admin/update" method="POST">
                <div class="mb-3">
                    <input type="hidden" name="id" value="<?= $data['item']['id']; ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="nama">Nama:</label>
                    <input class="form-control" type="text" name="nama" id="nama" value="<?= $data['item']['nama']; ?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="stok">Stok:</label>
                    <input class="form-control" type="number" name="stok" id="stok" value="<?= $data['item']['stok']; ?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="harga">Harga:</label>
                    <input class="form-control" type="number" name="harga" id="harga" value="<?= $data['item']['harga']; ?>" required>
                </div>
                <button class="btn btn-primary" type="submit">Update</button>
            </form>
        </div>
    </div>
</div>