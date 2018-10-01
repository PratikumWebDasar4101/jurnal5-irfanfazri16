<?php
if (isset($_GET['error']))
{
$error=$_GET['error'];
}
else
{
$error="";
}

$pesan="";
if ($error=="setvariabel")
{
$pesan="anda harus mengakses halaman ini dari form.php";
}
if ($error=="namakosong")
{
$pesan=" anda harus mengisi nama";
}
if ($error=="harushuruf")
{
$pesan=" nama harus berupa huruf";
}
if($error=="kelebihan")
{
	$pesan="kelebihan huruf";
}
?>
  
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>input</title>
</head>
<body>

<?php
echo $pesan;
?>
<h2>form</h2>
<form action="proses.php" method="get">


	<table>
<tr><td>Nim<td>: <td><input type="text" name="nim" />
<tr><td>Nama<td>: <td><input type="text" name="nama" />
<tr><td>E-Mail<td>: <td><input type="text" name="email" />
<tr><td>komentar<td>:<td><textarea name="komentar"></textarea>
<tr><td><input type="submit" value="simpan" >

</form>
</body>
</html>