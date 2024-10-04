<div class="container mt-4">
    <div class="d-flex align-items-center mb-3">
        <h2 class="me-auto">Halaman Admin</h2>
        <a class="btn btn-sm btn-dark me-2" href="<?= BASEURL; ?>index.php?url=admin/add">Tambah Barang</a>
        <a class="btn btn-sm btn-dark" href="<?= BASEURL; ?>index.php?url=login/logout">Logout</a>
    </div>
    <table class="table table-hover table-bordered">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Stok</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($data['items'] as $item): ?>
        <tr>
            <td><?= $item['id']; ?></td>
            <td><?= $item['nama']; ?></td>
            <td><?= $item['stok']; ?></td>
            <td><?= $item['harga']; ?></td>
            <td>
                <a class="btn btn-sm btn-dark me-2" href="<?= BASEURL; ?>index.php?url=admin/edit/<?= $item['id']; ?>">Edit</a> |
                <a class="btn btn-sm btn-dark ms-2" href="<?= BASEURL; ?>index.php?url=admin/delete/<?= $item['id']; ?>" onclick="return confirm('Yakin ingin menghapus data ini?');">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>