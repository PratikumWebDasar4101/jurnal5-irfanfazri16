<?php
if (isset($_GET['nama']) AND isset($_GET['email']))
{
$nim=$_GET['nim'];	
$nama=$_GET['nama'];
$email=$_GET['email'];
$komentar=$_GET['komentar'];

$kata=explode(" ", $komentar);
$count=count($kata);
  
}
else
{
   header("Location:form.php?error=setvariabel");
}
  
if(empty($nama))
{
   header("Location:form.php?error=namakosong");
}
else
{
if (is_numeric($nama))
{
      header("Location:form.php?error=harushuruf");
}






else
{
echo "Nama: $nama <br /> Email: $email</br>";
}

if ($count <5) {
	# code...
	echo "kalimat harus lebih dari 5";
	echo "<br/>";
}else echo "Komentar: $komentar";{

}


}  
?>