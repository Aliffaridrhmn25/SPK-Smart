<!DOCTYPE html>
<html>
<head>
	<title>Cetak Laporan</title>
</head>
<body>
<center>
	<h2>DATA LAPORAN TRANSAKSI PEMINJAMAN BUKU</h2>
	<H4>Institut Bisnis dan Teknologi Pelita Indonesia</H4>
</center>

<?php $koneksi = mysqli_connect("localhost","root","","gas"); 
 $data = mysqli_query($koneksi, "SELECT * FROM tb_mhs order by nim asc");
 echo '<ul>';
            while($d2 = mysqli_fetch_array($data)) {
                $nim = $d2['nim'];
            $no = 1;
            $data2 = mysqli_query($koneksi, "SELECT * FROM trans where nim='$nim'");
            echo '<li>'.$d2['nim'];
             ?>   
            <table border="1" style="width: 100%">
    <tr>
        <th width="1%">No</th>
        <th width="8%">Tanggal Pinjam</th>
        <th width="15%">Judul Buku</th>
        <th width="8%">Tanggal Kembali</th>
        <th width="10%">Keterangan</th>
        <th width="10%">Denda</th>
        <th width="10%">Status</th>
    </tr>
    <?php  
            while($d = mysqli_fetch_array($data2)) {

                if($d['tglkem']=='0000-00-00') {
                        $tglkem = '<b>Dalam Peminjaman</b>';
                    }else {
                        $tglkem= $d['tglkem'];
                    }


               $kembali= date('Y-m-d', strtotime('+7 days', strtotime($d['tglpin'])));

                    $date1 = date_create($kembali);
                    $date2 = date_create($d['tglkem']);
                    $diff = date_diff($date1,$date2);

                    if($d['tglkem']>$kembali){
                        $telat = $diff->d;
                    }else{
                        $telat = 0;
                    }

                    $denda = $telat*5000;

        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><center><?php echo $d['tglpin']; ?></center></td>
                <td><?php echo $d['judul']; ?></td>
                <td><center><?php echo $tglkem; ?></center></td>
                <td><?php echo 'Terlambat '.$telat.' Hari'; ?></td>
                <td><?php echo 'Rp. '.number_format($denda, 2, ',','.'); ?></td>
                
                <td><center>
                        <?php
                            if($d['tglkem']=='0000-00-00') { ?>
                                <a href="?page=trans-kem&id=<?php echo $d['kode']; ?>" class="btn btn-sm btn-warning">Dalam Peminjaman
                          <?php  } else {
                                echo '<a class="btn btn-success">Di kembalikan</a>';
                            }
                        ?>
                        </center></td>
            </tr> 

        <?php                
        }
        ?>
        
</table> <br>

<?php } ?>
<script>
	window.print();
</script>
</body>
</html>