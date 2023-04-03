<div class="status">
    <?php
    if ($this->session->flashdata('success')):
        echo $this->session->flashdata('success');
    endif;
    ?>
</div>