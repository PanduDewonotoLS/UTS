<html>
	<head>
		<title>UTS - PANDU DEWONOTO LAUT SANTOSO</title>
		<style type="text/css">

			body{
				background: whitesmoke
			}

			#header{
				text-align: center;
				color:slategray;
				font-size:35px;
				font-weight: bold;
				margin-top:200px;
			}

			#divInput{
				margin-top: 25px;
			}

			table{
				color:white;
				border:none;
				border:1px solid white;
				background: slategray;
				text-align: center;
			}

			th{
				padding: 2px;
				font-weight: bold;
				font-size: 20px;
			}

			select{
				color:slategray;
				text-align-last: center;
				outline: none;
				width: 100%;
				font-weight: bold;
			}

			input{
				color:slategray;
				width: 100%;
				font-weight: bold;
				text-align: center;
				outline: none;
			}

			button{
				margin:5px;
				width: 15%;
				border:1px solid white;
				color:white;
				border-radius: 50px;
				outline: none;
				font-size:18px;
				font-weight: bold;
				background: slategray;
				text-align: center;
			}
			button:hover{
				background: white;
				color:slategray;
				transition: 0.5s;
			}
		</style>
	</head>
	<body>

		<?php 
			date_default_timezone_set('Asia/Jakarta');
			$waktuTerkini = date('d F Y H:i:s');
		?>

		<div id="header">Sistem Input Pasien Covid 19</div>
		<div id="divInput">
			<table border="1" align="center">
				<form action="" method="POST">
					<thead>
						<input hidden type="text" name="waktuTerkini" value="<?php echo $waktuTerkini?>"></th><tr/>
						<input hidden type="text" name="kelasMahasiswa" value="06TPLM001"/>
						<th>Nama Wilayah</th>
						<th>Jumlah Positif</th>
						<th>Jumlah Dirawat</th>
						<th>Jumlah Sembuh</th>
						<th>Jumlah Meninggal</th>
					</thead>
					<tbody>
						<td>
							<select id="optionDaerah" name="optionDaerah" required>
								<option value="--Pilih--">--Pilih--</option>
								<option value="DKI Jakarta">DKI Jakarta</option>
								<option value="Jawa Barat">Jawa Barat</option>
								<option value="Banten">Banten</option>
								<option value="Jawa Tengah">Jawa Tengah</option>
							</select>
						</td>
						<td><input type="text" name="JPositif" required></td>
						<td><input type="text" name="JRawat" required></td>
						<td><input type="text" name="JSembuh" required></td>
						<td><input type="text" name="JMeninggal" required></td><tr/>
						<th>Nama Operator</th><td colspan="4"><input type="text" name="namaMahasiswa" required></td><tr/>
						<th>NIM Mahasiswa</th><td colspan="4"><input type="text" name="nimMahasiswa" required></td><tr/>
						<th colspan="5">
							<button id="saveBtn" type="submit">SAVE</button>
							<button id="resetBtn" type="reset">RESET</button>
						</th>
					</tbody>
				</form>
			</table>

			<?php
			@$namaMahasiswa = $_POST['namaMahasiswa'];
			@$nimMahasiswa = $_POST['nimMahasiswa'];
			@$kelasMahasiswa = $_POST['kelasMahasiswa'];
			@$waktuTerkini = $_POST['waktuTerkini'];
			@$daerah = $_POST['optionDaerah'];
			@$positif = $_POST['JPositif'];
			@$rawat = $_POST['JRawat'];
			@$sembuh = $_POST['JSembuh'];
			@$meninggal = $_POST['JMeninggal'];

			$namaFile1 = "headerDataCovid19.txt";													// Input File 1
			$isiFile1 = "Data Pemantauan Covid19 Wilayah"." ".$daerah."\n"
						."per"." ".$waktuTerkini."\n"
						.$namaMahasiswa.' / '.$nimMahasiswa;
			$file1 = fopen($namaFile1,"w");
			fwrite($file1,$isiFile1);
			fclose($file1);

			$namaFile2 = "positifCovid19.txt";													// Input File 2
			$isiFile2 = $positif;
			$file2 = fopen($namaFile2,"w");
			fwrite($file2,$isiFile2);
			fclose($file2);

			$namaFile3 = "rawatCovid19.txt";													// Input File 3
			$isiFile3 = $rawat;
			$file3 = fopen($namaFile3,"w");
			fwrite($file3,$isiFile3);
			fclose($file3);

			$namaFile4 = "sembuhCovid19.txt";													// Input File 2
			$isiFile4 = $sembuh;
			$file4 = fopen($namaFile4,"w");
			fwrite($file4,$isiFile4);
			fclose($file4);

			$namaFile5 = "meninggalCovid19.txt";													// Input File 2
			$isiFile5 = $meninggal;
			$file5 = fopen($namaFile5,"w");
			fwrite($file5,$isiFile5);
			fclose($file5);
			?>

		</div>
		<div id="footer"></div>

	</body>
</html>