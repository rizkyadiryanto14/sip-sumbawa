
<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
	<!-- Left navbar links -->
	<ul class="navbar-nav">
		<li class="nav-item">
			<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
		</li>
	</ul>

	<!-- Right navbar links -->
	<ul class="navbar-nav ml-auto">
		<!-- Right navbar links -->
		<ul class="navbar-nav ml-auto">
			<!-- Messages Dropdown Menu -->
			<li class="nav-item dropdown">
				<a class="nav-link" data-toggle="dropdown" href="#">
					<span class="text-dark"><?= $this->session->userdata('nama_user') ?></span>
					<i class="far fa-user text-dark"></i>
				</a>
				<div class="dropdown-menu dropdown-menu-right">
					<a href="<?= base_url('logout') ?>" class="dropdown-item">
						<i class="fas fa-sign-out-alt text-danger"></i>
						Logout
					</a>
				</div>
			</li>
		</ul>
		<!-- Notifications Dropdown Menu -->
		<li class="nav-item">
			<a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
				<i class="fas fa-th-large"></i>
			</a>
		</li>
	</ul>
</nav>
<!-- /.navbar -->
