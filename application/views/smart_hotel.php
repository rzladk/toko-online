<div class="container-fluid">
    <div class="row text-center">
        <?php foreach ($smart_hotel as $brg) : ?>
            <div class="card ml-3 mt-3 mb-3" style="width: 16rem;">
                <img src="<?php echo base_url() . '/uploads/' . $brg->gambar; ?>" class="card-img-top" alt="...">
                <div class="card-body mb-1">
                    <h5 class="card-title"><?= $brg->nama_brg ?></h5>
                    <small><?= $brg->keterangan ?></small><br>
                    <span class="badge badge-secondary">Rp. <?=  number_format($brg->harga, 0, ',', '.') ?></span><br><br>
                    <?php echo anchor('dashboard/tambah_ke_keranjang/' . $brg->id_brg, '<div class="btn btn-sm btn-primary">Tambah Ke Keranjang</div>') ?><br><br>
                    
                    <?php echo anchor('dashboard/detail/' . $brg->id_brg, '<div class="btn btn-sm btn-info">Detail</div>') ?>
                    
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>