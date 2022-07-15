<div class="d-sm-flex align-items-center justify-content-between mb-4">

  <h1 class="h3 mb-0 text-gray-800">Daftar Buku</h1>

</div>

<?= $this->session->flashdata('pesan');?>

<div class="row">
  <div class="col-lg-9 col-12">
    <table id="mytable" class="table table-striped">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Sampul</th>
          <th scope="col">Judul</th>
          <th scope="col">Penulis</th>
          <th scope="col">Penerbit</th>
          <th scope="col">Tahun</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $no = 1;
        foreach ($buku as $row) :
        ?>

          <tr>
            <td><?= $no; ?></td>
            <td><img src="<?= $row->sampul; ?>" alt="" class="image rounded" width="60px"></td>
            <td><?= $row->judul; ?></td>
            <td><?= $row->penulis; ?></td>
            <td><?= $row->penerbit; ?></td>
            <td><?= $row->tahun; ?></td>
            <td>
              <a href="" class="btn btn-sm btn-primary"><i class="fa fa-fw fa-info-circle" aria-hidden="true"></i></a>
              <a href="<?= base_url('Buku/editbuku/' . $row->id); ?>" class="btn btn-sm btn-warning"><i class="fa fa-fw fa-edit" aria-hidden="true"></i></a>
              <a href="<?= base_url('Buku/hapusbuku/' . $row->id); ?>" class="btn btn-sm btn-danger"><i class="fa fa-fw fa-trash-alt" aria-hidden="true"></i></a>
            </td>
          </tr>

        <?php
          $no++;
        endforeach;
        ?>
      </tbody>
    </table>
  </div>
  <div class="col-lg-3 col-12">
    <div class="card card-body">
      <h4>Tambah Buku</h4>
      <hr>
      <?= form_open('Buku/tambahbuku'); ?>
      <div class="form-group mt-2">
        <label for="">URL Cover Buku</label>
        <input type="text" name="sampul" id="sampul" class="form-control" placeholder="">
        <small class="text-muted">Misal : https://ebooks.gramedia.com/ebook-covers.png</small>
      </div>
      <div class="form-group">
        <label for="">Judul Buku</label>
        <input type="text" name="judul" id="judul" class="form-control" placeholder="">
      </div>
      <div class="form-group">
        <label for="">Penulis</label>
        <input type="text" name="penulis" id="penulis" class="form-control" placeholder="">
      </div>
      <div class="form-group">
        <label for="">Penerbit</label>
        <input type="text" name="penerbit" id="penerbit" class="form-control" placeholder="">
      </div>
      <div class="form-group">
        <label for="">Tahun</label>
        <input type="text" name="tahun" id="tahun" class="form-control" placeholder="">
      </div>
      <button class="btn btn-md btn-primary" name="simpan" type="submit"><i class="fas fa-fw fa-save"></i> Simpan</button>
      <?= form_close(); ?>
    </div>
  </div>
</div>