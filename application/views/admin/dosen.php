

 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Dosen</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Dosen</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
         <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th>No</th>
            <th>NIDN</th>
            <th>Nama</th>
            <th>Pendidikan</th>
            <th>Agama</th>
            <th>Asal PT</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>Opsi</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1; foreach ($dosen as $data): ?>
            <tr>
              <td><?= $no++; ?></td>
              <td><?= $data['id']; ?></td>
              <td><?= $data['nama']; ?></td>
              <td><?= $data['pendidikan']; ?></td>
              <td><?= $data['agama']; ?></td>
              <td><?= $data['asalpt']; ?></td>
              <td><?= $data['email']; ?></td>
              <td><?= $data['alamat']; ?></td>
              <td>
                <a class="btn btn-primary" href="#" role="button">Edit</a>
                <a class="btn btn-danger" href="#" role="button">Hapus</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  