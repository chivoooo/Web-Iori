<div id="ngilang">
	<?= $this->session->flashdata('alert') ?>
</div>
<div>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">TAMBAH
	USERRR!!!</button>
</div>
	<div class="modal fade" id="exampleModal" role="dialog" aria-labellebody="exampleModalLabel" aria-hidden="true	">
		<div class="modal-dialog" role="document">
				<div class="modal-content">
				<form action="<?= base_url('admin/user/simpan') ?>" method="POST">
				<div class="modal-body">
						<div class="mb-3">
							<label for="recipient-name" class="col-form-label">Nama</label>
							<input type="text" class="form-control" id="recipient-name" placeholder="Nama" name="nama" required >
						</div>
						<div class="mb-3">
							<label for="recipient-name" class="col-form-label">Username</label>
							<input type="text" class="form-control" id="recipient-name" placeholder="Username" name="username"
								required>
						</div>
						<div class="mb-3">
							<label for="recipient-name" class="col-form-label">Password</label>
							<input type="password" class="form-control" id="recipient-name" placeholder="Password" name="password"
								required>
						</div>
						<div class="mb-3">
							<label for="recipient-name" class="col-form-label">Level</label>
							<select name="level" class="form-control">
								<option value="Admin">Admin</option>
								<option value="Kontributor">Kontributor</option>
							</select>
						</div>
						<a type="button" class="btn btn-secondary" href="<?= base_url('admin/user') ?>">Kembali</a>
						<button type="submit" class="btn btn-primary">Kirim</button>
				</div>
			</form>
			</div>	
		</div>
	</div>

	<!-- Tabel -->

<div class="card">
	<div class="card-body">
		<h4 class="card-title">DATA PENGGUNA</h4>
		<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>No</th>
						<th>Username</th>
						<th>Nama</th>
						<th>Level</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<?php $no = 1; foreach($user as $aa) { ?>
				<tbody>
					<td><?= $no++;?></td>
					<td><?= $aa['username'] ?></td>
					<td><?= $aa['nama'] ?></td>
					<td><?= $aa['level'] ?></td>
					<td>
						<a href="<?= base_url('admin/user/delete_data/'.$aa['id_user']); ?>" class="btn btn-danger"
							onClick="confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')">
							<i class="typcn icon typcn-trash"></i>
						</a>
						<button class="btn btn-primary" data-toggle="modal" data-target="#edit<?= $aa['id_user']?>">
							<i class="typcn icon typcn-edit"></i>
						</button>
					</td>	
					<div class="modal fade" id="edit<?= $aa['id_user'] ?>" tabindex="-1" aria-labelledby="exampleEdit" aria-hidden="true">
						<div class="modal-dialog">
							<form action="<?= site_url('admin/user/update') ?>" method='post'>
								<div class="modal-content">
									<div class="modal-header">
										<h1 class="modal-title fs-5" id="ModelEdit">Edit User</h1>
									</div>
									<div class="modal-body">
										<form>
											<div class="mb-3">
												<input type="hidden" name="id_user" value="<?= $aa['id_user'] ?>">
												<label for="recipient-name" class="col-form-label">Nama</label>
												<input type="text" class="form-control" value="<?= $aa['nama']?>"
												name="nama" />
											</div>
											<div class="mb-3">
											    <input type="hidden" name="id_user" value="<?= $aa['id_user'] ?>">
												<label for="recipient-name" class="col-form-label">Username</label>
												<input type="text" class="form-control" value="<?= $aa['username']?>"
												name="username" required />
											</div>
									</div>
									<div class="modal-footer">
										<a type="button" class="btn btn-secondary" href="<?= base_url('admin/user') ?>">Kembali</a>
										<button type="submit" class="btn btn-primary">Kirim</button>
									</div>
							</form>
						</div>
					</div>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>