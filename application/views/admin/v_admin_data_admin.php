<div class="d-sm-flex align-items-center justify-content-between mb-4">

  <h1 class="h3 mb-0 text-gray-800">Data Admin</h1>

</div>

<?php echo $this->session->flashdata('message'); ?>

<div class="row">

  <div class="col-lg-8 col-12">
    <table class="table table-strip table-hover">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama</th>
          <th scope="col">Email</th>
          <th scope="col">Role</th>
          <th scope="col">Foto</th>
          <th scope="col" colspan="2">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $no = 1;
        foreach ($dataadmin as $da) :
        ?>
          <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $da->nama; ?></td>
            <td><?php echo $da->email; ?></td>
            <td><?php echo $da->role; ?></td>
            <td><img class="image rounded" src="<?php echo base_url(); ?>uploads/img/<?php echo $da->foto; ?>" alt="" width="50px"></td>
            <td>
              <a href="<?php echo base_url('admin/Admin_data_admin/hapusdata/' . $da->id); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin hapus data?')"><i class="fas fa-fw fa-trash-alt"></i> Hapus</a>
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
      <h4 class="mb-4">Tambah Admin</h4>

      <?php echo form_open_multipart(base_url("admin/Admin_data_admin/tambahdata")); ?>

      <div class="form-group">
        <label>Nama</label>

        <input type="hidden" class="form-control" id="id" name="id">

        <input type="text" class="form-control" id="nama" name="nama">
        <?php echo form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>

      <div class="form-group">
        <label>Email</label>
        <input type="text" class="form-control" id="email" name="email">
        <?php echo form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>

      <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" id="password" name="password">
        <?php echo form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>

      <div class="form-group">
        <label>Role</label>
        <input type="text" class="form-control" id="role" name="role">
        <?php echo form_error('role', '<small class="text-danger pl-3">', '</small>'); ?>
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
      <?php echo form_close(); ?>
    </div>
  </div>
</div>