<div class="container-fluid">
    <h3><i class="fas fa-edit"></i>Edit Data Barang</h3>

    <?php foreach ($barang as $brg) : ?>
        <form method="post" action="<?php echo base_url() . 'admin/data_barang/update' ?>">
            <div class="form-group">
                <label for="nama_brg">Nama Barang</label>
                <input type="text" name="nama_brg" class="form-control" value="<?php echo $brg->nama_brg ?>">
            </div>
            <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <input type="hidden" name="id_brg" class="form-control" value="<?php echo $brg->id_brg ?>">

                <input type="text" name="keterangan" class="form-control" value="<?php echo $brg->keterangan ?>">
            </div>
            <div class="form-group">
                <label for="kategori">Kategori</label>  
                <input type="text" name="kategori" class="form-control" value="<?php echo $brg->kategori ?>">
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="text" name="harga" class="form-control" value="<?php echo $brg->harga ?>"> 
            </div>
            <div class="form-group">
                <label for="harga">Stok</label>
                <input type="text" name="stok" class="form-control" value="<?php echo $brg->stok ?>"> 
            </div>

            <button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>
        </form>
<?php endforeach; ?>

</div>