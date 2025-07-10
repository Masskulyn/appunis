  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Mahasiswa</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard Data Mahasiswa</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- alert berhasil atau tidak nya disimpan -->
      <?php if ($this->session->flashdata('success')): ?>
          <div class="alert alert-success alert-dismissible fade show" role="alert">
              <?= $this->session->flashdata('success'); ?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
      <?php else : $this->session->unset_userdata('success'); ?>
      <?php endif; ?>
      <!-- end alert -->

    <section class="content">
      <div class="container-fluid">
       <div class="card">
        <div class="card-header">
        <h3 class="card-title"> Tabel Mahasiswa</h3>
        <div class="d-flex justify-content-end"><a class="btn btn-primary" href="<?= site_url('administrator/mahasiswa/tambahmhs') ?>" role="button">Tambah Data</a></div>
        </div>
        <div class="card-body">
            <table class="table table-striped table-hover">
              <thead>
                  <tr>
                      <th>ID</th>
                      <th>NIM</th>
                      <th>Nama</th>
                      <th>Alamat</th>
                      <th>Jenis Kelamin</th>
                      <th>Agama</th>
                      <th>Asal Sekolah</th>
                      <th>Email</th>
                      <th>Opsi</th>
                  </tr>
              </thead>
              <tbody>
                  <?php $no = 1; ?>
                  <?php foreach ($mhs as $data): ?>
                      <tr>
                          <td><?= $no++; ?></td>
                          <td><?= $data['nim']; ?></td>
                          <td><?= $data['nama']; ?></td>
                          <td><?= $data['alamat']; ?></td>
                          <td><?= $data['jk']; ?></td>
                          <td><?= $data['agama']; ?></td>
                          <td><?= $data['sekolah_asal']; ?></td>
                          <td><?= $data['email']; ?></td>
                          <td>
                          <a class="btn btn-primary" href="<?= site_url('administrator/mahasiswa/edit/'.$data['id']) ?>" role="button">Edit</a>
                          <a class="btn btn-danger" href="<?= site_url('administrator/mahasiswa/hapus/'.$data['id']) ?>" role="button" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                        </td>
                      </tr>
                  <?php endforeach; ?>
              </tbody>
          </table>
        </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  