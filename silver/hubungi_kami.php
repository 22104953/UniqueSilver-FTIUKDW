<?php

	include_once("db.php");

	$valid=TRUE;
	
	if ( !empty($_POST['kirim']) )
		{
			if(trim($_POST['nama'])=="")
			{
				$valid = FALSE;
				$error_nama = 1;
			}
			if(trim($_POST['email'])=="")
			{
				$valid = FALSE;
				$error_email = 1;
			}
			if(trim($_POST['pesan'])=="")
			{
				$valid = FALSE;
				$error_pesan = 1;
			}
			if($valid)
			{
			//$num = mysql_num_rows(mysql_query("select * from bulutangkis")) ;
			//$num ++;
			$nama=$_POST['nama'];
			$email=$_POST['email'];
			$pesan=$_POST['pesan'];
			$tanggal=date('Y-m-d');
			/*$waktu=date('H:i:s');*/
			$query = "INSERT into hubungi (nama,email,pesan,tanggal) VALUES
			('".$nama."','".$email."','".$pesan."','".$tanggal."')";
			if (mysql_query($query)) 
				header("location:hubungi_kami.php");
			} 
		}
?>


<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>

	<title></title>

	<meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" href="bimbel.css" type="text/css"/>


	<script type="text/javascript" src="jquery.js"></script>

	<script type="text/javascript">
		
			function liveclock()
			{
				var todayDate = new Date()
				var myYear = todayDate.getYear() + 1900
				var myMonth = todayDate.getMonth() + 1
				var myToday = todayDate.getDate()
			
				var mySec = todayDate.getSeconds()
				var myMin = todayDate.getMinutes()
				var myHour = todayDate.getHours()
			
				document.getElementById('time').innerHTML = myToday+ "/" +myMonth+ "/" +myYear+ " || "+myHour+":"+myMin+":"+mySec
				t = setTimeout('liveclock()',500)
			}
		</script>

</head>
<body onLoad="liveclock()" >

					<marquee><b>SELAMAT DATANG DI WEBSITE BIMBINGAN BELAJAR CHILDREN LEARNING CENTRE</b></marquee>
					
	<h4>Silakan menghubungi kami dengan mengisi form dibawah ini.</h4>
	<form method="post" action="hubungi_kami.php">
		<table><br>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" size="80"> <?php if (isset($error_nama)) echo "data tidak boleh kosong";?></td>
			</tr>
			<tr>
				<td>E-mail</td>
				<td>:</td>
				<td><input type="text" name="email" size="80"> <?php if (isset($error_email)) echo "data tidak boleh kosong";?> </td>
			</tr>
			<tr>

				<td>Pesan</td>
			<td>:</td>
				<td><textarea name="pesan" rows="5" cols="61"></textarea><?php if (isset($error_pesan)) echo "data tidak boleh kosong";?></td>
			</tr>
		</table>

		<input type="submit" name="kirim" value="Kirim" />
	</form>
	
<p id="time"></p>
</body>
</html>