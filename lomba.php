<?php
	include 'config.php';
	$id = @$_GET['id'] ? $_GET['id'] : '1';
	$artikel = $conn->query("SELECT * FROM artikel WHERE id = $id");
	$data = $artikel->fetch_assoc();
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
		<title>Premogator - <?php echo $data['judul']; ?></title>
		<link rel="stylesheet" type="text/css" href="assets/css/home.css">
		<link rel="stylesheet" type="text/css" href="assets/css/mobile.css">
	</head>
	<body id="top">
		<header class="bg-full-blog ovelay">
			<nav class="navbar" id="navbar">
				<div class="container">
					<div class="grid-navbar">
						<a href="index.php#top" class="nav-logo" title="Premogator.id"><img src="assets/img/logo_small.png"></a>
						<ul class="navbar-nav">
							<li class="nav-item"><a href="index.php#maps" class="nav-link" id="nav1">Lokasi</a></li>
							<li class="nav-item"><a href="index.php#contact" class="nav-link" id="nav2">Kontak</a></li>
							<li class="nav-item"><a href="index.php#lomba" class="nav-link" id="nav3">Perlombaan</a></li>
							<li class="nav-item"><a href="index.php#top" class="nav-link" id="nav4">Home</a></li>
						</ul>
					</div>
				</div>
			</nav>
			<div class="container">
				<div class="grid-header">
					<div class="deskripsi-header">
						<div class="deskripsi-title">
							<h1><?php echo $data['judul']; ?></h1>
						</div>
						<div class="deskripsi-p">
							<p>	<?php echo $data['thumbnail']; ?>	</p>
						</div>
						<div class="deskripsi-btn">
							<a href="#content">Selengkapnya</a>
						</div>
					</div>
				</div>
			</div>
		</header>
		<div id="content" class="blog">
			<div class="container">
				<div class="blog-box">
					<div class="blog-title">
						<h3><?php echo $data['judul']; ?></h3>
					</div>
					<div class="blog-content">
						<?php echo $data['konten']; ?>
					</div>
				</div>
				<div class="blog-box">
					<div class="blog-title">
						<h3>Pendaftaran <?php echo $data['judul']; ?></h3>
					</div>
					<div class="blog-content">
						<div class="form">
							<form method="POST" action="">
								<div class="form-group">
									<label>Nama Lengkap*:</label>
									<input type="text" class="form-control" placeholder="Nama Lengkap" required></input>
								</div>
								<div class="form-group">
									<label>Email*:</label>
									<input type="email" class="form-control" placeholder="Email" required></input>
								</div>
								<div class="form-group">
									<label>Kelas*:</label>
									<select name="kelas" id="" class="form-control">
										<option selected disabled>Pilih Kelas</option>
										<option value="10">10</option>
										<option value="10">11</option>
										<option value="10">12</option>
									</select>
								</div>
								<div class="form-group">
									<label>Asal Sekolah*:</label>
									<input type="text" class="form-control" placeholder="Asal Sekolah" required></input>
								</div>
								<div class="form-group">
									<label>Guru Pembimbing:</label>
									<input type="text" class="form-control" placeholder="Guru Pembimbing"></input>
								</div>
								<div class="form-group">
									<button type="submit" class="btn btn-submit">Daftar</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom" id="footer">
			<div class="container">
				<div class="grid-footer">
					<div class="footer-copyright">
						<p>&copy; 2019 <a href="javascript:void(0)" onclick="navbarWhite()">Premogator.id</a> All right reserved</p>
					</div>
				</div>
			</div>
		</div>
		<!-- <div class="toTop"> -->
		<a href="#top" class="toTop">&uarr;</a>
		<!-- </div> -->
		<script src="assets/js/sc.js"></script>
	</body>
</html>