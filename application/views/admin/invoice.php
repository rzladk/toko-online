<div class="container-fluid">
    <h4>Invoice Pemesanan</h4>

    <table class="table table-bordered table-hover table-striped text-center">
        <tr>
            <th>Id Invoice</th>
            <th>Nama Pemesan</th>
            <th>Alamat Pengiriman</th>
            <th>Tanggal Pemesanan</th>
            <th>Batas Bayar</th>
            <th>Aksi</th>
        </tr>
        <?php $no = 1; ?>
        <?php foreach ($invoice as $inv) : ?>
            <tr>
                <td><?= $inv->id ?></td>
                <td><?= $inv->nama ?></td>
                <td><?= $inv->alamat ?></td>
                <td><?= $inv->tgl_pesan ?></td>
                <td><?= $inv->batas_bayar ?></td>
                <td><?php echo anchor('admin/invoice/detail/' . $inv->id, '<div class="btn btn-sm btn-success">Detail</div>') ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>