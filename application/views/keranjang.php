<div class="container-fluid">
    <h4>Keranjang</h4>

    <table class="table table-bordered table-hover table-striped text-center">
        <tr>
            <th>NO</th>
            <th>Nama Produk</th>
            <th>Jumlah Produk</th>
            <th>Harga</th>
            <th>Sub-Total</th>
        </tr>
        <?php $no = 1; ?>
        <?php foreach ($this->cart->contents() as $items) : ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $items['name'] ?></td>
                <td><?= $items['qty'] ?></td>
                <td align="right">Rp.<?= number_format($items['price'], 0, ',', '.') ?></td>
                <td align="right">Rp.<?= number_format($items['subtotal'], 0, ',', '.') ?></td>
            </tr>
        <?php endforeach; ?>
        <tr>
                <td colspan="4" align="right">Total Belanja</td> 
                <td align="right">Rp.<?= number_format($this->cart->total(), 0, ',', '.') ?></td>
            </tr>
    </table>

    <div align="right">
        <a href="<?= base_url('dashboard/hapus_keranjang') ?>" class="btn btn-sm btn-danger mb-3">Hapus</a>
        <a href="<?= base_url('dashboard/index') ?>" class="btn btn-sm btn-primary mb-3">Lanjut Belanja</a>
        <a href="<?= base_url('dashboard/pembayaran') ?>" class="btn btn-sm btn-success mb-3">Pembayaran</a>
    </div>
</div>