<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success text-center">
                <?php $grand_total = 0;
                if ($keranjang = $this->cart->contents()){                   
                    foreach ($keranjang as $item) {
                        $grand_total = $grand_total + $item['subtotal'];
                }
                echo 'Total Belanja Anda : Rp. ' . number_format($grand_total, 0, ',', '.');
                ?>
            </div><br><br>

            <h4>Input Alamat Pengiriman dan Pilih Metode Pengiriman</h4>

            <form method="post" action="<?= base_url('dashboard/proses_pesanan') ?>">
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" placeholder="Masukkan Nama Lengkap" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>No. Telepon</label>
                    <input type="text" name="no_telp" placeholder="Masukkan No. Telepon" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Alamat Pengiriman</label>
                    <input type="text" name="alamat" placeholder="Masukkan Alamat Pengiriman" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Pilih Metode Pengiriman</label>
                    <select class="form-control" name="ekspedisi" aria-placeholder="Pilih Metode Pengiriman" required>
                        <option value="pilih metode">Pilih Metode Pengiriman</option>
                        <option value="jnt">JNT</option>
                        <option value="jne" >JNE</option>
                        <option value="jnt express">JNT Express</option>
                        <option value="gojek">Gojek</option>
                        <option value="grab">Grab</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Pilih Metode Pembayaran</label>
                    <select class="form-control" name="pembayaran" aria-placeholder="Pilih Metode Pembayaran" required>
                        <option value="pilih metode">Pilih Metode Pembayaran</option>
                        <option value="COD">Cash On Delivery</option>
                        <option value="Transfer">Transfer Bank</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-sm btn-primary">Pesan Sekarang</button> 
            </form>

            <?php 
            }else{
                echo "<h5>Keranjang Masih Kosong</h5>";
            }
            ?>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>