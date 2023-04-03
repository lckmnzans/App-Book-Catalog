<!DOCTYPE html>
<html lang="en">
    <head>
        <?php $this->load->view('_partials/head.php'); ?>
    </head>
    <body>
        <?php $this->load->view('_partials/navbar.php'); ?>
        <form method="get" action="<?php echo base_url("perpustakaan/search"); ?>">
            <h2 style="font-family:Arial,Helvetica,sans-serif;">Cari buku:</h2>
            <input type="text" name="kodebuku" placeholder="Kode buku">
            <input type="submit" value="cari">
        </form>
        <?php $this->load->view('_partials/footer.php'); ?>
    </body>
</html>