<!DOCTYPE html>
<html lang="en">
    <head>
        <?php $this->load->view('_partials/head.php'); ?>
    </head>
    <body>
        <?php $this->load->view('_partials/navbar.php'); ?>
        <div class="content">
        <form method="get" action="<?php echo base_url("perpustakaan/search"); ?>">
            <h2 style="font-family:Arial,Helvetica,sans-serif;">Cari buku</h2>
            <input class="formfill"type="text" name="kodebuku" placeholder="Kode buku">
            <input type="submit" value="cari" style="margin-left:20px ;height:40px ;width:70px ;background-color:#2B65EC ;border:0 ;color:white ;border-radius:10%;">
        </form>
        </div>
        <?php $this->load->view('_partials/footer.php'); ?>
    </body>
</html>