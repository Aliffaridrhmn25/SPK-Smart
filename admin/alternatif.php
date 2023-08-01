
<br>

<h2>Data alternatif</h2>

<br><br>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>kode alternatif</th>
                <th>Nama alternatif</th>
                <th colspan=2>Aksi</th>
            </tr>
        </thead>
        <tbody>

        <?php
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $database = "smart";

        // Create a connection
        $mysqli = new mysqli($hostname, $username, $password, $database);

        // Check connection
        if ($mysqli->connect_error) {
            die("Connection failed: " . $mysqli->connect_error);
        }
    
    $sql = "SELECT * FROM tb_alternatif";
    $result = $mysqli->query($sql);
    
    // Associative array
    while($row = $result -> fetch_assoc()) {
?>
        <tr>
            <td><?php echo $row["kode_alternatif"]; ?></td>
            <td><?php echo $row["nama_alternatif"]; ?></td>
            <td><a href="?page=alternatif-edit&kode_alternatif=<?php echo $row['kode_alternatif']; ?>" class="btn btn-sm btn-warning">Perbarui</td>
                <td><a href="?page=alternatif-hapus&kode_alternatif=<?php echo $row['kode_alternatif']; ?>" class="btn btn-sm btn-danger">Hapus</td>
        </tr>
<?php
        }
    // Free result set
    $result -> free_result();
?>
            </tr> 
        <?php
        ?>
        </tbody>
    </table>
    <div class="row mt-4">
    <div class="col-md-12 text-center">
        <a href="?page=alternatif-tambah" class="btn btn-primary mb-2">Tambah</a>
    </div>
</div>
   </div>
  </div>  