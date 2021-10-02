<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Hasil Output Cinema</title>
</head>
<body>
	<h2>Pemesanan Tiket Cinema 99</h2>

	<table>
	<tr>
		<td>Nama Pemesan</td>
		<td>:</td>
		<td><?php echo $nama; ?></td>
	</tr>
	<tr>
		<td>Judul Film</td>
		<td>:</td>
		<td><?php echo $judul; ?></td>
	</tr>
	<tr>
		<td>Pukul</td>
		<td>:</td>
		<td><?php echo $pukul; ?></td>
	</tr>
	<tr>
		<td>Tipe Studio</td>
		<td>:</td>
		<td><?php echo $studio; ?></td>
	</tr>
	<tr>
		<td>Jumlah Pesan</td>
		<td>:</td>
		<td><?php echo $jumlah; ?></td>
	</tr>
	<tr>
		<td>Harga Tiket</td>
		<td>:</td>
		<td><?php echo $harga; ?></td>
	</tr>
	<tr>
		<td>Total</td>
		<td>:</td>
		<td><?php echo $total; ?></td>
	</tr>
	<tr>
		<td>
			<a href="http://localhost/pustaka-booking/index.php/cinema">Input Data Lagi</a>
		</td>
	</tr>
</table>
</body>
</html>