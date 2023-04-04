<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('_partials/head.php'); ?>
</head>

<body>
	<?php $this->load->view('_partials/navbar.php'); ?>
	<?php $this->load->view('_partials/status.php'); ?>
	<div class="content">
	<h2 style="margin-top:0;">Daftar Buku</h2>
		<table class="table table-bordered border-primary" border=1>
			<tr>
				<th>Kode Buku</th>
				<th>Judul Buku</th>
				<th>Pengarang</th>
                <th>Penerbit</th>
				<th>Aksi</th>
			</tr>
			<?php
			foreach ($daftarbuku as $buku):?>
			<tr>
			<td>
				<?php echo $buku->kodebuku ?>
			</td>
			<td>
				<?php echo $buku->judulbuku ?>
			</td>
			<td>
				<?php echo $buku->pengarang ?>
			</td>
            <td>
            	<?php echo $buku->penerbit ?>
            </td>
            <td style="text-align:center;">
				<a id="act" href=edit/<?php echo $buku->kodebuku?>>Edit</a>
				<a id="act" href=delete/<?php echo $buku->kodebuku?>>Hapus</a>
			</tr>
			<?php endforeach; ?>
		</table>
	</div>
	<?php $this->load->view('_partials/footer.php'); ?>
</body>

</html>