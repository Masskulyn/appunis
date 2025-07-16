<div class="content-wrapper">
  <section class="content-header">
    <h1>Jadwal Perkuliahan</h1>
  </section>

  <section class="content">
    <div class="card d-flex d-flex justify-content-end">
      <div class="card-header">Pencarian Jadwal <a class="btn btn-primary  " href="<?= site_url('administrator/jadwal/tambahjadwal') ?>" role="button">Tambah Jadwal</a></div>
      
      <div class="card-body">
        <form method="GET" action="<?= base_url('index.php/administrator/jadwal') ?>">
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Prodi</label>
            <div class="col-sm-8">
              <select name="prodi" class="form-control" required>
                <option value="">-- Pilih Prodi --</option>
                <?php foreach ($prodi_list as $row): ?>
                  <option value="<?= $row->prodi ?>" <?= ($selected_prodi == $row->prodi) ? 'selected' : '' ?>>
                    <?= $row->prodi ?>
                  </option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="col-sm-2">
              <button type="submit" class="btn btn-primary">Cari</button>
              
            </div>
          </div>
        </form>

        <?php if (!empty($jadwal)): ?>
          <h4 class="mt-4">Hasil Jadwal:</h4>
          <table class="table table-bordered table-striped mt-2">
            <thead>
              <tr>
                <th>Prodi</th>
                <th>Mata Kuliah</th>
                <th>Semester</th>
                <th>Hari</th>
                <th>Jam</th>
                <th>Nama Dosen</th>
                <th>Ruangan</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($jadwal as $j): ?>
                <tr>
                  <td><?= $j->prodi ?></td>
                  <td><?= $j->mk ?></td>
                  <td><?= $j->semester ?></td>
                  <td><?= $j->hari ?></td>
                  <td><?= $j->jam ?></td>
                  <td><?= $j->nama ?></td>
                  <td><?= $j->ruangan ?></td>
                  <td>
                    <a class="btn btn-primary" href="<?= site_url('administrator/jadwal/edit/'.$j->id) ?>" role="button">Edit</a>
                    <a class="btn btn-danger" href="<?= site_url('administrator/jadwal/hapus/'.$j->id) ?>" role="button" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                  </td>

                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        <?php elseif ($selected_prodi): ?>
          <div class="alert alert-warning mt-3">Jadwal tidak ditemukan untuk prodi ini.</div>
        <?php endif; ?>
      </div>
    </div>
  </section>
</div>
