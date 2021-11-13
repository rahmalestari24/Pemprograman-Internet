<!DOCTYPE html>
<?php
?><html>
<head><title>Pengolahan Form</title></head>
<body>
<FORM ACTION="" METHOD="POST" NAME="Input">
Masukan Nama Anda <input type="text" name="nama">
<input type="submit" name="Input" value="Proses">
</br>
</body>
</html>
<?php
if (isset($_POST['Input'])) {
$nama = $_POST['nama'];
echo "Selamat Datang, $nama";
}
?>