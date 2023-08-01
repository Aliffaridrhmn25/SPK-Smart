
<?php
$row  = $_GET['kode_kriteria'];
$data = mysqli_query($koneksi, "SELECT * FROM tb_kriteria WHERE kode_kriteria ='" . $row . "'");
$kode_kriteria = mysqli_fetch_array($data); 
?>


<div class="row mt-4">
    <div class="col-md-5 offset-md-3">
        <div class="card card-body text-center">
       
            <h2>Hapus Data Kriteria</h2>
            <br>
            <div class="d-flex justify-content-center mb-4">
                <img src="images/alert.png" style="max-width: 40%; height: auto;" alt="Logo">
            </div>
            <div class="mt-4">
                <b>Anda yakin akan menghapus data Kriteria dengan nama kriteria <strong><?php echo $kode_kriteria['nama_kriteria']; ?></strong>?</b>
            </div>
            <div class="mt-4">
                <form method="post" action="?page=kriteria-aksi">
                    <input type="hidden" name="kode_kriteria" value="<?php echo $kode_kriteria['kode_kriteria']; ?>">
                    <button type="submit" class="btn btn-primary" name="hapus">Hapus Data</button>
                    <a href="?page=kriteria" class="btn btn-secondary">Batal</a>
                </form>
            </div>
        </div>
    </div>
</div>