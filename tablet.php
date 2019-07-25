<!--
UAS PRPL
NAMA : M. RAFIE SULTAN AGAM
NIM : 1700018282
KELAS : E

1. tablet.php fitur ini berfungsi menampilkan jenis obat tablet. obat yang berjenis tablet pada database akan diampilkan ketika kita pilih fitur ini pada tampilan
-->

<?php
// AGAM YANG BUAT
	include 'db.php';
	$QuerySql = "SELECT  * FROM obat  where jenis='Tablet'"; <--2. query disamping sebagai operasi mencari obat yang berjenis tablet pada tabel obat
	$SQL = mysqli_query($connect, $QuerySql);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Tampil Data Obat</title>
  <link rel="stylesheet" href="bulma.min.css">
</head>
<body>
<nav class="navbar is-success" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
   

    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item" href="login.html">
    <img src="logut.png"></img>
      </a>

      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link">
          Daftar Tabel
        </a>

        <div class="navbar-dropdown">
          
          <a class="navbar-item" href="dataobat.php">
            Obat
          </a>
          <a class="navbar-item" href="datasupiler.php">
            Supplier
          </a>
    
        </div>
      </div>

      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link">
          Filter
        </a>
    <div class="navbar-dropdown">
          <a class="navbar-item" href="dataobattanggal.php">
            Tanggal Pasok
          </a>
          
          <a class="navbar-item" href="dataobatnama.php">
            Nama A-Z <!--Perbaiki redaksi Oleh Putra-->
          </a>
          <a class="navbar-item" href="dataobatnamaz-a.php">
            Nama Z-A <!--Penambahan Oleh Putra-->
          </a>
          <a class="navbar-item" href="dataobatmurah.php">
            Harga Termurah
          </a>
          <a class="navbar-item" href="dataobatmahal.php">
            Harga Termahal
          </a>
        </div>
      </div>
      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link">
          Jenis
        </a>
        <div class="navbar-dropdown">

<a class="navbar-item" href="kaplet.php">
            Kaplet
          </a>
          <a class="navbar-item" href="kapsul.php">
            Kapsul
          </a>
          <a class="navbar-item" href="pil.php">
            Pil
          </a>
          <a class="navbar-item" href="salep.php">
            Salep
          </a>
          <a class="navbar-item" href="serbuk.php">
            Serbuk
          </a>
          <a class="navbar-item" href="suntik.php">
            suntik
          </a>
          <a class="navbar-item" href="syrup.php">
            Sirup
          </a>
          <a class="navbar-item" href="tablet.php">
            Tablet
          </a>
          <a class="navbar-item" href="tetes.php">
            Tetes
          </a>
</div>
</div>



  <a class="navbar-item" href="inputobat.php">
       Tambah Obat
      </a>
       <a class="navbar-item" href="inputsupiler.php">
       Tambah Suppiler
      </a>
      <a class="navbar-item">
        <form action="cariobat.php" method="post">
        <div class="control">
          <input class="input" type="text" placeholder="CARI OBAT" name="cari"> 
        </div>
</div>
        </form>
  </a>
  </div>
</div>
    </div>

    
  </div>

</nav>
<table class="table is-fullwidth" >
  <thead>
    <tr>
      <th scope="col">Nama Obat</th>
      <th scope="col">Harga Obat</th>
      <th scope="col">Jenis Obat</th>
      <th scope="col">Kode Obat</th>
      
    </tr>
  </thead>
    <?php
      foreach ($SQL as $key) {
        echo "<tr>
            <td>$key[nama_obat]</td> <--2. menampilkan obat pada tabel nama obat-->
            <td>$key[harga]</td>     <--2. menampilkan tampilan harga pada tabel harga obat-->
            <td>$key[jenis]</td>     <--2. menampilkan jenis pada tabel jenis obat-->
            <td>$key[kode_obat]</td> <--2. menampilkan kodr pada tabel kode obat-->
            
        </tr>";
      }
    ?>
</table>
</body>
</html>
