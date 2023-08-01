<?php
    include "../login/koneksi.php"; ?>
     
<h2>Nilai Utility dan Hasil akhir</h2>

<div class="row mt-4">
    <div class="col-md-12">
    <table class="table table-bordered">
        <thead>
            <tr>
        <tr>
            <td>Alternatif</td>
            <td>Kriteria 1</td>
            <td>Kriteria 2</td>
            <td>Kriteria 3</td>
            <td>Kriteria 4</td>
            <td>Kriteria 5</td>
            <td>Jumlah</td>
            <td>Hasil</td>
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
    $caribobot = "SELECT * FROM tb_kriteria";
    $resultbobot = $mysqli -> query($caribobot);
    while($bobot = $resultbobot -> fetch_assoc()) {
        $hasilbobot[]=$bobot['bobot'];
    }
    $hasilbobot1=$hasilbobot[0];
    $hasilbobot2=$hasilbobot[1];
    $hasilbobot3=$hasilbobot[2];
    $hasilbobot4=$hasilbobot[3];
   

    $carimaksimal = "SELECT max(kriteria1) as maxk1, max(kriteria2) as maxk2, max(kriteria3) as maxk3, max(kriteria4) as maxk4, max(kriteria5) as maxk5 FROM tb_hitung";
    $resultmax = $mysqli -> query($carimaksimal);
    $max = $resultmax -> fetch_assoc();
    $cariminimal = "SELECT min(kriteria1) as mink1, min(kriteria2) as mink2, min(kriteria3) as mink3, min(kriteria4) as mink4, min(kriteria5) as mink5 FROM tb_hitung";
    $resultmin = $mysqli -> query($cariminimal);
    $min = $resultmin -> fetch_assoc();
    
    $sql = "SELECT * FROM tb_hitung";
    $result = $mysqli -> query($sql);
    
    // Associative array
    $no=1;
    while($row = $result -> fetch_assoc()) {
?>
        <tr>
            <td><?php echo $row["kode_alternatif"]; ?></td>
            <td>= <b><?php echo number_format(($row["kriteria1"]-$min["mink1"])/($max["maxk1"]-$min["mink1"]), 3, '.', ''); ?></b> </td>
            <td>= <b><?php echo number_format(($max["maxk2"]-$row["kriteria2"])/($max["maxk2"]-$min["mink2"])* 1, 3, '.', ''); ?></b> </td>
            <td>= <b><?php echo number_format(($row["kriteria3"]-$min["mink3"])/($max["maxk3"]-$min["mink3"])* 1, 3, '.', ''); ?></b> </td>
            <td>= <b><?php echo number_format(($row["kriteria4"]-$min["mink4"])/($max["maxk4"]-$min["mink4"])* 1, 3, '.', ''); ?></b> </td>
            <td>= <b><?php echo number_format(($row["kriteria5"]-$min["mink5"])/($max["maxk5"]-$min["mink5"])* 1, 3, '.', ''); ?></b> </td>
           
           <td><b><?php echo number_format(($row["kriteria1"]-$min["mink1"])/($max["maxk1"]-$min["mink1"])+($max["maxk2"]-$row["kriteria2"])/($max["maxk2"]-$min["mink2"])+($row["kriteria3"]-$min["mink3"])/($max["maxk3"]-$min["mink3"])+
            ($row["kriteria4"]-$min["mink4"])/($max["maxk4"]-$min["mink4"])+($row["kriteria5"]-$min["mink5"])/($max["maxk5"]-$min["mink5"]), 3, '.', ''); ?></b></td>
            <td><b><?php echo number_format((($row["kriteria1"]-$min["mink1"])/($max["maxk1"]-$min["mink1"])*$hasilbobot[0])+
            (($max["maxk2"]-$row["kriteria2"])/($max["maxk2"]-$min["mink2"])*$hasilbobot[1])+
            (($row["kriteria3"]-$min["mink3"])/($max["maxk3"]-$min["mink3"])*$hasilbobot[2])+
            (($row["kriteria4"]-$min["mink4"])/($max["maxk4"]-$min["mink4"])*$hasilbobot[3]), 3, '.', ''); ?></b></td>
        </tr>
<?php
        $jumlah=number_format(($row["kriteria1"]-$min["mink1"])/($max["maxk1"]-$min["mink1"])+
        ($max["maxk2"]-$row["kriteria2"])/($max["maxk2"]-$min["mink2"])+
        ($row["kriteria3"]-$min["mink3"])/($max["maxk3"]-$min["mink3"])+
        ($row["kriteria4"]-$min["mink4"])/($max["maxk4"]-$min["mink4"])+
        ($row["kriteria5"]-$min["mink5"])/($max["maxk5"]-$min["mink5"]), 3, '.', '');

        $hasil=number_format((($row["kriteria1"]-$min["mink1"])/($max["maxk1"]-$min["mink1"])*$hasilbobot[0])+
        (($max["maxk2"]-$row["kriteria2"])/($max["maxk2"]-$min["mink2"])*$hasilbobot[1])+
        (($row["kriteria3"]-$min["mink3"])/($max["maxk3"]-$min["mink3"])*$hasilbobot[2])+
        (($row["kriteria4"]-$min["mink4"])/($max["maxk4"]-$min["mink4"])*$hasilbobot[3]), 3, '.', '');
        $update = "UPDATE tb_hitung SET jumlah='".$jumlah."', hasil='".$hasil."' WHERE kode_alternatif='".$row["kode_alternatif"]."'";

        if ($mysqli->query($update) == TRUE) {
        } else {
            echo "Error: " . $update . "<br>" . $mysqli->error;
        }
        $no++;
    }
    // Free result set
    $result -> free_result();
?>
    </table>
    
     
<h2>Perengkingan</h2>

<div class="row mt-4">
    <div class="col-md-12">
    <table class="table table-bordered">
        <thead>
            <tr>
        <tr>
            <td>Alternatif</td>
            <td>Nilai</td>
            <td>Rangking</td>
        </tr>
<?php    
    $sql = "SELECT * FROM tb_hitung ORDER BY hasil desc";
    $result = $mysqli -> query($sql);
    
    // Associative array
    $n=1;
    while($row = $result -> fetch_assoc()) {
?>
        <tr>
            <td><?php echo $row["kode_alternatif"]; ?></td>
            <td><?php echo $row["hasil"]; ?></td>
            <td><?php echo $n; ?></td>
        </tr>
<?php
        $n++;
    }
    // Free result set
    $result -> free_result();
?>
    </table>
</html>