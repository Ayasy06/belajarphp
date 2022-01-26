<html>
	  <head>
	    <title>PHP Test</title>
	  </head>
	  <body>   
	 <!-- penanganan form dengan method POST -->
	<form method="post" action="tampilan.php">
		<label>Nama Siswa</label><br/>
		<input type="text" name="nama"><br/>
		<label>Asal Sekolah</label><br/>
		<input type="text" name="sekolah"><br/>	
        <label>No. Telpon</label><br>
        <input type="text" name="telepon"><br>
        <label>Jenis Kelamin</label><br>
		<select name="jeniskelamin">
        <label><option value="Laki Laki">Laki Laki</option><br>
		<label><option value="Perempuan">Perempuan</option><br>
		</select><br>
		<input type="submit" value="Daftar">
	</form>
	  </body>
	</html>