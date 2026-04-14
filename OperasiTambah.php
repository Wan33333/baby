<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Operasi Tambah</title>
</head>
<body>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Operasi Matematik</title>
</head>
<body>
<center>
<form method="POST">
	<h1><u>Operasi Matematik</u></h1>

	Nombor 1: <input type="text" name="num1"><br><br>
	Nombor 2: <input type="text" name="num2"><br><br>

	<button type="submit" name="operasi" value="tambah">Tambah</button>
	<button type="submit" name="operasi" value="tolak">Tolak</button>
	<button type="submit" name="operasi" value="darab">Darab</button>
	<button type="submit" name="operasi" value="bahagi">Bahagi</button>
	<input type="reset">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];
	$operasi = $_POST['operasi'];

	if ($operasi == "tambah") {
		$hasil = $num1 + $num2;
		echo "<br>Tambah: $num1 + $num2 = $hasil";
	}

	elseif ($operasi == "tolak") {
		$hasil = $num1 - $num2;
		echo "<br>Tolak: $num1 - $num2 = $hasil";
	}

	elseif ($operasi == "darab") {
		$hasil = $num1 * $num2;
		echo "<br>Darab: $num1 * $num2 = $hasil";
	}
		
	elseif ($operasi == "bahagi") {
		$hasil = $num1 / $num2;
		echo "<br>Bahagi: $num1 / $num2 = $hasil";
	}

}

?>
</center>
</body>
</html>