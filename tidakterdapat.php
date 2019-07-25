<!--UAS PRPL ARINDRA WAHYU  CANDRA KURNIAWAN  Function tidak terdapat obat berfungsi untuk memngetahui obat yang dicari yang tidak ada dalam database -->

<?php
	include 'db.php';
	$QuerySql = "SELECT * FROM beli";
	$SQL = mysqli_query($connect, $QuerySql);
//Function Pencarian Data Tidak Ditemukan : jika obat dan suplier yang dicari tidak sesuai dengan yang ada di database, maka akan menampilkan pencarian tidak ditemukan --> Arindra Wahyu Candra UTS 1700018279
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tampil Data Pembelian</title>
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
            Supiler
          </a>
    
        </div>
      </div>

      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link">
          Sort By
        </a>

        <div class="navbar-dropdown">
          
          <a class="navbar-item" href="dataobattanggal.php">
            Tanggal
          </a>
          <a class="navbar-item" href="dataobatnama.php">
            Nama
          </a>
          <a class="navbar-item" href="dataobatmurah.php">
            Harga Termurah
          </a>
          <a class="navbar-item" href="dataobatmahal.php">
            Harga Termahal
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
<h3 align="center"> TIDAK TERDAPAT DATA </h3>
	<!--UAS PRPL Menampilkan Tampilkan Pencarian yang tidak terdapat dalam pencarian obat maupun supplier  
	ARINDRA WAHYU  CANDRA K 1700018279 
	Function tersebut saat pencarian obat jika obat tidak tersedia dalam database maka dalam pencarian obat tersebut tidak ada-->
</body>
</html>
