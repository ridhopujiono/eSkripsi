<section class="section">
	<div class="card">
		<div class="card-body">

			<?php if ($this->session->flashdata('error')) : ?>
				<div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
					<?php echo $this->session->flashdata('error'); ?>
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
			<?php endif; ?>

			<?php
			$this->load->model('Propasca_model');
			$cek = $this->Propasca_model->cek($judul->id);
			?>

			<?php if ($cek == 0) { ?>

				<?php if ($judul->status_ujian_proposal == 'Lulus') { ?>

					<form method="post" action="<?php echo base_url('post_proposal/upload'); ?>" enctype="multipart/form-data">

						<div class="alert alert-warning alert-dismissible fade show mt-3" role="alert">
							Pastikan file yang diunggah benar dan disertai dengan lembar pengesahan.
						</div>

						<div class="row mb-3 mt-3">
							<label class="col-sm-2 col-form-label">Judul</label>
							<div class="col-sm-10 mt-2">
								<?= $judul->judul ?>
							</div>
						</div>

						<input type="hidden" name="title_id" id="title_id" value="<?= $judul->id ?>">

						<div class="row mb-3 mt-3">
							<label class="col-sm-2 col-form-label">Naskah Proposal</label>
							<div class="col-sm-10">
								<input type="file" class="form-control" name="proposal_final" id="proposal_final" placeholder="Pilih File" required>
							</div>
							<div class="text-sm text-muted">* .pdf dengan ukuran maksimal 10MB</div>
						</div>

						<div class="col-sm-10" align="center">
							<button type="submit" class="btn btn-primary">Kirim</button>
						</div>

					</form>

				<?php } else if ($judul->status_ujian_proposal == 'Lulus ubah judul') { ?>

					<form method="post" action="<?php echo base_url('post_proposal/upload_new'); ?>" enctype="multipart/form-data">

						<div class="alert alert-warning alert-dismissible fade show mt-3" role="alert">
							Pastikan file yang diunggah benar dan disertai dengan lembar pengesahan, serta jangan lupa untuk memasukkan judul baru.
						</div>

						<div class="row mb-3 mt-3">
							<label class="col-sm-2 col-form-label">Judul Lama</label>
							<div class="col-sm-10 mt-2">
								<input type="text" class="form-control" value="<?= $judul->judul ?>" disabled>
							</div>
						</div>

						<div class="row mb-3 mt-3">
							<label class="col-sm-2 col-form-label">Judul Baru</label>
							<div class="col-sm-10 mt-2">
								<input type="text" class="form-control" id="new_title" name="new_title" placeholder="Masukkan Judul Baru" required>
							</div>
						</div>

						<input type="hidden" name="title_id" id="title_id" value="<?= $judul->id ?>">

						<div class="row mb-3 mt-3">
							<label class="col-sm-2 col-form-label">Naskah Proposal</label>
							<div class="col-sm-10">
								<input type="file" class="form-control" name="proposal_final" id="proposal_final" placeholder="Pilih File" required>
							</div>
							<div class="text-sm text-muted">* .pdf dengan ukuran maksimal 10MB</div>
						</div>

						<div class="col-sm-10" align="center">
							<button type="submit" class="btn btn-primary">Kirim</button>
						</div>

					</form>

				<?php } else { ?>

					<div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
						Anda belum lulus ujian skripsi
					</div>

				<?php } ?>

			<?php } else { ?>

				<div class="alert alert-info alert-dismissible fade show mt-3" role="alert">
					Tahap pasca ujian proposal telah selesai.
				</div>

			<?php } ?>

		</div>
	</div>
</section>