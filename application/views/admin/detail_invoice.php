<div class="container-fluid">
    <h4>Detail Pemesanan <div class="btn btn-sm btn-success">No. Invoice: <?= $invoice->id ?></div></h4>

    <table class="table table-bordered table-hover table-striped text-center">
        <tr>
            <th>Id Barang</th>
            <th>Nama Produk</th>
            <th>Jumlah Pesanan</th>
            <th>Harga</th>
            <th>Sub-Total</th>
        </tr>


        <?php 
        $total = 0;
        foreach ($pesanan as $psn) : 
            $subtotal = $psn->jumlah * $psn->harga;  
            $total += $subtotal;  
        ?>
        <tr>
            <td><?= $psn->id_brg ?></td>
            <td><?= $psn->nama_brg ?></td>
            <td><?= $psn->jumlah ?></td>
            <td><?= number_format($psn->harga, 0, ',', '.') ?></td>
            <td><?= number_format($subtotal, 0, ',', '.')?></td>
        </tr>
        <?php endforeach; ?>
            
        <tr>
            <td colspan="4" align="right">Total</td>
            <td align="right">Rp.<?= number_format($total, 0, ',', '.') ?></td>
        </tr>
    </table>

    <a href="<?= base_url('admin/invoice') ?>" class="btn btn-sm btn-success">Kembali</a>
</div>