<h3>Luas & Volume Balok</h3>
 
<form action="Praktikum.php" method="post">
	Panjang : <input type="text" name="panjang"><br><br>
	Lebar : <input type="text" name="lebar"><br><br>
	Tinggi : <input type="text" name="tinggi"><br><br>
	<input type="submit" name="submit" value="Hitung">
</form>
 
<?php
	if(isset($_POST['submit'])){
		$panjang = $_POST['panjang'];
		$lebar = $_POST['lebar'];
		$tinggi = $_POST['tinggi'];
		
		$luas = 2 * ( $panjang * $lebar + $panjang * $tinggi + $lebar * $tinggi);
		$volume = $panjang * $lebar * $tinggi;
		
		echo "Luas Permukaan Balok : $luas <br>";
		echo "Volume Balok : $volume";
	}
?>