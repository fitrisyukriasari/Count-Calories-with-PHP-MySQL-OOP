<html>
<head>
	<meta charset="utf-8" />
	<title>KALKULATOR ANTI DIABATES</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="dir/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="dir/js/bootstrap.min.js"></script>

<body style="background-image:url(dir/image/backk.jpg); ">
<center><font color="white"> <h1><b>KALKULATOR ANTI DIABATES</b></h1></font><br></center>
<form methode="POST" action="proses.php">
<div class="container">
<div class="container">
<div class="row">
  <div class="col-md-8">
	<b>

	<font color="white"> <h4><b>
	<?php

	
	include ("config.php");
	include ("functionlib.php");
	error_reporting(0); 
	//mengatur waktu
	echo waktu();
	?>

  Silahkan isi form berikut untuk cek kebutuhan kalori perhari anda serta tips-tips untuk hidup sehat :)<br></b></h4></font>
  <div class="panel panel-danger">
  <!-- Default panel contents -->
  <div class="panel-heading">Nama **</div>
  <div class="panel-body">
     <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Anda" required>
  </div>
  </div>

  <div class="panel panel-success">
  <!-- Default panel contents -->
  <div class="panel-heading">Berat Badan **</div>
  <div class="panel-body">
    <select class="form-control" id="beratbadan" name="beratbadan">
    <option value="">Pilih Berat Badan Anda</option>
      <?php
		for ($tb = 10; $tb <= 200; $tb++) {
		 echo '<option value="' .$tb.'">'.$tb.' kilogram </option>';
		}
      ?>
    </select>
  </div>
  </div>

  <div class="panel panel-warning">
  <!-- Default panel contents -->
  <div class="panel-heading">Tinggi Badan **</div>
  <div class="panel-body">
     <select class="form-control" id="tinggibadan" name="tinggibadan">
     <option value="">Pilih Tinggi Badan Anda</option>
      <?php
		for ($tb = 100; $tb <= 250; $tb++) {
		 echo '<option value="' .$tb.'">'.$tb.' centimeter </option>';
		}
      ?>
    </select>
  </div>
  </div>

  <div class="panel panel-info">
  <!-- Default panel contents -->
  <div class="panel-heading">Usia **</div>
  <div class="panel-body">
    <select class="form-control" id="usia" name="usia">
    <option value="">Pilih Usia Anda</option>
      <?php
		for ($tb = 1; $tb <= 150; $tb++) {
		 echo '<option value="' .$tb.'">'.$tb.' tahun </option>';
		}
      ?>
    </select>
  </div>
  </div>

  <div class="panel panel-success">
  <!-- Default panel contents -->
  <div class="panel-heading">Gender **</div>
  <div class="panel-body">

		<label class="radio-inline">
		  <input type="radio" name="gender" id="gender" value="Pria">   <img src="dir/image/m.jpg"> <br><b><center>Pria</center></b>
		</label>

		<label class="radio-inline">
		  <input type="radio" name="gender" id="gender" value="Wanita">   <img src="dir/image/f.jpg"><br> <b><center>Wanita</center></b>
		</label>
  </div>
  </div>

  <div class="panel panel-danger">
  <!-- Default panel contents -->
  <div class="panel-heading">Aktivitas **</div>
  <div class="panel-body">
		<label class="radio-inline">
		  <input type="radio" name="aktivitas" id="aktivitas" value="Ringan">   <b>Ringan</b>
		</label>

		<label class="radio-inline">
		  <input type="radio" name="aktivitas" id="aktivitas" value="Sedang">   <b>Sedang</b>
		</label>

		<label class="radio-inline">
		  <input type="radio" name="aktivitas" id="aktivitas" value="Berat">   <b>Berat</b>
		</label>
  </div>
  </div>
  </b>

      </div>
	  <div class="col-md-4">
	  	<div class="alert alert-info" role="alert" style="height:970px;text-align: justify;" >
	  	<b><?php date_default_timezone_set("Asia/Jakarta");
	  	echo "Tanggal " . date("Y-m-d") ;
		echo ". Pukul " . date("h:i:s a"). "";?></b>

	  	<blink><b><br><br>TAHUKAH ANDA ?</b></blink><br>
	  	Tercatat sekitar 350 juta orang diseluruh dunia mengidap penyakit mengerikan ini. Dan pada tahun 2004 sekitar 3-4 juta orang meninggal akibat penyakit diabetes melitus. Bahkan WHO memperkirakan jumlah jumlah kematian akibat diabetes akan meningkat dua kali lipat pada tahun 2005-2030.
	  	<br><br>
		<b>Sejarah Diabetes </b><br>

		Penyakit diabetes sudah ada sejak ribuan tahun lalu. Penyebutan diabetes terjadi tahun 1552 SM. Seorang dokter mesir Hesy-Ra mendokumentasikan sering buang air kecil sebagai gejala penyakit misterius yang menyebabkan penderitanya menjadi kurus. Kemudian pada tahun 150 M seorang dokter yunani M, Arateus menggambarkan lelehan daging tubuh dan anggota badan ke dalam urin sebagai diabetes yang sekarang kita sebut.
		<br>
		Semakin berkembangnya ilmu kedokteran banyak pemahaman yang lebih baik tentang diabetes. Untuk mendiagnosa diabetes, orang harus mencicipi air seni langsung. Jika air seni terasa manis maka orang tersebut disimpulkan menderita diabetes. Pada tahun 1675 kata “Mellitus” ditambahkan ke nama diabetes. Para ilmuan berhasil mengembangkan tes kimia untuk mendeteksi keberadaan gula.

		<br><br><b>Apa sebenarnya penyakit Diabetes Melitus?</b><br>

		Penyakit Diabetes sering didefinisikan sebagai penyakit dengan keadaan dimana tubuh(dalam hal ini pankreas) tidak bisa menghasilkan hormon insulin sesuai kebutuhan atau tubuh tidak dapat memanfaatkan secara optimal insulin yang  dihasilkan sehingga gula darah dalam tubuh meningkat menlebihi normal.

		<br><br><b>Penyebab Diabetes Melitus</b><br>

		Penyebab terjadinya penyakit diabetes melitus disebabkan oleh beberapa factor-faktor berikut,<br>

    	<br><ul>1. Karena faktor genetik </ul>

    	<ul>2. Karena infeksi virus</ul>
		<ul>3. Faktor Lingkungan</ul>

		</div>
	  </div>
	</div>


  <button type="submit" class="btn btn-danger">  <b>CEK !</button>
  <font color="white"><small >** Isi semua yang bertanda bintang 2.</small></font>
  

</div>
</div>
</form>
</body></html>