<h4>Wo mana susunya</h4>
     <a href="<?= base_url('barang/tambah'); ?>" class="btn btn-success mb-2">Tambah Data</a>
    <table>
        <thead>
            <tr>
                <th>NO.</th>
                <th>Nama Barang</th>
                <th>QTY</th>
                <th>Harga Beli</th>
                <th>Harga Jual</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; ?>
            <?php foreach($getBarang as $isi) : ?>
            <tr>
                <td><?= $no++ ?>
                <td><?= $isi['nama_barang'] ?></td>
                <td><?= $isi['qty'] ?></td>
                <td>Rp.<?= ($isi['harga_beli']) ?></td>
                <td>Rp.<?= ($isi['harga_jual']) ?></td>
                <td>
                    <a href="<?= base_url('barang/edit/'.$isi['id_barang']) ?>">Edit</a>
                    <a href="<?= base_url('barang/hapus/'.$isi['id_barang']) ?>" onclick="return confirm('Apakah ingin menghapus data barang?');">Delete</a>
                </td>
            </tr>
                <?php $no++; ?>
                <?php endforeach; ?>
        </tbody>
    </table>
