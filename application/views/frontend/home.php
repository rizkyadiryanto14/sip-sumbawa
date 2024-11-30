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
				<li><a href="#about">Tentang Kami</a></li>
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
			<div class="d-flex flex-column justify-content-center align-items-center">
				<h1 data-aos="fade-up">Selamat Datang Di <span>SIP</span></h1>
				<p data-aos="fade-up" data-aos-delay="100">Sistem Informasi Pemilihan Umum Kabupaten Sumbawa<br></p>
				<div class="d-flex" data-aos="fade-up" data-aos-delay="200">
					<a href="<?= base_url('datacenter') ?>" class="btn-get-started">Get Started</a>
					<a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
				</div>
				<img src="<?= base_url() ?>assets/img/hero-services-img.webp" class="img-fluid hero-img" alt="" data-aos="zoom-out" data-aos-delay="300">
			</div>
		</div>

	</section><!-- /Hero Section -->

	<!-- Featured Services Section -->
	<section id="featured-services" class="featured-services section light-background">

		<div class="container">

			<div class="row gy-4">

				<div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="100">
					<div class="service-item d-flex">
						<div class="icon flex-shrink-0"><i class="bi bi-briefcase"></i></div>
						<div>
							<h4 class="title"><a href="#" class="stretched-link">Kirim Data Pemilu</a></h4>
							<p class="description">Kirim data anda untuk melaksanakan pemilu dengan efisien</p>
						</div>
					</div>
				</div>
				<!-- End Service Item -->

				<div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="200">
					<div class="service-item d-flex">
						<div class="icon flex-shrink-0"><i class="bi bi-card-checklist"></i></div>
						<div>
							<h4 class="title"><a href="#" class="stretched-link">Melihat Data Pemilu</a></h4>
							<p class="description">Cek Data Anda Sudah Terdaftar Atau Belum?</p>
						</div>
					</div>
				</div><!-- End Service Item -->

				<div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="300">
					<div class="service-item d-flex">
						<div class="icon flex-shrink-0"><i class="bi bi-bar-chart"></i></div>
						<div>
							<h4 class="title"><a href="#" class="stretched-link">Melihat Statistik Data Pemilu</a></h4>
							<p class="description">Menampilkan Grafik Data Pemilu Dengan Cara Yang Modern</p>
						</div>
					</div>
				</div><!-- End Service Item -->

			</div>

		</div>

	</section><!-- /Featured Services Section -->

	<!-- About Section -->
	<section id="about" class="about section">

		<div class="container">

			<div class="row gy-4">

				<div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
					<p class="who-we-are">Tentang Kami</p>
					<h3>APA ITU KPU SUMBAWA?</h3>
					<p class="fst-italic">
						KPU merupakan Komisi Pemilihan Umum pada Kabupaten Sumbawa yang bertugas untuk mengatur jalannya pemilukada yang berlangsung pada kabupate sumbawa
					</p>
					<ul>
						<li><i class="bi bi-check-circle"></i> <span>Membangun lembaga penyelenggara Pemilihan Umum yang memiliki kompetensi, kredibilitas dan kapabilitas dalam menyelenggarakan Pemilihan Umum.</span></li>
						<li><i class="bi bi-check-circle"></i> <span>Meningkatkan kualitas penyelenggaraan Pemilihan Umum yang bersih, efisien dan efektif.</span></li>
						<li><i class="bi bi-check-circle"></i> <span>Menyelenggarakan Pemilihan Umum untuk memilih Anggota Dewan Perwakilan Rakyat, Dewan Perwakilan Daerah, Dewan Perwakilan Rakyat Daerah, Presiden dan Wakil Presiden serta Kepala Daerah dan Wakil Kepala Daerah secara langsung, umum, bebas, rahasia, jujur, adil, akuntabel, edukatif dan beradab.</span></li>
					</ul>
				</div>

				<div class="col-lg-6 about-images" data-aos="fade-up" data-aos-delay="200">
					<div class="row gy-4">
						<div class="col-lg-12">
							<div class="row gy-4">
								<div class="col-lg-12">
									<img src="<?= base_url() ?>assets/dist/img/kpusidenew.png" class="img-fluid" alt="">
								</div>
							</div>
						</div>
					</div>

				</div>

			</div>

		</div>
	</section><!-- /About Section -->


	<!-- Services Section -->
	<section id="services" class="services section light-background">

		<!-- Section Title -->
		<div class="container section-title" data-aos="fade-up">
			<h2>Daftar Fitur</h2>
			<p>Beberapa Fitur Canggih Yang Dapat Anda Gunakan</p>
		</div><!-- End Section Title -->

		<div class="container">

			<div class="row g-5">

				<div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
					<div class="service-item item-cyan position-relative">
						<i class="bi bi-activity icon"></i>
						<div>
							<h3>Cek Data Pemilu</h3>
							<p>Fitur Cek Data Pemilu merupakan fitur yang dapat anda gunakan untuk mengecek ketersediaan data anda dalam database pemilu dari KPU Sumbawa</p>
						</div>
					</div>
				</div><!-- End Service Item -->

				<div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
					<div class="service-item item-orange position-relative">
						<i class="bi bi-broadcast icon"></i>
						<div>
							<h3>Registrasi Pemilu</h3>
							<p>Jika data anda tidak ada pada database KPU anda dapat mengisi form untuk di verifikasi oleh admin untuk ditambahkan pada database KPU</p>
						</div>
					</div>
				</div><!-- End Service Item -->

			</div>

		</div>

	</section><!-- /Services Section -->

	<!-- Contact Section -->
	<section id="contact" class="contact section">

		<!-- Section Title -->
		<div class="container section-title" data-aos="fade-up">
			<h2>Kontak</h2>
			<p>Lokasi Lengkap Dan Informasi Kontak Yang Dapat Anda Akses</p>
		</div><!-- End Section Title -->

		<div class="container" data-aos="fade-up" data-aos-delay="100">

			<div class="row gy-4">

				<div class="col-lg-6">
					<div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
						<i class="bi bi-geo-alt"></i>
						<h3>Address</h3>
						<p>Sumbawa, xxx, xxxx</p>
					</div>
				</div><!-- End Info Item -->

				<div class="col-lg-3 col-md-6">
					<div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="300">
						<i class="bi bi-telephone"></i>
						<h3>Call Us</h3>
						<p>+1 5589 55488 55</p>
					</div>
				</div><!-- End Info Item -->

				<div class="col-lg-3 col-md-6">
					<div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="400">
						<i class="bi bi-envelope"></i>
						<h3>Email Us</h3>
						<p>info@example.com</p>
					</div>
				</div><!-- End Info Item -->

			</div>

			<div class="row gy-4 mt-1">
				<div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3946.228135917747!2d117.40365581089924!3d-8.477184191528554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcbecd7c8d5a1a3%3A0x3a87a221806c2acc!2sKomisi%20Pemilihan%20Umum%20Kabupaten%20Sumbawa!5e0!3m2!1sid!2sid!4v1732913090258!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 400px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div><!-- End Google Maps -->

				<div class="col-lg-6">
					<form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="400">
						<div class="row gy-4">

							<div class="col-md-6">
								<input type="text" name="name" class="form-control" placeholder="Masukan Nama Anda" required="">
							</div>

							<div class="col-md-6 ">
								<input type="email" class="form-control" name="email" placeholder="Masukan Email Anda" required="">
							</div>

							<div class="col-md-12">
								<input type="text" class="form-control" name="subject" placeholder="Subject" required="">
							</div>

							<div class="col-md-12">
								<textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
							</div>

							<div class="col-md-12 text-center">
								<div class="loading">Loading</div>
								<div class="error-message"></div>
								<div class="sent-message">Your message has been sent. Thank you!</div>

								<button type="submit">Send Message</button>
							</div>

						</div>
					</form>
				</div><!-- End Contact Form -->

			</div>

		</div>

	</section><!-- /Contact Section -->

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
