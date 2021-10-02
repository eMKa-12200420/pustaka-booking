<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Cinema</title>
</head>
<body>
<h2>Pemesanan Tiket Cinema 99</h2>
<form method="post" action="<?php echo base_url(); ?>index.php/cinema/cetak">
<table border="0">
    <tr>
    <td>Nama Pemesan</td>
    <td>: <input type="text" name="nama" style="width:200px"></td>
    </tr>
    <tr>
    <td>Judul Film</td>
    <td>:  <select id="judul" name="judul">
    <option value="">~Pilih~</option>
    <option value="Parasite">Parasite</option>
    <option value="Hereditary">Hereditary</option>
    <option value="The Closet">The Closet</option>
    <option value="Kamen Rider Reiwa">Kamen Rider Reiwa</option>
  </select></td>
    </tr>
    <tr>
    <td>Pukul</td>
    <td>: 
  <input type="radio" name="pukul" value="14.20">14.20
  <input type="radio" name="pukul" value="15.40">15.40
  <input type="radio" name="pukul" value="16.40">16.40
</td>
    </tr>
    <tr>
    <td>Tipe Studio</td>
    <td>:
<input type="radio" name="studio" value="Reguler 2D">Reguler 2D
<input type="radio" name="studio" value="3D">3D
<input type="radio" name="studio" value="Velvet">Velvet
</td>
    </tr>
    <tr>
    <td>Jumlah Pesan</td>
    <td>: <input type="text" name="jumlah" style="width:30"></td>
    </tr>
</table>
<td><input type="submit" value="Hitung"><input type="reset" value="Batal"></td>
</form>
</body>
</html>