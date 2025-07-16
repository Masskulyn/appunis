<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Data Fakultas</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Input Data Fakultas</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Input Fakultas</h3>
        </div>

        <div class="card-body">
          <form action="" method="POST">
            <!-- ID -->
            <div class="row mb-3">
              <label for="id" class="col-sm-2 col-form-label fw-bold">ID Fakultas</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="id" name="id" placeholder="Masukkan ID Fakultas" value="<?= set_value('id'); ?>">
                <div class="form-text text-danger"><?= form_error('id'); ?></div>
              </div>
            </div>

            <!-- Fakultas -->
            <div class="row mb-3">
              <label for="fakultas" class="col-sm-2 col-form-label fw-bold">Fakultas</label>
              <div class="col-sm-10">
                <select class="form-select form-control" id="fakultas" name="fakultas">
                  <option value="">-- Pilih Fakultas --</option>
                  <option value="Fakultas Agama Islam" <?= set_select('fakultas', 'Fakultas Agama Islam'); ?>>Fakultas Agama Islam</option>
                  <option value="Fakultas Ilmu Sosial dan Ilmu Politik" <?= set_select('fakultas', 'Fakultas Ilmu Sosial dan Ilmu Politik'); ?>>Fakultas Ilmu Sosial dan Ilmu Politik</option>
                  <option value="Fakultas Teknik" <?= set_select('fakultas', 'Fakultas Teknik'); ?>>Fakultas Teknik</option>
                  <option value="Fakultas Ekonomi" <?= set_select('fakultas', 'Fakultas Ekonomi'); ?>>Fakultas Ekonomi</option>
                  <option value="Fakultas Keguruan dan Ilmu Pendidikan" <?= set_select('fakultas', 'Fakultas Keguruan dan Ilmu Pendidikan'); ?>>Fakultas Keguruan dan Ilmu Pendidikan</option>
                  <option value="Fakultas Hukum" <?= set_select('fakultas', 'Fakultas Hukum'); ?>>Fakultas Hukum</option>
                </select>
                <div class="form-text text-danger"><?= form_error('fakultas'); ?></div>
              </div>
            </div>

            <!-- Prodi -->
            <div class="row mb-3">
              <label for="prodi" class="col-sm-2 col-form-label fw-bold">Prodi</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="prodi" name="prodi" placeholder="Masukkan Nama Prodi" value="<?= set_value('prodi'); ?>">
                <div class="form-text text-danger"><?= form_error('prodi'); ?></div>
              </div>
            </div>

            <!-- Tombol -->
            <div class="offset-sm-2">
              <button type="submit" name="simpan" class="btn btn-outline-success">Submit</button>
              <button type="reset" name="reset" class="btn btn-outline-warning">Reset</button>
            </div>
          </form>
        </div>

      </div>
    </div>
  </section>
  <!-- /.content -->
</div>
