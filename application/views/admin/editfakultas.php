<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Edit Data Fakultas</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Edit Fakultas</li>
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
              <label for="id" class="col-sm-2 col-form-label fw-bold">ID Fakultas</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="id" name="id" placeholder="Masukkan ID Fakultas" value="<?= $fakultas['id']; ?>">
                <div class="form-text text-danger"><?= form_error('id'); ?></div>
              </div>
            </div>

            <!-- Fakultas -->
            <div class="row mb-3">
              <label for="fakultas" class="col-sm-2 col-form-label fw-bold">Fakultas</label>
              <div class="col-sm-10">
                <select class="form-select form-control" id="fakultas" name="fakultas">
                  <?php 
                    $options = ['Fakultas Agama Islam', 'Fakultas Ilmu Sosial dan Ilmu Politik', 'Fakultas Teknik', 'Fakultas Ekonomi ', 'Fakultas Keguruan dan Ilmu Pendidikan', 'Fakultas Hukum'];
                    foreach($options as $opt): 
                  ?>
                    <option value="<?= $opt ?>" <?= ($fakultas['fakultas'] == $opt) ? 'selected' : '' ?>><?= $opt ?></option>
                  <?php endforeach; ?>
                </select>
                <div class="form-text text-danger"><?= form_error('fakultas'); ?></div>
              </div>
            </div>

            <!-- Prodi -->
            <div class="row mb-3">
              <label for="prodi" class="col-sm-2 col-form-label fw-bold">Prodi</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="prodi" name="prodi" placeholder="Masukkan Nama Prodi" value="<?= $fakultas['prodi']; ?>">
                <div class="form-text text-danger"><?= form_error('prodi'); ?></div>
              </div>
            </div>

          <div class="card-footer  justify-content-between">
            <button type="submit" class="btn btn-success">Simpan Perubahan</button>
            <a href="<?= site_url('administrator/fakultas') ?>" class="btn btn-secondary">Kembali</a>
          </div>
        </form>
      </div>
    </div>
  </section>
</div>
