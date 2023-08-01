<br>
<h2>Data Kriteria</h2>
<br><br>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>kode kriteria</th>
                    <th>Nama Kriteria</th>
                    <th>bobot</th>
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

            $sql = "SELECT * FROM tb_kriteria";
            $result = $mysqli->query($sql);

            // Associative array
            while ($row = $result->fetch_assoc()) {
                ?>
                <tr>
                    <td><?php echo $row["kode_kriteria"]; ?></td>
                    <td><?php echo $row["nama_kriteria"]; ?></td>
                    <td><?php echo $row["bobot"]; ?></td>
                    <td><a href="?page=kriteria-edit&kode_kriteria=<?php echo $row['kode_kriteria']; ?>" class="btn btn-sm btn-warning">Perbarui</td>
                <td><a href="?page=kriteria-hapus&kode_kriteria=<?php echo $row['kode_kriteria']; ?>" class="btn btn-sm btn-danger">Hapus</td>
                </tr>
                <?php
            }
            // Free result set
            $result->free_result();
            
            // Close the connection
            $mysqli->close();
            ?>
            </tr>
            <?php
            ?>
            </tbody>
        </table>

        <div class="row mt-4">
    <div class="col-md-12 text-center">
        <a href="?page=kriteria-tambah" class="btn btn-primary mb-2">Tambah</a>
    </div>
    </div>
</div>