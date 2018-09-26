<form  method="POST">
	<table>
	<tr>
		<td>Nama</td><td><input type="text" name="nama"></td>
	</tr>
	<tr>
		<td>Password</td><td><input type="password" name="password"></td>
	</tr>
	<tr>
		<td><input type="submit" name="submit" value="submit"></td>
	</tr>
</table>
</form>

<?php
session_start();

$data2 = array(
			"username" => "yusril",
			"password" => "yusril"
	);

	if(isset($_POST['submit'])){
		$username = $_POST['nama'];
		$pass = $_POST['password'];
		
		if ($username == $data2["username"] && $pass == $data2["password"]){
			$_SESSION['username'] = $username;
			header("location:proses.php");
		}
		else{
			header("location:login.php");
		}
	}
?>
