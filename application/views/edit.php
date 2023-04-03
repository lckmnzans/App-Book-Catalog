<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('_partials/head.php'); ?>
</head>
<body>
    <?php $this->load->view('_partials/navbar.php'); ?>
	<?php $this->load->view('_partials/status.php'); ?>
    <div class="content">
    <form action="<?php base_url("perpustakaan/edit") ?>" method="post">
        <div class="form-group">
            <label for="kodebuku">Kode Buku</label>
            <input class="form-control" <?php echo form_error('kodebuku') ? 'is-invalid':'' ?>" type="text" name="kodebuku" placeholder="Kode buku" value="<?php echo $buku->kodebuku ?>" />
            <div class="invalid-feedback">
                <?php echo form_error('nama') ?>
            </div>
        </div>
        <div class="form-group">
            <label for="judulbuku">Judul Buku</label>
            <input class="form-control" <?php echo form_error('judulbuku') ? 'is-invalid':'' ?>" type="text" name="judulbuku" placeholder="Judul buku" value="<?php echo $buku->judulbuku ?>" />
            <div class="invalid-feedback">
                <?php echo form_error('judulbuku') ?>
            </div>
        </div>
        <div class="form-group">
            <label for="pengarang">Pengarang</label>
            <input class="form-control" <?php echo form_error('pengarang') ? 'is-invalid':'' ?>" type="text" name="pengarang" placeholder="Pengarang" value="<?php echo $buku->pengarang ?>" />
            <div class="invalid-feedback">
                <?php echo form_error('pengarang') ?>
            </div>
        </div>
        <div class="form-group">
            <label for="penerbit">Pengarang</label>
            <input class="form-control" <?php echo form_error('penerbit') ? 'is-invalid':'' ?>" type="text" name="penerbit" placeholder="Penerbit" value="<?php echo $buku->penerbit ?>" />
            <div class="invalid-feedback">
                <?php echo form_error('penerbit') ?>
            </div>
        </div>
        <input type="hidden" name="kodebuku" value="<?php echo $buku->kodebuku; ?>">
        <input class="btn btn-primary" type="submit" value="Save" />
    </form>
    </div>
    <?php $this->load->view('_partials/footer.php');?>
</body>
</html>