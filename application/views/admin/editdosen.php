<div class="content-wrapper">
  <!-- Content Header -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Edit Data Dosen</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Edit Dosen</li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <!-- Main Content -->
  <section class="content">
    <div class="container-fluid">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Form Edit Dosen</h3>
        </div>

        <form action="" method="post">
          <div class="card-body">
            <div class="row mb-3">
              <label for="nidn" class="col-sm-2 col-form-label fw-bold">NIDN</label>
              <div class="col-sm-10">
                <input type="text" name="nidn" class="form-control" id="nidn" value="<?= $dosen['nidn']; ?>">
              </div>
            </div>

            <div class="row mb-3">
              <label for="nama" class="col-sm-2 col-form-label fw-bold">Nama Lengkap</label>
              <div class="col-sm-10">
                <input type="text" name="nama" class="form-control" id="nama" value="<?= $dosen['nama']; ?>">
              </div>
            </div>

            <div class="row mb-3">
              <label for="pendidikan" class="col-sm-2 col-form-label fw-bold">Pendidikan</label>
              <div class="col-sm-10">
                <select class="form-select form-control" id="pendidikan" name="pendidikan">
                  <?php 
                    $options = ['SMA/SMK(SEDERAJAT)', 'D1', 'D2', 'D3', 'D4', 'S1', 'S2', 'S3'];
                    foreach($options as $opt): 
                  ?>
                    <option value="<?= $opt ?>" <?= ($dosen['pendidikan'] == $opt) ? 'selected' : '' ?>><?= $opt ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>

            <div class="row mb-3">
              <label for="agama" class="col-sm-2 col-form-label fw-bold">Agama</label>
              <div class="col-sm-10">
                <select class="form-select form-control" id="agama" name="agama">
                  <?php 
                    $agamanya = ['Islam', 'Kristen', 'Hindu', 'Budha', 'Kong Hu Cu'];
                    foreach($agamanya as $a): 
                  ?>
                    <option value="<?= $a ?>" <?= ($dosen['agama'] == $a) ? 'selected' : '' ?>><?= $a ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>

            <div class="row mb-3">
              <label for="asalpt" class="col-sm-2 col-form-label fw-bold">Asal PT</label>
              <div class="col-sm-10">
                <input type="text" name="asalpt" class="form-control" id="asalpt" value="<?= $dosen['asalpt']; ?>">
              </div>
            </div>

            <div class="row mb-3">
              <label for="email" class="col-sm-2 col-form-label fw-bold">Email</label>
              <div class="col-sm-10">
                <input type="email" name="email" class="form-control" id="email" value="<?= $dosen['email']; ?>">
              </div>
            </div>

            <div class="row mb-3">
              <label for="alamat" class="col-sm-2 col-form-label fw-bold">Alamat</label>
              <div class="col-sm-10">
                <input type="text" name="alamat" class="form-control" id="alamat" value="<?= $dosen['alamat']; ?>">
              </div>
            </div>
          </div>

          <div class="card-footer">
            <button type="submit" class="btn btn-success">Simpan Perubahan</button>
            <a href="<?= site_url('administrator/dosen') ?>" class="btn btn-secondary">Kembali</a>
          </div>
        </form>
      </div>
    </div>
  </section>
</div>
