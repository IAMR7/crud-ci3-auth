	<div class="container-fluid">
		<?php echo $this->session->flashdata('message'); ?>
		<form method="post" action="viewdata/editdata">
			<table class="table table-hover">
				<thead>
				    <tr>
				      <th scope="col">NIM</th>
				      <th scope="col">Nama Lengkap</th>
				      <th scope="col">Tanggal Lahir</th>
				      <th scope="col" colspan="2">Jenis Kelamin</th>
				      <th scope="col">Alamat</th>
				      <th scope="col">No Telepon</th>
				      <th scope="col">Email</th>
				      <th scope="col" colspan="2">Aksi</th>
				    </tr>
				</thead>
				<tbody>
				    <tr>
				      <td>
				      	<input type="hidden" class="form-control" id="id" name="id" value="<?php echo $edit['id']; ?>">
          				<input type="text" class="form-control" id="nim" name="nim" value="<?php echo $edit['nim']; ?>">
          				<?php echo form_error('nim', '<small class="text-danger pl-3">', '</small>'); ?>
				      </td>
				      <td>
				      	<input type="text" class="form-control" id="nama" name="nama" value="<?php echo $edit['nama']; ?>">
				      	<?php echo form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
				      </td>
				      <td>
				      	<input type="date" class="form-control" id="tgllahir" name="tgllahir" value="<?php echo $edit['tgllahir']; ?>">
				      	<?php echo form_error('tgllahir', '<small class="text-danger pl-3">', '</small>'); ?>
				      </td>
				      <td>
				      	<input class="form-check-input" type="radio" name="jeniskelamin" id="jeniskelamin" value="<?php echo $edit['jeniskelamin']; ?>">
				      	<label class="form-check-label">Laki - laki</label>
				      	<?php echo form_error('jeniskelamin', '<small class="text-danger pl-3">', '</small>'); ?>
				      </td>
				      <td>
				      	<input class="form-check-input" type="radio" name="jeniskelamin" id="jeniskelamin" value="<?php echo $edit['jeniskelamin']; ?>">
				      	<label class="form-check-label">Perempuan</label>
				      	<?php echo form_error('jeniskelamin', '<small class="text-danger pl-3">', '</small>'); ?>
				      </td>
				      <td>
				      	<input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $edit['alamat']; ?>">
				      	<?php echo form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
				      </td>
				      <td>
				      	<input type="text" class="form-control" id="notelp" name="notelp" value="<?php echo $edit['notelp']; ?>">
				      	<?php echo form_error('notelp', '<small class="text-danger pl-3">', '</small>'); ?>
				      </td>
				      <td>
				      	<input type="text" class="form-control" id="email" name="email" value="<?php echo $edit['email']; ?>">
				      	<?php echo form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
				      </td>
				      <td>
				      	<button type="submit" class="btn btn-primary">Save</button>
				      	<a href="<?php echo base_url('viewdata'); ?>" class="btn btn-success">Back</a>
				      </td>
				    </tr>	
		  		</tbody>
			</table>
		</form>
	</div>