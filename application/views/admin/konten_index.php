<div id="ngilang">
	<?= $this->session->flashdata('alert') ?>
</div>
<div>
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">TAMBAH
		KONTEN</button>
</div>
<div class="modal fade" id="exampleModal" role="dialog" aria-labellebody="exampleModalLabel" aria-hidden="true	">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<form action="<?= base_url('admin/konten/simpan') ?>" method="POST" enctype='multipart/form-data'>
				<div class="modal-body">
					<div class="mb-3">
						<label for="recipient-name" class="col-form-label">Judul</label>
						<input type="text" class="form-control" id="recipient-name" placeholder="Nama" name="judul"
							required>
					</div>
					<div class="mb-3">
						<label for="recipient-name" class="col-form-label">Ketegori</label>
						<select name="id_kategori" class="form-control">
							<?php foreach($kategori as $aa) { ?>
							<option value="<?= $aa['id_kategori'] ?>"><?= $aa['nama_kategori'] ?></option>
							<?php } ?>
						</select>
					</div>
					<div class="mb-3">
						<label for="recipient-name" class="col-form-label">Keterangan</label>
						<textarea name="keterangan" class="form-control" placeholder="Keterangan" name="keterangan"
							required></textarea>
					</div>
					<div class="mb-3">
						<label for="recipient-name" class="col-form-label">Foto</label>
						<input type="file" name="foto" class="form-control" accept="image/png, image/jpeg">
					</div>
					<a type="button" class="btn btn-secondary" href="<?= base_url('admin/konten') ?>">Kembali</a>
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
						<th>Judul</th>
						<th>Kategori Konten</th>
						<th>Tanggal</th>
						<th>Kreator</th>
						<th>Foto</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<?php $no=1; foreach($konten as $aa) { ?>
				<tbody>
					<td><?= $no; ?></td>
					<td><?= $aa['judul'] ?></td>
					<td><?= $aa['nama_kategori'] ?></td>
					<td><?= $aa['tanggal'] ?></td>
					<td><?= $aa['nama'] ?></td>
					<td>
						<a href="<?= base_url('assets/upload/konten/'.$aa['foto']) ?>" target="_blank">
							<i class="typcn typcn-zoom-outline menu-icon"></i> Lihat foto
						</a>
					</td>
					<td>
						<a href="<?= base_url('admin/konten/delete_data/'.$aa['foto']); ?>" class="btn btn-danger"
							onClick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')">
							<i class="typcn icon typcn-trash"></i>
						</a>
						<button type="button" class="btn btn-primary" data-toggle="modal"
							data-bs-target="#konten<?= $no; ?> " data-bs-toggle="modal">
							<i class="typcn icon typcn-edit"></i>
						</button>
						<div class="modal fade" id="konten<?= $no; ?>">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<form action="<?= base_url('admin/konten/update') ?>" method="POST"
										enctype='multipart/form-data'>
										<input type="hidden" name="nama_foto" value="<?= $aa['foto'] ?>">
										<div class="modal-body">
											<div class="mb-3">
												<h5 class="modal-title" id="modalCenterTitle"><?= $aa['judul'] ?></h5>
												</button>
												<label for="recipient-name" class="col-form-label">Judul</label>
												<input type="text" class="form-control" id="recipient-name"
													value="<?= $aa['judul'] ?>" name="judul" />
											</div>
											<div class="mb-3">
												<label for="recipient-name" class="col-form-label">Ketegori</label>
												<select name="id_kategori" class="form-control">
													<?php foreach($kategori as $uu) { ?>
													<option
													<?php if($uu['id_kategori']==$aa['id_kategori']){ echo"selected"; } ?>
													value="<?= $uu['id_kategori'] ?>">
														<?= $uu['nama_kategori'] ?></option>
													<?php } ?>
												</select>
											</div>
											<div class="mb-3">
												<label for="recipient-name" class="col-form-label">Keterangan</label>
												<textarea name="keterangan" class="form-control"
													placeholder="Keterangan" name="keterangan" required><?= $aa['keterangan'] ?></textarea>
											</div>
											<div class="mb-3">
												<label for="recipient-name" class="col-form-label">Foto</label>
												<input type="file" name="foto" class="form-control"
													accept="image/png, image/jpeg">
											</div>
											<a type="button" class="btn btn-secondary"
												href="<?= base_url('admin/konten') ?>">Kembali</a>
											<button type="submit" class="btn btn-primary">Kirim</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</td>
					<?php $no++; } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
