<div id="ngilang">
	<?= $this->session->flashdata('alert') ?>
</div>
<form action="<?= base_url('admin/carousel/simpan') ?>" method="POST" enctype='multipart/form-data' class="mb-4">
	<h4><strong>FILE INPUT</strong></h4>
	<hr>
	<div class="mb-3">
		<label for="recipient-name" class="col-form-label">Judul</label>
		<input type="text" class="form-control" id="recipient-name" placeholder="Judul foto" name="judul" required>
	</div>
	<div class="form-group">
		<label for="formFile" class="form-label">Pilih Foto dengan ukuran (1:3)</label>
		<input class="form-control" type="file" name="foto">
	</div>

	<button type="submit" class="btn btn-primary mr-2">Simpan</button>

</form>

<?php foreach ($carousel as $aa){ ?>
<div class="card" style="width: 80vw;">
	<img src="<?= base_url('assets/upload/carousel/'.$aa['foto'])?>" class="card-img-top">
	<div class="card-body">
		<h5 class="card-title"><?= $aa['judul'] ?></h5>
		<a href="<?= base_url('admin/carousel/delete_data/'.$aa['foto']); ?>" class="btn btn-danger"
			onClick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')">
			<i class="typcn icon typcn-trash"></i>
		</a>
	</div>
</div>
<?php } ?>
