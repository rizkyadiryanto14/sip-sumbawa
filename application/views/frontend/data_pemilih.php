<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>Sistem Informasi Pemilih Bawaslu Sumbawa</title>
	<meta name="description" content="">
	<meta name="keywords" content="">

	<!-- Favicons -->
	<link href="<?= base_url() ?>assets/dist/img/kpu.png" rel="icon">
	<link href="<?= base_url() ?>assets/dist/img/kpu.png" rel="apple-touch-icon">

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com" rel="preconnect">
	<link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="<?= base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets/vendor/aos/aos.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

	<link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css" />

	<!-- Main CSS File -->
	<link href="<?= base_url() ?>assets/css/main.css" rel="stylesheet">

</head>

<body class="index-page">

<header id="header" class="header d-flex align-items-center fixed-top">
	<div class="container-fluid container-xl position-relative d-flex align-items-center">

		<a href="index.html" class="logo d-flex align-items-center me-auto">
			<img src="<?= base_url() ?>assets/dist/img/kpu.png" alt="">
		</a>

		<nav id="navmenu" class="navmenu">
			<ul>
				<li><a href="<?= base_url('Home') ?>" class="active">Home</a></li>
				<li><a href="<?= base_url('Home') ?>">Tentang Kami</a></li>
				<li><a href="<?= base_url('home/data_pemilih') ?>">Cek Data Pemilih</a></li>
				<li><a href="<?= base_url('home/input_data') ?>">Input Data Pemilih</a></li>
				<li><a href="#contact">Kontak</a></li>
			</ul>
			<i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
		</nav>

		<a class="btn-getstarted" href="<?= base_url('datacenter') ?>">Mulai</a>

	</div>
</header>

<main class="main">

	<!-- Hero Section -->
	<section id="hero" class="hero section">
		<div class="hero-bg">
			<img src="<?= base_url() ?>assets/img/hero-bg-light.webp" alt="">
		</div>
		<div class="container text-center">
			<div class="card">
				<div class="card-header">
					Daftar Pemilih Tetap Kabupaten Sumbawa
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table id="pemilih" class="table table-bordered table-hover">
							<thead>
							<tr>
								<th>No</th>
								<th>Nama</th>
								<th>NIK</th>
								<th>KK</th>
								<th>Alamat</th>
								<th>Tanggal lahir</th>
								<th>Jenis Kelamin</th>
								<th>Status Perkawinan</th>
							</tr>
							</thead>
						</table>
					</div>
				</div>
			</div>
		</div>

	</section><!-- /Hero Section -->


</main>

<footer id="footer" class="footer position-relative light-background">

	<div class="container footer-top">
		<div class="row gy-4">
			<div class="col-lg-4 col-md-6 footer-about">
				<a href="index.html" class="logo d-flex align-items-center">
					<span class="sitename">KPU Sumbawa</span>
				</a>
				<div class="footer-contact pt-3">
					<p>Sumbawa, xxx xxx</p>
					<p>Sumbawa, Lempeh, 84136</p>
					<p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
					<p><strong>Email:</strong> <span>info@example.com</span></p>
				</div>
				<div class="social-links d-flex mt-4">
					<a href=""><i class="bi bi-twitter-x"></i></a>
					<a href=""><i class="bi bi-facebook"></i></a>
					<a href=""><i class="bi bi-instagram"></i></a>
					<a href=""><i class="bi bi-linkedin"></i></a>
				</div>
			</div>

			<div class="col-lg-2 col-md-3 footer-links">
				<h4>Useful Links</h4>
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">Tentang Kami</a></li>
					<li><a href="#">Data Pemilih</a></li>
					<li><a href="#">KPU Sumbawa</a></li>
					<li><a href="#">Sumbawa</a></li>
				</ul>
			</div>

			<div class="col-lg-4 col-md-12 footer-newsletter">
				<h4>Berlangganan Informasi</h4>
				<form action="forms/newsletter.php" method="post" class="php-email-form">
					<div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
					<div class="loading">Loading</div>
					<div class="error-message"></div>
					<div class="sent-message">Your subscription request has been sent. Thank you!</div>
				</form>
			</div>

		</div>
	</div>

	<div class="container copyright text-center mt-4">
		<p>© <span>Copyright</span> <strong class="px-1 sitename">KPUSUMBAWA</strong><span>All Rights Reserved</span></p>
	</div>

</footer>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="<?= base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/php-email-form/validate.js"></script>
<script src="<?= base_url() ?>assets/vendor/aos/aos.js"></script>
<script src="<?= base_url() ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/swiper/swiper-bundle.min.js"></script>

<!-- Main JS File -->
<script src="<?= base_url() ?>assets/js/main.js"></script>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Masukkan DataTables JS di sini -->
<script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
<script>
	$(document).ready(function() {
		var dataTable = $('#pemilih').DataTable({
			"processing": true,
			"serverSide": true,
			"order": [],
			"ajax": {
				url: "<?php echo site_url('admin/get_data_pemilih'); ?>",
				type: "POST"
			},
			"columnDefs": [{
				"targets": [0, 1, 2, 3, 4],
				"orderable": false,
			}],
		});
	});
</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php if ($this->session->flashdata('success')) : ?>
	<script>
		Swal.fire({
			title: 'Sukses',
			text: `<?php echo $this->session->flashdata('success'); ?>`,
			icon: 'success',
			confirmButtonText: 'OK'
		});
	</script>
<?php endif; ?>

<?php if ($this->session->flashdata('error')) : ?>
	<script>
		Swal.fire({
			title: 'Gagal',
			text: `<?php echo $this->session->flashdata('error'); ?>`,
			icon: 'error',
			confirmButtonText: 'OK'
		});
	</script>
<?php endif; ?>

</body>

</html>
