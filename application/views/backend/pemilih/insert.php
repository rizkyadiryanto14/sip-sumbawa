<?php $this->load->view('templates/header') ?>
<?php $this->load->view('templates/navbar') ?>
<?php $this->load->view('templates/sidebar') ?>

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Tambah Pemilih</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Tambah Pemilih</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->


	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<form action="<?= base_url('admin/pemilih/store') ?>" method="post">
						<div class="card">
							<div class="card-header">
								Form Tambah Pemilih
							</div>
							<div class="card-body">
								<div class="form-group">
									<label for="nama_lengkap">Nama Lengkap</label>
									<input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" required>
								</div>
								<div class="form-group">
									<label for="no_kk">Kartu Keluarga</label>
									<input type="text" name="no_kk" id="no_kk" class="form-control" required>
								</div>
								<div class="form-group">
									<label for="nik">NIK</label>
									<input type="text" name="nik" id="nik" class="form-control" required>
								</div>
								<div class="form-group">
									<label for="umur">Umur</label>
									<input type="text" name="umur" id="umur" class="form-control" required>
								</div>
								<div class="form-group">
									<label for="alamat">Alamat</label>
									<input type="text" name="alamat" id="alamat" class="form-control" required>
								</div>
								<div class="form-group">
									<label for="tanggal_lahir">Tanggal Lahir</label>
									<input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" required>
								</div>
								<div class="form-group">
									<label for="jenis_kelamin">Jenis Kelamin</label>
									<select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
										<option selected disabled>Pilih Jenis Kelamin</option>
										<option value="Laki-Laki">Laki - Laki</option>
										<option value="Perempuan">Perempuan</option>
									</select>
								</div>
								<div class="form-group">
									<label for="status_perkawinan">Status Perkawinan</label>
									<select name="status_perkawinan" id="status_perkawinan" class="form-control" required>
										<option selected disabled>Pilih Status Perkawinan</option>
										<option value="Menikah">Menikah</option>
										<option value="Lajang">Lajang</option>
									</select>
								</div>
							</div>
							<div class="card-footer">
								<a href="<?= base_url('admin/pemilih') ?>" class="btn btn-secondary">Kembali</a>
								<button class="btn btn-primary" type="submit">Simpan</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
</div>

<?php $this->load->view('templates/footer') ?>
