<?php
$row = $_GET['kode_alternatif'];
$data = mysqli_query($koneksi, "SELECT * FROM tb_hitung WHERE kode_alternatif ='".$row."'");
$kode_alternatif = mysqli_fetch_array($data);
?>

<h2>Perbarui Data Nilai Alternatif</h2>

<div class="row mt-4">
    <div class="col-lg-5">
        <form method="post" action="?page=nilai-aksi">
            <div class="row">
                <div class="col-md-5">
                    <div class="form-group">
                        <label>Kode Alternatif</label>
                        <input type="text" class="form-control" value="<?php echo $kode_alternatif['kode_alternatif']; ?>" disabled>
                        <input type="hidden" name="kode_alternatif" value="<?php echo $kode_alternatif['kode_alternatif']; ?>">
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="form-group">
                        <label>Kriteria 1</label>
                        <input type="text" class="form-control" name="kriteria1" placeholder="Nama Kriteria" value="<?php echo $kode_alternatif['kriteria1']; ?>" required>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="form-group">
                        <label>Kriteria 2</label>
                        <input type="text" class="form-control" name="kriteria2" placeholder="Nama Kriteria" value="<?php echo $kode_alternatif['kriteria2']; ?>" required>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="form-group">
                        <label>Kriteria 3</label>
                        <input type="text" class="form-control" name="kriteria3" placeholder="Nama Kriteria" value="<?php echo $kode_alternatif['kriteria3']; ?>" required>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="form-group">
                        <label>Kriteria 4</label>
                        <input type="text" class="form-control" name="kriteria4" placeholder="Nama Kriteria" value="<?php echo $kode_alternatif['kriteria4']; ?>" required>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="form-group">
                        <label>Kriteria 5</label>
                        <input type="text" class="form-control" name="kriteria5" placeholder="Nama Kriteria" value="<?php echo $kode_alternatif['kriteria5']; ?>" required>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary" name="perbarui">Edit Data</button>
            <button type="reset" class="btn btn-secondary">Batal</button>
        </form>
    </div>
</div>