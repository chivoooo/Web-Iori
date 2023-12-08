<div id="ngilang">
	<?= $this->session->flashdata('alert') ?>
</div>
<div>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">TAMBAH
	KATEGORI</button>
</div>
	<div class="modal fade" id="exampleModal" role="dialog" aria-labellebody="exampleModalLabel" aria-hidden="true	">
		<div class="modal-dialog" role="document">
				<div class="modal-content">
				<form action="<?= base_url('admin/kategori/simpan') ?>" method="POST">
				<div class="modal-body">
						<div class="mb-3">
							<label for="recipient-name" class="col-form-label">Nama Kategori</label>
							<input type="text" class="form-control" id="recipient-name" placeholder="Nama" name="nama_kategori" required >
						</div>
						<a type="button" class="btn btn-secondary" href="<?= base_url('admin/kategori') ?>">Kembali</a>
						<button type="submit" class="btn btn-primary">Kirim</button>
				</div>
			</form>
			</div>	
		</div>
	</div>

	<!-- Tabel -->

<div class="card">
	<div class="card-body">
		<h4 class="card-title">Kategori Konten</h4>
		<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama Kategori Konten</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<?php $no=1; foreach($kategori as $aa) { ?>
				<tbody>
					<td><?= $no; ?></td>
					<td><?= $aa['nama_kategori'] ?></td>
					<td>
						<a href="<?= base_url('admin/kategori/delete_data/'.$aa['id_kategori']); ?>" class="btn btn-danger"
							onClick="confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')">
							<i class="typcn icon typcn-trash"></i>
						</a>
						<button class="btn btn-primary" data-toggle="modal" data-target="#edit<?= $aa['id_kategori']?>">
							<i class="typcn icon typcn-edit"></i>
						</button>
					</td>	
					<div class="modal fade" id="edit<?= $aa['id_kategori'] ?>" tabindex="-1" aria-labelledby="exampleEdit" aria-hidden="true">
						<div class="modal-dialog">
							<form action="<?= site_url('admin/kategori/update') ?>" method='post'>
								<div class="modal-content">
									<div class="modal-header">
										<h1 class="modal-title fs-5" id="ModelEdit">Perbarui Kategori</h1>
									</div>
									<div class="modal-body">
										<form>
											<div class="mb-3">
												<input type="hidden" name="id_kategori" value="<?= $aa['id_kategori'] ?>">
												<label for="recipient-name" class="col-form-label">Nama Kategori Konten</label>
												<input type="text" class="form-control" value="<?= $aa['nama_kategori']?>"
												name="nama_kategori" />
											</div>
									</div>
									<div class="modal-footer">
										<a type="button" class="btn btn-secondary" href="<?= base_url('admin/kategori') ?>">Kembali</a>
										<button type="submit" class="btn btn-primary">Kirim</button>
									</div>
							</form>
						</div>
					</div>
					<?php $no++; } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>