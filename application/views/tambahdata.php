    <div class="container">
      <div class="col-lg-5 mx-auto">
      <?php echo $this->session->flashdata('message'); ?>
      <?php echo form_open('viewdata/tambahdata'); ?>
        <div class="form-group">
          <label>Masukan NIM</label>
          <input type="hidden" class="form-control" id="id" name="id">
          <input type="text" class="form-control" id="nim" name="nim">
          <?php echo form_error('nim', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label>Nama Lengkap</label>
          <input type="text" class="form-control" id="nama" name="nama">
          <?php echo form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label>Tanggal Lahir</label>
          <input type="date" class="form-control" id="tgllahir" name="tgllahir">
          <?php echo form_error('tgllahir', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label>Jenis Kelamin</label>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="jeniskelamin" id="jeniskelamin" value="laki-laki">
            <?php echo form_error('jeniskelamin', '<small class="text-danger pl-3">', '</small>'); ?>
            <label class="form-check-label">Laki - laki</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="jeniskelamin" id="jeniskelamin" value="perempuan">
            <?php echo form_error('jeniskelamin', '<small class="text-danger pl-3">', '</small>'); ?>
            <label class="form-check-label">Perempuan</label>
          </div>
        </div>
        <div class="form-group">
          <label>Alamat Rumah</label>
          <input type="text" class="form-control" id="alamat" name="alamat">
          <?php echo form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label>Nomor Telepon</label>
          <input type="text" class="form-control" id="notelp" name="notelp">
          <?php echo form_error('notelp', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="text" class="form-control" id="email" name="email">
          <?php echo form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <button type="submit" class="btn btn-primary">Input</button>
        <a href="<?php echo base_url('viewdata'); ?>" class="btn btn-success">Kembali</a>
      <?php echo form_close() ?>
      </div>
    </div>