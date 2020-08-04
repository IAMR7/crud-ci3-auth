		<div class="container">
		<a href="<?php echo base_url('viewdata/tambahdata'); ?>" class="btn btn-primary mt-3 mb-3">Tambah Data Baru</a>
		<table class="table table-hover">
			<thead>
			    <tr>
			      <th scope="col">No</th>
			      <th scope="col">NIM</th>
			      <th scope="col">Nama Lengkap</th>
			      <th scope="col">Tanggal Lahir</th>
			      <th scope="col">Jenis Kelamin</th>
			      <th scope="col">Alamat</th>
			      <th scope="col">No Telepon</th>
			      <th scope="col">Email</th>
			      <th scope="col" colspan="2">Aksi</th>
			    </tr>
			</thead>
			<tbody>
				<?php
				$no = 1;
				foreach($datamahasiswa as $dm) :
				?>
			    <tr>
			      <td><?php echo $no; ?></td>
			      <td><?php echo $dm->nim; ?></td>
			      <td><?php echo $dm->nama; ?></td>
			      <td><?php echo $dm->tgllahir; ?></td>
			      <td><?php echo $dm->jeniskelamin; ?></td>
			      <td><?php echo $dm->alamat; ?></td>
			      <td><?php echo $dm->notelp; ?></td>
			      <td><?php echo $dm->email; ?></td>
			      <td>
			      	<a href="<?php echo base_url('viewdata/editdata/'.$dm->id); ?>" class="btn btn-success">Edit</a>
			      </td>
			      <td>
			      	<a href="<?php echo base_url('viewdata/hapusdata/'.$dm->id); ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin hapus data?')">Hapus</a>
			      </td>
			    </tr>
				<?php
				$no++;
				endforeach;
				?>
	  		</tbody>
		</table>
	</div>