<?php
$row  = $_GET['kode_kriteria'];
$data = mysqli_query($koneksi, "SELECT * FROM tb_kriteria WHERE kode_kriteria ='" . $row . "'");
$kode_kriteria = mysqli_fetch_array($data); 
?>


<h2>Perbarui Data Kriteria</h2>

<div class="row mt-4">
    <div class="col-lg-5">
        <form method="post" action="?page=kriteria-aksi">
            <div class="row">
                <div class="col-md-5">
                    <div class="form-group">
                        <label>Kode Kriteria</label>
                        <input type="text" class="form-control" value="<?php echo $kode_kriteria['kode_kriteria']; ?>" disabled>
                        <input type="hidden" name="kode_kriteria" value="<?php echo $kode_kriteria['kode_kriteria']; ?>">
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="form-group">
                        <label>Nama Kriteria</label>
                        <input type="text" class="form-control" name="nama_kriteria" placeholder="nama_kriteria" value="<?php echo $kode_kriteria['nama_kriteria']; ?>" required>
                    </div>
                </div>
            </div>
            <div class="col-md-10">
                <div class="form-group">
                    <label>Bobot</label>
                    <input type="text" class="form-control" name="bobot" placeholder="bobot" value="<?php echo $kode_kriteria['bobot'];?>" required>
                </div>
            </div>
            <button type="submit" class="btn btn-primary" name="perbarui">Edit Data</button>
            <button type="reset" class="btn btn-secondary">Batal</button>
        </form>
    </div>
</div>