<div id="ngilang">
	<?= $this->session->flashdata('alert') ?>
</div>
<form action="<?= base_url('admin/konfigurasi/update') ?>" method="POST">
<h5 class="modal-title fs-5" id="ModelEdit">Konfigurasi</h5>
				<div class="modal-body">
					<div class="mb-3">
						<label for="recipient-name" class="col-form-label">Judul Website</label>
						<input type="text" class="form-control" id="recipient-name" name="judul" value="<?= $konfig->judul_website; ?>" />
					</div>
					<div class="mb-3">
						<label for="recipient-name" class="col-form-label">Profile</label>
						<!-- <textarea name="profil_website" class="form-control"></textarea> -->
						<input type="text" name="profil_website" class="form-control" placeholder="<?= $konfig->profil_website; ?>">
					</div>
                    <div class="mb-3">
						<label for="recipient-name" class="col-form-label">Facebook</label>
						<input type="text" class="form-control" id="recipient-name" name="facebook" value="<?= $konfig->facebook; ?>">
					</div>
                    <div class="mb-3">
						<label for="recipient-name" class="col-form-label">Instagram</label>
						<input type="text" class="form-control" id="recipient-name" name="instagram" value="<?= $konfig->instagram; ?>">
					</div>
                    <div class="mb-3">
						<label for="recipient-name" class="col-form-label">Email</label>
						<input type="email" class="form-control" id="recipient-name" name="email" value="<?= $konfig->email; ?>">
					</div>
                    <div class="mb-3">
						<label for="recipient-name" class="col-form-label">Alamat</label>
						<input type="text" class="form-control" id="recipient-name" name="alamat" value="<?= $konfig->alamat; ?>">
					</div>
                    <div class="mb-3">
						<label for="recipient-name" class="col-form-label">Tiktok</label>
						<input type="text" class="form-control" id="recipient-name" name="tiktok" value="<?= $konfig->tiktok; ?>">
					</div>
					<button type="submit" class="btn btn-primary">Kirim</button>
				</div>
			</form>