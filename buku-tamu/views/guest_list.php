<div class="col">
    <h5>Daftar Komentar</h5>
    <div class="table-responsive">
        <table class="table table-hover table-striped table-bordered">
            <tr>
                <th>Nama</th>
                <th>Komentar</th>
                <th>Waktu</th>
            </tr>
            <?php while ($row = $guests->fetch(PDO::FETCH_ASSOC)) { ?>
            <tr>
                <td><?php echo htmlspecialchars($row['name']); ?></td>
                <td><?php echo htmlspecialchars($row['comment']); ?></td>
                <td><?php echo $row['created_at']; ?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
</div>