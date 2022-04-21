<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="style.css">

     <title>UTS Aura</title>
</head>

<?php
date_default_timezone_set("Asia/Jakarta");
$date = date('d F Y,  h:i:s');
$wilayah = '-';
$positif = '-';
$dirawat = '-';
$sembuh = '-';
$meninggal = '-';
$nama = 'Nama Operator';
$nim = 'NIM';
if (isset($_POST['simpan'])) {
     $wilayah = trim($_POST['wilayah']);
     $positif = trim($_POST['positif']);
     $dirawat = trim($_POST['rawat']);
     $sembuh = trim($_POST['sembuh']);
     $meninggal = trim($_POST['meninggal']);
     $nama = trim($_POST['nama']);
     $nim = trim($_POST['nim']);
}
?>

<body>
     <h2>Input Data Covid</h2>
     <hr>
     <form action="" method="post">
          Nama wilayah :
          <select name="wilayah">
               <option value="DKI Jakarta">DKI Jakarta</option>
               <option value="Jawa Barat">Jawa Barat</option>
               <option value="Banten">Banten</option>
               <option value="Jawa Tengah">Jawa Tengah</option>
          </select>
          <br>
          Jumlah Positif :
          <input type="text" name="positif" required>
          <br>
          Jumlah Dirawat :
          <input type="text" name="rawat" required>
          <br>
          Jumlah Sembuh :
          <input type="text" name="sembuh" required>
          <br>
          Jumlah Meninggal :
          <input type="text" name="meninggal" required>
          <br>
          Nama Operator :
          <input type="text" name="nama" required>
          <br>
          NIM Mahasiswa :
          <input type="text" name="nim" required>
          <td><input type="submit" name="simpan" value="simpan"></td>
          </tr>
          </table>
     </form>

     <div class="atas">
          <h2>Data Pemantauan Covid19 Wilayah <?php echo $wilayah ?></h2>

          <h2>Per <?php echo $date ?> </h2>
          <h2><?php echo $nama ?> / <?php echo $nim ?></h2>
     </div>
     <table width="100%" border="1">
          <tr>
               <th>Positif</th>
               <th>Dirawat</th>
               <th>Sembuh</th>
               <th>Meninggal</th>
          </tr>
          <tr>
               <td><?php echo $positif ?></td>
               <td><?php echo $dirawat ?></td>
               <td><?php echo $sembuh ?></td>
               <td><?php echo $meninggal ?></td>
          </tr>
     </table>

</body>

</html>