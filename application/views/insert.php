<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view('_partials/head.php'); ?>
</head>
<body>
	<?php $this->load->view('_partials/navbar.php'); ?>
	<?php $this->load->view('_partials/status.php'); ?>
	<form method="post" action="<?php echo base_url('perpustakaan/add'); ?>">
		<label for="kodebuku">Kode Buku</label>
		<input class="form-control <?php echo form_error('kodebuku') ? 'is-invalid':'' ?>" type="text" name="kodebuku" placeholder="Kode buku" />
		<div class="invalid-feedback">
			<?php echo form_error('kodebuku'); ?>
		</div>            
		<label for="judulbuku">Judul Buku</label>
		<input class="form-control <?php echo form_error('judulbuku') ? 'is-invalid':'' ?>" type="text" name="judulbuku" placeholder="Judul Buku" />
		<div class="invalid-feedback">
			<?php echo form_error('judulbuku'); ?>
		</div>
        <label for="pengarang">Pengarang</label>
		<input class="form-control <?php echo form_error('pengarang') ? 'is-invalid':'' ?>" type="text" name="pengarang" placeholder="Pengarang" />
		<div class="invalid-feedback">
			<?php echo form_error('pengarang'); ?>
		</div>
        <label for="penerbit">Penerbit</label>
		<input class="form-control <?php echo form_error('penerbit') ? 'is-invalid':'' ?>" type="text" name="penerbit" placeholder="Penerbit" />
		<div class="invalid-feedback">
			<?php echo form_error('penerbit'); ?>
		</div>
        <input type="submit" value="Tambah" />
	</form>
    <?php $this->load->view('_partials/footer.php'); ?>
</body>

</html>
