<section class="section">
	<div class="card">
		<div class="card-body pt-3">

			<?php if (empty($ujian)) { ?>
				<p class="mt-3">Maaf, Belum Ada Ujian Yang Dijadwalkan.</p>
			<?php } else { ?>

				<table class="table datatable">
					<thead>
						<tr>
							<th scope="col">No</th>
							<th scope="col">Judul</th>
							<th scope="col">Mahasiswa</th>
							<th scope="col">Dosen Pembimbing 1</th>
							<th scope="col">Dosen Pembimbing 2</th>
							<th scope="col">Dosen Penguji 1</th>
							<th scope="col">Dosen Penguji 2</th>
							<th scope="col">Tanggal ujian</th>
							<th scope="col">Ruang</th>
							<th scope="col">Jam</th>
							<th scope="col">Status Ujian</th>
							<th scope="col">Nilai Akhir</th>
							<th scope="col">Unduh Nilai</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1;
						foreach ($ujian as $ujian) { ?>
							<tr>
								<th scope="row"><?= $no; ?></th>
								<td><?php echo $ujian->judul; ?></td>
								<td>
									<?php
									$mhs = $this->db->where('id', $ujian->mahasiswa)->get('users')->row();
									echo $mhs->nama;
									?>
								</td>
								<td>
									<?php
									$dospem1 = $this->db->where('id', $ujian->dospem_1_id)->get('users')->row();
									echo $dospem1->nama;
									?>
								</td>
								<td>
									<?php
									$dospem2 = $this->db->where('id', $ujian->dospem_2_id)->get('users')->row();
									echo $dospem2->nama;
									?>
								</td>
								<td>
									<?php
									$dosuji1 = $this->db->where('id', $ujian->dosuji_1_id)->get('users')->row();
									echo $dosuji1->nama;
									?>
								</td>
								<td>
									<?php
									$dosuji2 = $this->db->where('id', $ujian->dosuji_2_id)->get('users')->row();
									echo $dosuji2->nama;
									?>
								</td>
								<td><?php echo format_tgl($ujian->tanggal); ?></td>
								<td>
									<?php
									$room = $this->db->where('id', $ujian->room_id)->get('rooms')->row();
									echo $room->nama;
									?>
								</td>
								<td><?php echo $ujian->jam; ?></td>
								<td>
									<!-- Revisi 8-16 -->
									<span class="badge rounded-pill <?php echo $ujian->status_ujian_proposal == 'Lulus' ? 'bg-success' : ($ujian->status_ujian_proposal == 'Lulus ubah judul' ? 'bg-warning' : ($ujian->status_ujian_proposal == 'Tidak Lulus' ? 'bg-danger' : ($ujian->status_ujian_proposal == 'Terdaftar' ? 'bg-secondary' : 'bg-danger'))); ?> status-badge" data-id="<?php echo $ujian->pro_id; ?>">
										<?php echo $ujian->status_ujian_proposal; ?>
									</span>
								</td>
								<td><?php echo $ujian->nilai; ?></td>
								<td>
									<a type="submit" class="btn btn-primary" href="<?= base_url() ?>score_proposal/view_nilai/<?= $ujian->pro_id ?>">Lihat</a>
									<a type="submit" class="btn btn-primary" href="<?= base_url() ?>score_proposal/download_nilai/<?= $ujian->pro_id ?>">Unduh</a>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>

			<?php } ?>
		</div>
	</div>
</section>