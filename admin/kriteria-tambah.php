<div class="row mt-4">
    <div class="col-lg-12 text-center">
        <img src="images/logo22.png" style="max-width: 35%; height: auto;" alt="Logo">
        <h2>Tambah Data Kriteria</h2>
    </div>
</div>
<div class="row mt-4 justify-content-center">
    <div class="col-lg-5">
        <form method="post" action="?page=kriteria-aksi">
            <div class="form-group">
                <label>Kode Kriteria</label>
                <input type="text" class="form-control" name="kode_kriteria" placeholder="Kode Kriteria" required>
            </div>
            <div class="form-group">
                <label>Nama Kriteria</label>
                <input type="text" class="form-control" name="nama_kriteria" placeholder="Nama Kriteria" required>
            </div>
            <div class="form-group">
                <label>Bobot</label>
                <input type="text" class="form-control" name="bobot" placeholder="Bobot" required>
            </div>
            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary" name="tambah_data">Tambah Data</button>
                <button type="reset" class="btn btn-secondary">Batal</button>
            </div>
        </form>
    </div>
</div>