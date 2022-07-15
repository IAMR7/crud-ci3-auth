<div class="d-sm-flex align-items-center justify-content-between mb-4">

  <h1 class="h3 mb-0 text-gray-800">Edit Buku</h1>

</div>

<?= $this->session->flashdata('pesan');?>

<div class="card card-body col-6">

  <form action="Buku/editbuku" method="post">
    
    <div class="form-group mt-2">
      <label for="">URL Cover Buku</label>
      <input type="hidden" name="id" id="id" class="form-control" placeholder="" value="<?php echo $edit['id']; ?>">
      <input type="text" name="sampul" id="sampul" class="form-control" placeholder="" value="<?php echo $edit['sampul']; ?>">
      <?php echo form_error('sampul', '<small class="text-danger pl-3">', '</small>'); ?>
      <small id="helpId" class="text-muted">Misal : https://ebooks.gramedia.com/ebook-covers.png</small>
    </div>
    <div class="form-group">
      <label for="">Judul Buku</label>
      <input type="text" name="judul" id="judul" class="form-control" placeholder="" value="<?php echo $edit['judul']; ?>">
    </div>
    <div class="form-group">
      <label for="">Penulis</label>
      <input type="text" name="penulis" id="penulis" class="form-control" placeholder="" value="<?php echo $edit['penulis']; ?>">
    </div>
    <div class="form-group">
      <label for="">Penerbit</label>
      <input type="text" name="penerbit" id="penerbit" class="form-control" placeholder="" value="<?php echo $edit['penerbit']; ?>">
    </div>
    <div class="form-group">
      <label for="">Tahun</label>
      <input type="text" name="tahun" id="tahun" class="form-control" placeholder="" value="<?php echo $edit['tahun']; ?>">
    </div>
    <a href="<?= base_url('Buku'); ?>" class="btn btn-md btn-primary"><i class="fas fa-arrow-left"></i> Kembali</a>
    <button type="submit" class="btn btn-md btn-success"><i class="fas fa-fw fa-save"></i> Simpan</button>

  </form>

</div>