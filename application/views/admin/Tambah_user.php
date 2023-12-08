
		<h1> Halaman Tambah User</h1>
				<div class="modal-body">
				<form action="<?= base_url('/user/tambah_user/') ?>">
						<div class="mb-3">
							<label for="recipient-name" class="col-form-label">Nama</label>
							<input type="text" class="form-control" id="recipient-name" placeholder="Nama" name="nama" required  >
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
					</form>
				</div>

				<a type="button" class="btn btn-secondary" href="<?= base_url('/user') ?>">Kembali</a>
				<button type="submit" class="btn btn-primary">Kirim</button>
				
			</form>
