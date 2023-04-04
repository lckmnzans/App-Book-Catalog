<!DOCTYPE html>
<html lang="en">
    <head>
        <?php $this->load->view('_partials/head.php'); ?>
    </head>
    <body>
        <?php $this->load->view('_partials/navbar.php'); ?>
		<div class="content">
        <h2>Hasil Pencarian</h2>
        <?php if ($buku): ?>
		<table class="table table-bordered border-primary" border=1>
			<thead>
				<tr>
					<th>Kode Buku</th>
					<th>Judul Buku</th>
					<th>Pengarang</th>
					<th>Penerbit</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><?= $buku->kodebuku ?></td>
					<td><?= $buku->judulbuku ?></td>
					<td><?= $buku->pengarang ?></td>
					<td><?= $buku->penerbit ?></td>
				</tr>
			</tbody>
		</table>
		<?php else: ?>
            <p>Tidak ditemukan</p>
        <?php endif; ?>
		</div>
        <?php $this->load->view('_partials/footer.php'); ?>
    </body>
</html>