<?php
$row = $_GET['kode_alternatif'];
$data = mysqli_query($koneksi, "SELECT * FROM tb_hitung WHERE kode_alternatif ='".$row."'");
$kode_alternatif = mysqli_fetch_array($data);
?>
<div class="row mt-4">
    <div class="col-md-5 offset-md-3">
        <div class="card card-body text-center">
            <div class="row">
                <div class="col-md-12">
                    <h2>Hapus Data Kriteria</h2>
                </div>

            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <img src="images/alert.png" style="width: 60%; height: auto; justify-content: center;" alt="Logo">
                </div>
                <div class="col-md-6">
                    <p>
                        Apakah Anda yakin akan menghapus data nilai alternatif dengan Kode alternatif <strong><?php echo $kode_alternatif['kode_alternatif']; ?></strong>?
                    </p>
                    <form method="post" action="?page=nilai-aksi">
                        <input type="hidden" name="kode_alternatif" value="<?php echo $kode_alternatif['kode_alternatif']; ?>">
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary" name="hapus">Hapus Data</button>
                            <a href="?page=kriteria" class="btn btn-secondary">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>





