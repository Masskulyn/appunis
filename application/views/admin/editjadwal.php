<div class="content-wrapper">
  <section class="content-header">
    <h1>Edit Jadwal Perkuliahan</h1>
  </section>

  <section class="content">
    <div class="card">
      <div class="card-body">
        <form method="post" >
          <div class="form-group">
            <label for="prodi">Prodi</label>
            <select name="prodi" id="prodi" class="form-control" required>
                <option value="">-- Pilih Prodi --</option>
                <?php foreach ($prodi_list as $prodi): ?>
                    <option value="<?= $prodi->prodi ?>" <?= ($prodi->prodi == $jadwal->prodi) ? 'selected' : '' ?>>
                    <?= $prodi->prodi ?>
                    </option>
                <?php endforeach; ?>
            </select>

          </div>

          <div class="form-group">
            <label for="mk">Mata Kuliah</label>
            <input type="text" name="mk" id="mk" value="<?= $jadwal->mk ?>" class="form-control" required>
          </div>

          <div class="form-group">
            <label for="semester">Semester</label>
            <input type="number" name="semester" id="semester" value="<?= $jadwal->semester ?>" class="form-control" required>
          </div>

          <div class="form-group">
            <label for="hari">Hari</label>
            <input type="text" name="hari" id="hari" value="<?= $jadwal->hari ?>" class="form-control" required>
          </div>

          <div class="form-group">
            <label for="jam">Jam</label>
            <input type="text" name="jam" id="jam" value="<?= $jadwal->jam ?>" class="form-control" required>
          </div>

          <div class="form-group">
            <label for="nama">Nama Dosen</label>
            <select name="nama" id="nama" class="form-control" required>
              <option value="">-- Pilih Dosen --</option>
              <?php foreach ($dosen_list as $dosen): ?>
                    <option value="<?= $dosen->nama ?>" <?= ($dosen->nama == $jadwal->nama) ? 'selected' : '' ?>>
                    <?= $dosen->nama ?>
                    </option>
                <?php endforeach; ?>
            </select>
          </div>

          <div class="form-group">
            <label for="ruangan">Ruangan</label>
            <input type="text" name="ruangan" id="ruangan" value="<?= $jadwal->ruangan ?>" class="form-control" required>
          </div>

          <button type="submit" class="btn btn-success">Simpan</button>
          <a href="<?= base_url('index.php/administrator/jadwal') ?>" class="btn btn-secondary">Kembali</a>
        </form>
      </div>
    </div>
  </section>
</div>
