<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Edit Data Mahasiswa</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Edit Mahasiswa</li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <section class="content">
    <div class="container-fluid">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Form Edit</h3>
        </div>

        <form action="" method="post">
          <div class="card-body">
            <div class="row mb-3">
              <label for="nim" class="col-sm-2 col-form-label fw-bold">NIM</label>
              <div class="col-sm-10">
                <input type="text" name="nim" class="form-control" id="nim" value="<?= $mhs['nim']; ?>">
              </div>
            </div>

            <div class="row mb-3">
              <label for="nama" class="col-sm-2 col-form-label fw-bold">Nama Lengkap</label>
              <div class="col-sm-10">
                <input type="text" name="nama" class="form-control" id="nama" value="<?= $mhs['nama']; ?>">
              </div>
            </div>

            <div class="row mb-3">
              <label for="alamat" class="col-sm-2 col-form-label fw-bold">Alamat</label>
              <div class="col-sm-10">
                <input type="text" name="alamat" class="form-control" id="alamat" value="<?= $mhs['alamat']; ?>">
              </div>
            </div>

            <div class="row mb-3">
              <label for="jk" class="col-sm-2 col-form-label fw-bold">Jenis Kelamin</label>
              <div class="col-sm-10">
                <select name="jk" class="form-select form-control">
                  <option value="laki-laki" <?= ($mhs['jk'] == 'laki-laki') ? 'selected' : ''; ?>>Laki-laki</option>
                  <option value="perempuan" <?= ($mhs['jk'] == 'perempuan') ? 'selected' : ''; ?>>Perempuan</option>
                </select>
              </div>
            </div>

            <div class="row mb-3">
              <label for="agama" class="col-sm-2 col-form-label fw-bold">Agama</label>
              <div class="col-sm-10">
                <select class="form-select form-control" name="agama" id="agama">
                  <?php
                    $list_agama = ['Islam', 'Kristen', 'Hindu', 'Budha', 'Kong Hu Cu'];
                    foreach($list_agama as $agama):
                  ?>
                    <option value="<?= $agama ?>" <?= ($mhs['agama'] == $agama) ? 'selected' : '' ?>><?= $agama ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>

            <div class="row mb-3">
              <label for="sekolah_asal" class="col-sm-2 col-form-label fw-bold">Sekolah Asal</label>
              <div class="col-sm-10">
                <input type="text" name="sekolah_asal" class="form-control" id="sekolah_asal" value="<?= $mhs['sekolah_asal']; ?>">
              </div>
            </div>

            <div class="row mb-3">
              <label for="email" class="col-sm-2 col-form-label fw-bold">Email</label>
              <div class="col-sm-10">
                <input type="email" name="email" class="form-control" id="email" value="<?= $mhs['email']; ?>">
              </div>
            </div>
          </div>

          <div class="card-footer  justify-content-between">
            <button type="submit" class="btn btn-success">Simpan Perubahan</button>
            <a href="<?= site_url('administrator/mahasiswa') ?>" class="btn btn-secondary">Kembali</a>
          </div>
        </form>
      </div>
    </div>
  </section>
</div>
