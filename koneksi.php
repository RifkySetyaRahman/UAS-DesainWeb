<?php
//Ini untuk koneksi saja
$dbhost= "127.0.0.1";
$dbuser= "root";
$dbpassword = "";
$dbname= "db-uas-desainweb";

// Membuat koneksi
$conn = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);

// Mengecek koneksi
if (!$conn) {
  die("Koneksi gagal: " . mysqli_connect_error());
}
//Akhir Koneksi

//Pertama ambil data kiriman dari form
$name = @$_POST['name'];
$nemail = @$_POST['email'];
$phone = @$_POST['phone'];
$address = @$_POST['address'];
$departemens_id = @$_POST['departemens_id'];
$posisis_id = @$_POST['posisis_id'];
$hire_date = @$_POST['hire_date'];

//Kemudian dapat langsung kita simpan dengan query INSERT
$sql_simpan = mysqli_query ($conn, "INSERT into karyawans (name, email, phone, address, departemens_id, posisis_id, hire_date ) VALUES ('$name', '$email', '$phone', '$address', '$departemens_id', '$posisis_id', '$hire_date')");
if($sql_simpan) {
 echo "Data berhasil disimpan";
} else {
 echo "Data gagal disimpan";
}
?>