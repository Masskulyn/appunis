
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
              <li class="breadcrumb-item active">Input Data Mahasiswa</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
       <div class="card">
        <div class="card-header">
        <h3 class="card-title"> Input Mahasiswa</h3>
        
        <div class="card-body">
            <h1>
                <!-- akal akalan ajah -->
            </h1>
            
        
        
            <!-- form input mahasiswa -->
             <form action="" method="POST">
                <div class="row mb-3">
                    <label for="nim" class="col-sm-2 col-form-label fw-bold">NIM</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukkan NIM">
                        <div class="form-text text-danger"><?= form_error('nim'); ?></div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nama" class="col-sm-2 col-form-label fw-bold">Nama Lengkap</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Lengkap">
                        <div class="form-text text-danger"><?= form_error('nama'); ?></div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="alamat" class="col-sm-2 col-form-label fw-bold">Alamat Rumah</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat Rumah">
                        <div class="form-text text-danger"><?= form_error('alamat'); ?></div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="jk" class="col-sm-2 col-form-label fw-bold">Jenis Kelamin</label>
                    <div class="col-sm-10">
                      <select class="form-select col-sm-12 form-control" aria-label="Default select example" id="jk" name="jk">
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                      </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="agama" class="col-sm-2 col-form-label fw-bold">agama</label>
                    <div class="col-sm-10">
                      <select class="form-select col-sm-12 form-control" aria-label="Default select example" id="agama" name="agama">
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Hindhu">Hindu</option>
                        <option value="Budha">Budha</option>
                        <option value="Kong Hu Cu">Kong Hu Cu</option>
                      </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="sekolah_asal" class="col-sm-2 col-form-label fw-bold">Sekolah Asal</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="sekolah_asal" name="sekolah_asal" placeholder="Masukkan sekolah asal">
                        <div class="form-text text-danger"><?= form_error('sekolah_asal'); ?></div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="email" class="col-sm-2 col-form-label fw-bold">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email">
                        <div class="form-text text-danger"><?= form_error('email'); ?></div>
                    </div>
                </div>
                <div class="offset-md-2">
                            <h2></h2>
                        <button type="submit" name="simpan"  class="btn btn-outline-success">Subbmit</button>
                        <button type="reset" name="reset"  class="btn btn-outline-warning">Reset</button>
                        </div>
             </form>
        </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  