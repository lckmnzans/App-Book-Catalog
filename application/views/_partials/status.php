<div class="status">
    <?php
    if ($this->session->flashdata('status')):
        echo $this->session->flashdata('status');
    endif;
    ?>
</div>