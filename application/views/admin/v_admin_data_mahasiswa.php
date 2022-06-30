<div class="d-sm-flex align-items-center justify-content-between mb-4">

  <h1 class="h3 mb-0 text-gray-800">Data Mahasiswa</h1>

</div>

<?php echo $this->session->flashdata('message'); ?>

<div class="row">

  <div class="col-lg-8 col-12">
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama Lengkap</th>
          <th scope="col">No Telepon</th>
          <th scope="col">Email</th>
          <th scope="col">Foto</th>
          <th scope="col" colspan="2">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $no = 1;
        foreach ($datamahasiswa as $dm) :
        ?>
          <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $dm->nama; ?></td>
            <td><?php echo $dm->notelp; ?></td>
            <td><?php echo $dm->email; ?></td>
            <td><img class="image rounded" src="<?php echo base_url(); ?>uploads/img/<?php echo $dm->foto; ?>" alt="" width="50px"></td>
            <td>
              <a href="<?php echo base_url('admin/Admin_data_mahasiswa/editdata/' . $dm->id); ?>" class="btn btn-sm btn-success"><i class="fas fa-fw fa-edit"></i></a>
              <a href="<?php echo base_url('admin/Admin_data_mahasiswa/hapusdata/' . $dm->id); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin hapus data?')"><i class="fa fa-fw fa-trash-alt" aria-hidden="true"></i></a>
            </td>
          </tr>
        <?php
          $no++;
        endforeach;
        ?>
      </tbody>
    </table>
  </div>

  <div class="col-lg-4 col-12">
    <div class="card card-body">
      <h4>Tambah Data Mahasiwa</h4>
      <?php echo form_open_multipart(base_url('admin/Admin_data_mahasiswa/tambahdata')); ?>
      <div class="form-group">
        <label>Nama Lengkap</label>
        <input type="hidden" class="form-control" id="id" name="id">
        <input type="text" class="form-control" id="nama" name="nama">
        <?php echo form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label>Tanggal Lahir</label>
        <input type="date" class="form-control" id="tgllahir" name="tgllahir">
        <?php echo form_error('tgllahir', '<small class="text-danger pl-3">', '</small>'); ?>
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
      <div class="input-group mb-3">
        <div class="custom-file">
          <input type="file" class="custom-file-input" id="foto" name="foto">
          <label class="custom-file-label" for="foto">Choose file</label>
        </div>
        <div class="input-group-append">
          <span class="input-group-text" id="foto">Upload</span>
        </div>
        <?php echo form_error('foto', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <button type="submit" name="simpan" value="simpan" class="btn btn-success"><i class="fas fa-fw fa-save"></i> Simpan</button>
      <?php echo form_close() ?>
    </div>
  </div>
</div>