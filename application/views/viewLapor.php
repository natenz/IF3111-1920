<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>asset/css/stylelapor.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>asset/css/style.css">
</head>

<body>
	<header>
		<div class="container">
			<div id="menukiri">
			</div>
			<nav>
				<ul>
					<li class="active"><a href="#"> Tentang Lapor! </a></li>
					<li> <a href="#"> Laporan </a></li>
					<li> <a href="#"> Cari Aduan </a></li>

				</ul>
			</nav>
			<div id="menukanan">
				<nav>
					<ul>
						<li>
						<li> <a href="#"> Masuk </a></li>
						<li> <a href="#"> Daftar </a></li>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</header>
	<br><br><br><br><br><br><br><br>

	<div class="comment">
		<h5>Detail Laporan/Komentar</h5>
		<div>
			<?php
			foreach ($data as $i) :
				$idkom = $i['id_comment'];
				$komentar = $i['komentar'];
				$lampiran = $i['lampiran'];
				$waktu = $i['waktu'];
				$aspek = $i['aspek'];
				?>

				<hr>
				<h5><?php echo $komentar ?></h5>
				<h5>Lampiran : <?php echo $lampiran ?></h5>
				<br><br>
				<h5>Waktu : <?php echo $waktu ?> Aspek : <?php echo $aspek ?>
					<label style="text-align: right"><a href="<?= base_url('index.php/Viewlapor/ubah/' . $idkom) ?>">ubah</a></label> |
					<label style="text-align: right"><a href="<?= base_url('index.php/Viewlapor/hapus/' . $idkom) ?> " onclick="javascript: return confirm('Apakah Anda Yakin Ingin Menghapus Komentar/Laporan ?');">hapus</a></label>
				</h5>
				<hr>
			<?php endforeach; ?>
		</div>
	</div>

	<footer>
		<section id="spons">
			<div class="container">
				<div class="box">
					<p>Download Aplikasi Mobile LAPOR!</p>
					<img src="<?= base_url(); ?>asset/img/google-play.png" width="150">

				</div>
				<div class="box">
					<p>Dikembangkan Oleh : </p>
					<img src="<?= base_url(); ?>asset/img/logl.png" width="90">


				</div>
				<div class="box">
					<p>Lebih Dekat dengan Kami!</p>
					<img src="<?= base_url(); ?>asset/img/Instagram.png" width="49">
					<img src="<?= base_url(); ?>asset/img/Facebook.png" width="52">

				</div>

			</div>
		</section>
		<p id="copyright"> Copyright @2019</p>

	</footer>
</body>

</html>