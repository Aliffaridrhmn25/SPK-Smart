<?php
   $row = $_GET['kode_alternatif'];
   $data = mysqli_query($koneksi, "SELECT * FROM tb_alternatif WHERE kode_alternatif ='".$row."'");
   $kode_alternatif= mysqli_fetch_array($data); 
?>


<div class="row mt-4">
    <div class="col-md-5 offset-md-3">
        <div class="card card-body text-center">
            <div class="d-flex justify-content-center mb-4">
                <img src="images/alert.png" style="max-width: 20%; height: auto;" alt="Logo">
            </div>
            <h2>Hapus Data alternatif</h2>
            <div class="mt-4">
                <b>Anda yakin akan menghapus data alternatif dengan nama alternatif <strong><?php echo $kode_alternatif['nama_alternatif']; ?></strong>?</b>
            </div>
            <div class="mt-4">
                <form method="post" action="?page=alternatif-aksi">
                    <input type="hidden" name="kode_alternatif" value="<?php echo $kode_alternatif['kode_alternatif']; ?>">
                    <button type="submit" class="btn btn-primary" name="hapus">Hapus Data</button>
                    <a href="?page=alternatif" class="btn btn-secondary">Batal</a>
                </form>
            </div>
        </div>
    </div>
</div>