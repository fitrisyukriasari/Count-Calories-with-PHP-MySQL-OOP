<?php

//Start function waktu 
function waktu(){
	date_default_timezone_set("Asia/Jakarta");

	$b = time();
	$hour = date("G",$b);

	if ($hour>=0 && $hour<=11){
		$say = "Selamat Pagi, ";
	}elseif ($hour >=12 && $hour<=14){
		$say = "Selamat Siang, ";
	}elseif ($hour >=15 && $hour<=17){
		$say = "Selamat Sore, ";
	}elseif ($hour >=17 && $hour<=18){
		$say = "Selamat Petang, ";
	}elseif ($hour >=19 && $hour<=23){
		$say = "Selamat Malam, ";
	}
return $say;
}
//End Function waktu

//Start function ucapan 
function ucapan($g,$u){
	if($g == "Wanita" && $u > 24 ){
		$ucapan = "Ibu";
	}elseif($g == "Pria" && $u > 24 ){
		$ucapan = "Bapak";
	}elseif($g == "Pria"){
		$ucapan =  "Saudara";
	}else{
		$ucapan = "Saudari";
	}
	return $ucapan;
}
//End function ucapan


//Start Function Berat Badan Normal
function beratbadanormal($tb){
	$bbn = $tb - 100;
	return $bbn;
}
//End Function Berat Badan Normnal

//Start Function BMI
function bmi($bb, $tb){
	$bmi = $bb / (($tb * 0.01) * ($tb * 0.01));
	return $bmi;
}
//End Function BMI

//Start Function Berat Badan Ideal Borcha
function beratbadanideal($tb, $g){
	if($g == "Pria" && $tb >= 160 ||$g == "Wanita" && $tb >= 150){
		$bbi = beratbadanormal($tb) - (0.1 * beratbadanormal($tb));
	}else if($g == "Pria" && $tb < 160 || $g == "Wanita" && $tb < 150){
		$bbi = beratbadanormal($tb) - 1;
	}
	return $bbi;
}
//End Function Berat Badan Ideal Borcha

//Star Function Kategori Berat Badan
function kategoriberatbadan($g, $bb, $tb){
	if($g == "Wanita"){
		if(bmi($bb,$tb) < 18 ){
			$ket = "Under Weight / Kurus dan saran dari kami sebaiknya mulai menambah berat badan dan mengkonsumsi makanan berkarbohidrat di imbangi dengan olah raga.";
		}elseif (bmi($bb,$tb) >=18 && bmi($bb,$tb) <=25) {
			$ket = "Normal Weight / Normal dan berat badan anda termasuk kategori ideal.";
		}elseif (bmi($bb,$tb) > 25 && bmi($bb,$tb) <=27) {
			$ket = "Over Weight / Kegemukan dan anda sudah masuk kategori gemuk. Saran dari kami sebaiknya hindari makanan berlemak dan mulailah meningkatkan olahraga seminggu minimal 2 kali.";
		}elseif (bmi($bb,$tb) > 27) {
			$ket= "Obesitas dan saran dari kami sebaiknya segera membuat program menurunkan berat badan karena anda termasuk kategori obesitas/ terlalu gemuk dan tidak baik bagi kesehatan.";
		}
	}elseif ($g == "Pria") {
		if(bmi($bb,$tb) < 17 ){
			$ket = "Under Weight / Kurus dan saran dari kami tambah konsumsi makanan berkalori.";
		}elseif (bmi($bb,$tb) >= 17 && bmi($bb,$tb) <=23) {
			$ket = "Normal Weight / Normal dan selamat berat badan anda termasuk ideal.";
		}elseif (bmi($bb,$tb) > 23 && bmi($bb,$tb) <=27) {
			$ket = "Over Weight / Kegemukan dan harus waspada.";
		}elseif (bmi($bb,$tb) > 27) {
			$ket = "Obesitas dan saran dari kami sebaiknya memulai program menurunkan berat badan agar lebih ideal.";
		}
	}
return $ket;
}
//End Function Kategori Berat Badan

//Start Function Kebutuhan kalori berdasarkan gender
function kalorinormal($g, $tb){
	if($g == "Pria"){
		$kb = beratbadanideal($tb, $g) * 30;
	}else if($g == "Wanita"){
		$kb = beratbadanideal($tb, $g) * 25;
	}
return $kb;
}
//End Function Kebutuhan kalori berdasarkan gender



//Start Function hitung kalori berdasarkan usia
function kaloriusia($u, $tb, $g){
	if($u <=39){
		$kbu = "0 kkal ";
	}else if($u >=40 && $u <= 59){
		$kbu = kalorinormal($g, $tb) * 0.05;
	}else if($u >=60 && $u <= 69){
		$kbu = kalorinormal($g, $tb) * 0.1;
	}else if($u >69){
		$kbu = kalorinormal($g, $tb) * 0.2;
	}
return $kbu;
}
//End Function hitung kalori berdasarkan usia

//Start Function kebutuhan kalori berdasarkan aktivitas
function kaloriaktivitas($av, $tb, $g){
	if($av == "Ringan"){
		$kba = kalorinormal($g, $tb) * 0.2;
	}else if($av == "Sedang"){
		$kba = kalorinormal($g, $tb) * 0.3;
	}else if($av == "Berat"){
		$kba = kalorinormal($g, $tb) * 0.5;
	}
return $kba;
}
//End Function kebutuhan kalori berdasarkan aktivitas


//Start Function Jumlah Kalori	
function jumlahkalori($tb, $g, $av, $u){

	$jumlah = kalorinormal($g, $tb) + kaloriaktivitas($av, $tb, $g) - kaloriusia($u, $tb, $g) ;

	return $jumlah;
}
//End Function Jumlah Kalori


//Start Function pembagian kalori 	
function pembagiankalori($tb, $g){

	$kbp = jumlahkalori($tb, $g, $av, $u)  * 0.2;
	$kbr1 = jumlahkalori($tb, $g, $av, $u)  * 0.1;
	$kbs =  jumlahkalori($tb, $g, $av, $u) * 0.25;
	$kbr2 = jumlahkalori($tb, $g, $av, $u)  * 0.1;
	$kbm = jumlahkalori($tb, $g, $av, $u)  * 0.25;
	$kbr3 = jumlahkalori($tb, $g, $av, $u)  * 0.1;

	return array($kbp, $kbr1, $kbs, $kbr2, $kbm, $kbr3);
}
//End Function pembagian kalori 
?>
