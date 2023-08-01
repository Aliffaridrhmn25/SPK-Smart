 <br>
<h2>Data Nilai alternatif</h2>

<br><br>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>kode alternatif</th>
                <th>Kriteria 1 </th>
                <th>Kriteria 2 </th>
                <th>Kriteria 3 </th>
                <th>Kriteria 4 </th>
                <th>Kriteria 5 </th>
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
    $sql = "SELECT * FROM tb_hitung";
    $result = $mysqli -> query($sql);
    
    // Associative array
    while($row = $result -> fetch_assoc()) {
?>
        <tr>
            <td><?php echo $row["kode_alternatif"]; ?></td>
            <td><?php echo $row["kriteria1"]; ?></td>
            <td><?php echo $row["kriteria2"]; ?></td>
            <td><?php echo $row["kriteria3"]; ?></td>
            <td><?php echo $row["kriteria4"]; ?></td>
            <td><?php echo $row["kriteria5"]; ?></td>
            <td><a href="?page=nilai-edit&kode_alternatif=<?php echo $row['kode_alternatif']; ?>" class="btn btn-sm btn-warning">Perbarui</td>
                <td><a href="?page=nilai-hapus&kode_alternatif=<?php echo $row['kode_alternatif']; ?>" class="btn btn-sm btn-danger">Hapus</td>
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
        <a href="?page=nilai-tambah" class="btn btn-primary mb-2">Tambah</a>
    </div>
   </div>
  </div>  