<?php
   $row = $_GET['kode_alternatif'];
   $data = mysqli_query($koneksi, "SELECT * FROM tb_alternatif WHERE kode_alternatif ='".$row."'");
   $kode_alternatif= mysqli_fetch_array($data); 
?>

<h2>Perbarui Data alternatif</h2>

<div class="row mt-4">
    <div class="col-lg-5">
        <form method="post" action="?page=alternatif-aksi">
        <div class="row">
            <div class="col-md-5">
            <div class="form-group">
                <label>kode Alternatif</label>
                <input type="text" class="form-control" value="<?php echo $kode_alternatif['kode_alternatif'];?>" disabled>
                <input type="hidden" name="kode_alternatif" value="<?php echo $kode_alternatif['kode_alternatif'];?>">
            </div>
        </div>
        <div class="col-md-10"> 
            <div class="form-group">
                <label>Nama Alternatif</label>
                <input type="text" class="form-control" name="nama_alternatif" placeholder="nama_alternatif"  value="<?php echo $kode_alternatif['nama_alternatif'];?>" required>
            </div>
        </div>

    </div>
            <button type="submit" class="btn btn-primary" name="perbarui">Edit Data</button>
            <button type="reset" class="btn btn-secondary">Batal</button>
        </form>
    </div>