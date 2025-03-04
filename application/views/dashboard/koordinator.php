<!DOCTYPE html>
<html>

<head>
  <title>Dashboard Koordinator Skripsi</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <div class="card-body">
    <h6>
      <marquee behavior="scroll" direction="left">
        <?php echo $total_count; ?></marquee>
    </h6>
  </div>
  <section class="section dashboard">
    <div class="row">

      <!-- Left side columns -->
      <div class="col-lg-8">
        <div class="row">


          <u>
            <h5>Koordinator</h5>
          </u>

          <!-- judul Card -->
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card sales-card">
              <div class="card-body">
                <h5 class="card-title"><a class="card-title" href="<?= base_url() ?>title/"> Judul baru</a></h5>
                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="ri-book-2-line"></i>
                  </div>
                  <div class="ps-3">
                    <span class="text-success small pt-1 fw-bold"><?php echo $total_judul_baru; ?></span>
                    <span class="text-muted small pt-2 ps-1">judul</span>
                  </div>
                  <!-- <div class="ps-3">
                    <span class="text-muted small pt-2 ps-1">Disetujui :</span>
                    <span class="text-success small pt-1 fw-bold">12</span>
                  </div> -->
                </div>
              </div>
            </div>
          </div><!-- End Card -->

          <!-- judul Card -->
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card revenue-card">
              <div class="card-body">
                <h5 class="card-title">Jadwal Ujian</h5>
                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="ri-file-text-line"></i>
                  </div>
                  <div class="ps-3">
                    <span class="text-success small pt-1 fw-bold"><?php echo $jumlah_jadwal; ?></span>
                    <span class="text-muted small pt-2 ps-1"> jadwal ujian proposal</span>
                    <div>
                      <span class="text-success small pt-1 fw-bold"><?php echo $jumlah_jadwal_skp; ?></span>
                      <span class="text-muted small pt-2 ps-1"> jadwal ujian skripsi</span>
                    </div>
                  </div>
                  <!-- <div class="ps-3">
                    <span class="text-success small pt-1 fw-bold"><?php echo $jumlah_jadwal_today; ?>,</span>
                    <span class="text-muted small pt-2 ps-1">Jadwal Hari Ini</span>
                    <div>
                    <span class="text-success small pt-1 fw-bold"><?php echo $jumlah_jadwal_today_skp; ?>,</span>
                    <span class="text-muted small pt-2 ps-1">Jadwal Hari Ini</span>
                    </div>
                  </div> -->
                </div>
              </div>
            </div>
          </div><!-- End Card -->

          <u>
            <h5>Dosen Pembimbing</h5>
          </u>

          <!-- judul1 Card -->
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card sales-card">

              <div class="card-body">
                <h5 class="card-title"><a class="card-title" href="<?= base_url() ?>title/">Judul Perlu Disetujui</a></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="ri-user-follow-line"></i>
                  </div>
                  <div class="ps-3">
                    <span class="text-success small pt-1 fw-bold" class=""><?= $judul; ?> </span><span class="text-muted small">judul</span>

                  </div>
                </div>
              </div>

            </div>
          </div><!-- End Card -->

          <!-- jlh mhs Card -->
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card revenue-card">

              <div class="card-body">
                <h5 class="card-title"><a class="card-title" href="<?= base_url() ?>Progress_proposal/">Mahasiswa yang Dibimbing</a></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-people"></i>
                  </div>
                  <div class="ps-3">
                    <span class="text-success small pt-1 fw-bold" class=""><?= $dibimbing; ?> </span><span class="text-muted small">mahasiswa</span>

                  </div>
                </div>
              </div>

            </div>
          </div><!-- End Card -->

          <!-- jadwal Card -->
          <div class="col-xxl-4 col-xl-12">
            <div class="card info-card customers-card">
              <div class="card-body">
                <!-- <h5 class="card-title">Summary <span>| This Year</span></h5> -->
                <div class="row">
                  <!-- Left Customer Section -->
                  <div class="col-6">
                    <h5 class="card-title"><a class="card-title" href="<?= base_url() ?>Registration_Proposal/">Daftar Ujian Proposal</a></h5>
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="ri-calendar-todo-line"></i>
                      </div>
                      <div class="ps-3">
                        <span class="text-success small pt-1 fw-bold" class=""><?php echo $jumlah_belum_disetujui; ?></span><span class="text-muted small"> Perlu Direspon</span>
                      </div>
                    </div>
                  </div>
                  <!-- Right Seller Section -->
                  <div class="col-6">
                    <h5 class="card-title"><a class="card-title" href="<?= base_url() ?>Registration_Skripsi/">Daftar Ujian Skripsi</a></h5>
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="ri-calendar-todo-line"></i>
                      </div>
                      <div class="ps-3">
                        <span class="text-success small pt-1 fw-bold" class=""><?= $jumlahskp_belum_disetujui; ?> </span><span class="text-muted small"> Perlu Direspon</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card -->

        </div>
      </div><!-- End Left side columns -->

      <!-- Right side columns -->
      <div class="col-lg-4">

        <!-- Pembimbing dan mahasiswa nya -->
        <div class="col-12 pt-4">
          <div class="card recent-sales overflow-auto pt-2">
            <div class="card-body">
              <h5 class="card-title">Dosen dan Jumlah Mahasiswa Bimbingan</h5>
              <div class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Nama Dosen</th>
                      <th>DosPem1</th>
                      <th>DosPem2</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($dosen_mahasiswa as $data) : ?>
                      <tr>
                        <td><?= $data['nama_dosen']; ?></td>
                        <td><?= $data['pembimbing_1']; ?></td>
                        <td><?= $data['pembimbing_2']; ?></td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div><!-- End -->


      </div><!-- End Right side columns -->

    </div>
  </section>

  <!-- Card Pengumuman -->
  <section class="section">
    <div class="card">
      <div class="card-body pt-2">

        <h5 class="card-title">Pengumuman</h5>

        <table class="table datatable">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col" class="col-md-4">Penulis</th>
              <th scope="col">Pengumuman</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1;
            foreach ($pengumuman as $pengumuman) { ?>
              <tr>
                <td>
                  <i class="ri-megaphone-fill"></>
                </td>
                <td class="col-md-4">
                  <?php
                  $creator = $this->db->where('id', $pengumuman->created_by)->get('users')->row();
                  echo $creator->nama;
                  ?>
                </td>
                <td>
                  <b><?= $pengumuman->title; ?></b><br />
                  <?= $pengumuman->content; ?>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>