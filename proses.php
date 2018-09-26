<marquee>
<h1>Hello</h1>
</marquee>
<form action="" method="POST" enctype="multipart/form-data">
	<label>Hobi</label>
	<tr>
		<td><input type="checkbox" name="hobi[]" value="Menulis">Menulis</td>
		<td><input type="checkbox" name="hobi[]" value="Membaca">Membaca</td>
		<td><input type="checkbox" name="hobi[]" value="Futsal">Futsal</td>
	</tr><br>
	<label>Genre Film</label>
	<tr>
		<td><input type="checkbox" name="genre[]" value="Horror">Horror</td>
		<td><input type="checkbox" name="genre[]" value="Thriller">Thriller</td>
		<td><input type="checkbox" name="genre[]" value="Anime">Anime</td>
		<td><input type="checkbox" name="genre[]" value="Animasi">Animasi</td>
		<td><input type="checkbox" name="genre[]" value="Action">Action</td>
	</tr><br>
	<label>Tujuan Wisata</label>
	<tr>
		<td><input type="checkbox" name="wisata[]" value="Bali">Bali</td>
		<td><input type="checkbox" name="wisata[]" value="Raja Ampat">Raja Ampat</td>
		<td><input type="checkbox" name="wisata[]" value="Pulau Derawan">Pulau Derawan</td>
		<td><input type="checkbox" name="wisata[]" value="Bangka Belitung">Bangka Belitung</td>
		<td><input type="checkbox" name="wisata[]" value="Labuan Baju">Labuan Bajo</td>
	</tr><br>
	<tr>
		<label>Gambar</label>
		<td><input type="file" name="gambar"></td><br>
	</tr><br>	
	<tr>
		<td><input type="submit" name="submit2" value="submit"></td>
	</tr>
</form>
<?php
 if(isset($_POST['submit2'])){
 	echo "Hobi :";
 	foreach ($_POST['hobi'] as $hobii) {
 		
 		echo $hobii.", ";
 	}
 		echo "<br>";
 		echo "Genre Film :";
 	foreach ($_POST['genre'] as $genree) {
 		
 		echo $genree.", ";
 	}
 		echo "<br>";
 		echo "Tujuan Wisata :";
 	foreach ($_POST['wisata'] as $wisataa) {
 		echo $wisataa.", ";
 	}
 		echo "<br>";
 	$upload ='photo/';
 	$uploadfile=$upload.basename($_FILES['gambar']['name']);
 	$namephoto = $_FILES['gambar']['name'];

 		if (move_uploaded_file($_FILES['gambar']['tmp_name'], $uploadfile)) {
 			echo "<img src='photo/$namephoto'>";
 		}
	}
?>
