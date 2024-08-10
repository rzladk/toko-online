<div class="container-fluid">
    <div class="card">
        <h5 class="card-header">Detail Produk</h5>
        <div class="card-body">
        <?php foreach ($barang as $brg) : ?>
            <div class="row">
                <div class="col-md-4">
                    <img src="<?php echo base_url('uploads/' . $brg->gambar); ?> " class="card-img-top" alt="">
                </div>
                <div class="col-md-8">
                    <table class="table">
                        <tr>
                            <th>Nama Produk</th>
                            <td>:</td>
                            <td><?= $brg->nama_brg ?></td>
                        </tr>
                        <tr>
                            <th>Keterangan</th>
                            <td>:</td>
                            <td><?= $brg->keterangan ?></td>
                        </tr>
                        <tr>
                            <th>Kategori</th>
                            <td>:</td>
                            <td><?= $brg->kategori ?></td>
                        </tr>
                        <tr>
                            <th>Stok</th>
                            <td>:</td>
                            <td><?= $brg->stok ?></td>
                        </tr>
                        <tr>
                            <th>Harga</th>
                            <td>:</td>
                            <td>Rp. <?= number_format($brg->harga, 0, ',', '.') ?></td>
                        </tr>
                    </table>
                    <?php echo anchor('dashboard/tambah_ke_keranjang/' . $brg->id_brg, '<div class="btn btn-sm btn-primary">Tambah Ke Keranjang</div>') ?>

                    <?php echo anchor('dashboard', '<div class="btn btn-sm btn-secondary">Kembali</div>') ?>
                </div>
            </div>
        <?php endforeach; ?>
        </div>
    </div>
</div>