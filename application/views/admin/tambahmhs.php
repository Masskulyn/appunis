
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
        <?php if(validation_errors()) :?>
            <span class=" text-danger"><?php echo validation_errors(); ?></span>    
        <?php endif; ?>
        
            <!-- form input mahasiswa -->
             <form action="" method="POST">
                <div class="row mb-3">
                    <label for="nim" class="col-sm-2 col-form-label fw-bold">NIM</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukkan NIM">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nama" class="col-sm-2 col-form-label fw-bold">Nama Lengkap</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Lengkap">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="alamat" class="col-sm-2 col-form-label fw-bold">Alamat Rumah</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat Rumah">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="jk" class="col-sm-2 col-form-label fw-bold">Jenis Kelamin</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="jk" name="jk" placeholder="Masukkan jenis kelamin">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="agama" class="col-sm-2 col-form-label fw-bold">agama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="agama" name="agama" placeholder="Masukkan agama">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="sekolah_asal" class="col-sm-2 col-form-label fw-bold">Sekolah Asal</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="sekolah_asal" name="sekolah_asal" placeholder="Masukkan sekolah asal">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="email" class="col-sm-2 col-form-label fw-bold">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email">
                        
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
  