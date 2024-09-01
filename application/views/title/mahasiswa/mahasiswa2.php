<section class="section">
	<div class="card">
		<div class="card-body">

			<?php if ($this->session->flashdata('error')) : ?>
				<div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
					<?php echo $this->session->flashdata('error'); ?>
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
			<?php endif; ?>

			<form method="post" action="<?php echo base_url('title/addTitle'); ?>">

				<div class="row mb-3 mt-3">
					<label for="inputText" class="col-sm-2 col-form-label">Judul</label>
					<div class="col-sm-10">
						<textarea class="form-control" name="judul" id="judul" style="height: 100px" placeholder="Masukkan Judul"></textarea>
					</div>
				</div>

				<div class="row mb-3">
					<label class="col-sm-2 col-form-label">Bidang Penelitian</label>
					<div class="col-sm-10">
						<select class="form-select" name="bidang_id" id="bidang_id" aria-label="Default select example">
							<option selected="">Pilih Bidang</option>
							<?php foreach ($research_area as $area) : ?>
								<option value="<?= $area['id']; ?>" <?= set_select('bidang_id', $area['id']); ?>><?= $area['nama']; ?></option>
							<?php endforeach; ?>
						</select>
					</div>
				</div>

				<div class="row mb-3">
					<label class="col-sm-2 col-form-label">Pembimbing 1</label>
					<div class="col-sm-10">
						<select class="form-select" name="dospem_1_id" id="dospem_1_id" aria-label="Default select example">
							<option selected="">Pilih Dosen</option>
							<?php foreach ($dosen as $dosen) : ?>
								<option value="<?= $dosen['id_dosen']; ?>" <?= set_select('dospem_1_id', $dosen['id_dosen']); ?>><?= $dosen['nama_dosen']; ?> (<?= $dosen['jumlah_mahasiswa']; ?>)</option>
							<?php endforeach; ?>
						</select>
					</div>
				</div>

				<div class="row mb-3">
					<label class="col-sm-2 col-form-label">Pembimbing 2</label>
					<div class="col-sm-10">
						<select class="form-select" name="dospem_2_id" id="dospem_2_id" aria-label="Default select example">
							<option selected="">Pilih Dosen</option>
							<?php foreach ($dosen2 as $dosen2) : ?>
								<option value="<?= $dosen2['id_dosen']; ?>" <?= set_select('dospem_2_id', $dosen2['id_dosen']); ?>><?= $dosen2['nama_dosen']; ?></option>
							<?php endforeach; ?>
						</select>
					</div>
				</div>

				<div class="col-sm-10" align="center">
					<button type="submit" class="btn btn-primary">Ajukan</button>
				</div>

			</form>
		</div>
	</div>

	<div id="plagiarismResult" class="mt-3"></div> <!-- Container for plagiarism results -->
</section>

<script>
	document.getElementById('judul').addEventListener('input', function() {
		const judul = this.value;

		if (judul.split(' ').length > 1) { // Check if more than one word is typed
			const formData = new FormData();
			formData.append('new_title', judul);

			fetch('<?php echo base_url("title_plagiarism/index"); ?>', {
					method: 'POST',
					body: formData
				})
				.then(response => response.json())
				.then(data => {
					const plagiarismResult = document.getElementById('plagiarismResult');
					plagiarismResult.innerHTML = ''; // Clear previous results

					if (data.length > 0) {
						data.forEach(result => {
							let colorClass = 'text-success'; // Default color for low similarity

							if (result.similarity > 80) {
								colorClass = 'text-danger'; // High similarity
							} else if (result.similarity > 50) {
								colorClass = 'text-warning'; // Medium similarity
							}
							plagiarismResult.innerHTML += `
                            <div class="card mt-3">
                                <div class="card-body p-0 p-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h5>${result.approved_title}</h5>
                                            ${result.nama_mahasiswa}
                                        </div>
                                        <h3 class="${colorClass}">${result.similarity}%</h3>
                                    </div>
                                </div>
                            </div>
                        `;
						});
					} else {
						plagiarismResult.innerHTML = `
                            <div class="card mt-3">
                                <div class="card-body p-0 p-3">
                                      <h5 class="text-center text-success"> Tidak ada plagiasi pada judul anda </h5>
                                </div>
                            </div>
                        `;
					}
				})
				.catch(error => console.error('Error:', error));
		} else {
			document.getElementById('plagiarismResult').innerHTML = '';
		}
	});
</script>
