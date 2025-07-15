
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
              <li class="breadcrumb-item active">Input Data Dosen</li>
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
        <h3 class="card-title"> Input Dosen</h3>
        
        <div class="card-body">
            <h1>
                <!-- akal akalan ajah -->
            </h1>
        
        
            <!-- form input mahasiswa -->
             <form action="" method="POST">
                <div class="row mb-3">
                    <label for="nidn" class="col-sm-2 col-form-label fw-bold">NIDN</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nidn" name="nidn" placeholder="Masukkan NIDN">
                        <div class="form-text text-danger"><?= form_error('nidn'); ?></div>
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
                    <label for="pendidikan" class="col-sm-2 col-form-label fw-bold">Pendidikan</label>
                    <div class="col-sm-10">
                        <select class="form-select col-sm-12 form-control" aria-label="Default select example" id="pendidikan" name="pendidikan">
                        <option value="SMA/SMK(SEDERAJAT)">SMA/SMK (SEDERAJAT)</option>
                        <option value="D1">D1</option>
                        <option value="D2">D2</option>
                        <option value="D3">D3</option>
                        <option value="D4">D4</option>
                        <option value="S1">S1</option>
                        <option value="S2">S2</option>
                        <option value="S3">S3</option>
                      </select> 
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="agama" class="col-sm-2 col-form-label fw-bold">Agama</label>
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
                    <label for="asalpt" class="col-sm-2 col-form-label fw-bold">Asal PT</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="asalpt" name="asalpt" placeholder="Masukkan Asal Perguruan Tinggi">
                        <div class="form-text text-danger"><?= form_error('asalpt'); ?></div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="email" class="col-sm-2 col-form-label fw-bold">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email">
                        <div class="form-text text-danger"><?= form_error('email'); ?></div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="alamat" class="col-sm-2 col-form-label fw-bold">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat">
                        <div class="form-text text-danger"><?= form_error('alamat'); ?></div>
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
  