<?php
if ($this->session->has_userdata('msg')) { ?>
<div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true"></button>
    <b>
        <i class="fa fa-check-circle"></i>
        Data Berhasil Ditambahkan.
    </b>
    <?php echo $this->session->flashdata('msg');?>
</div>
<?php } ?>
<?php if($this->session->has_userdata('success')){ ?>
    <div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true"></button>
    <b>
        <i class="fa fa-check-circle"></i>
        Approved...
    </b>
    <?php echo $this->session->flashdata('success');?>
</div>
<?php } ?>
<?php if($this->session->has_userdata('fail')){ ?>
    <div class="alert alert-danger alert-dismissible" role="alert">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true"></button>
    <b>
        <i class="fa fa-exclamation-circle"></i>
        Data Gagal Ditambahkan! Cek Kembali Inputan Anda !
    </b>
    <?php echo $this->session->flashdata('fail');?>
</div>
<?php } ?>

<?php if($this->session->has_userdata('denied')){ ?>
<div class="alert alert-warning alert-dismissible toastrDefaultSuccess">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <b>
        <i class="icon fas fa-exclamation-circle"></i>
        Access Denied !
    </b>
    <!-- <script>
        toastr.success('Berhasil');
      </script> -->
    <?php echo $this->session->flashdata('denied');?>
</div>
<?php } ?>

<?php if($this->session->has_userdata('wrong')){ ?>
    <div class="alert alert-danger alert-dismissible" role="alert">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true"></button>
    <b>
        <i class="fa fa-exclamation-circle"></i>
        Gagal Mengubah Data ! 
    </b>
    <?php echo $this->session->flashdata('wrong');?>
</div>
<?php } ?>

<?php if($this->session->has_userdata('update')){ ?>
    <div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true"></button>
    <b>
        <i class="fa fa-exclamation-circle"></i>
        Data Berhasil Diubah.
    </b>
    <?php echo $this->session->flashdata('update');?>
</div>
<?php } ?>