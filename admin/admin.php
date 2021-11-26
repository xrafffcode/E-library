<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <?php 
        session_start();

        // cek apakah yang mengakses halaman ini sudah login
        if($_SESSION['level']==""){
            header("location:../index.php?pesan=gagal");
        }

    ?>

   

  <!-- Preloader -->
  


  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>


      <!-- Notifications Dropdown Menu -->
    
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
        <a href="#" class="brand-link nav-link">
      <img src="../dist/img/mylogo.svg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light ">Admin Library</span>
    </a>


    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block nav-link"><?php echo $_SESSION['username']; ?></a>
          <a href="../proses/logout.php" style="text-decoration: none;" class="d-block nav-link" >
              <p>Logout</p>
            </a>
        </div>
      </div>



      <!-- Sidebar Menu -->
      <nav class="mt-2">
         <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-th-large"></i>
              <p>
                Dashboard
              </p>
            </a>
            <ul class="nav nav-treeview">
            </ul>
          </li>
          <li class="nav-item">
            <a href="akun.php" class="nav-link">
              <i class="nav-icon fas fa-user-alt"></i>
              <p>Akun</p>
            </a>
          </li> 
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

                <p>New Orders</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>
                     <?php
                            include '../proses/koneksi.php';
                             $result=mysqli_query($conn,"select count(*) as total  from buku;");
                             $data=mysqli_fetch_array($result);
                            echo $data['total'];
                    ?>
                </h3>

                <p>Total Produk</p>
              </div>
              <div class="icon">
                <i class="fas fa-shopping-bag"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>
                        <?php
                            include '../proses/koneksi.php';
                             $result=mysqli_query($conn,"select count(*) as total  from user;");
                             $data=mysqli_fetch_array($result);
                            echo $data['total'];
                        ?>
                 </h3>

                <p>Total User</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                  
                <h3>
                  <?php
                    $filename = '../user/counter.txt';                   
                    echo file_get_contents($filename);	
                    ?>
                </h3>

                <p>Pengunjung</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
        <?php 
        if(isset($_GET['pesan'])){
          if($_GET['pesan']=="ubahproduk_sukses"){
            echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
              <strong>Ubah Buku Sukses !</strong>
              <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
              </div>";
          }
        }
        ?>
        <?php 
        if(isset($_GET['pesan'])){
          if($_GET['pesan']=="sukses_hapus"){
            echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
              <strong>Hapus Buku Sukses !</strong>
              <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
              </div>";
          }
        }
        ?>
        
           <h1 class="m-0">Data Buku</h1>
          <table class="table table-bordered mt-4">
                            <thead class="bg-blue">
                                <tr>
                                    <th>Id Buku</th>
                                    <th>Judul Buku</th>
                                    <th>Harga Buku</th>
                                    <th>Cover Buku</th>
                                    <th>Genre</th>                               
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                            <?php
                            

                            
                                include '../proses/koneksi.php';
                                $employee = mysqli_query($conn,"select * from buku");
                                while($row = mysqli_fetch_array($employee))
                                {
                                    echo "<tr>
                                     <td>".$row['id_buku']."</td>
                                     <td>".$row['judul_buku']."</td>
                                     <td>".$row['harga_buku']."</td>
                                    <td> <img src='../images/".$row['cover_buku']."' class='card-img-top' style='width: 80px;'></td>
                                     <td>".$row['genre']."</td>
                                    <td> <a href='ubah_buku.php?id_buku= $row[id_buku]' class='btn btn-warning btn-sm'>Ubah</a>&nbsp&nbsp&nbsp<a href='../proses/hapus_buku.php?id_buku=$row[id_buku]' class='btn btn-warning btn-sm'>Hapus</a></td>

                                </tr>";
                                }
                            ?>
                            </tbody>
                           

                            <script>
                            $(document).ready(function(){
                                $('#tabel-data').DataTable();
                            });
                            </script>

                        </table>
                         <button type="button" class="btn btn-primary ml-auto" data-bs-toggle="modal" data-bs-target="#exampleModal">
                          Tambah Buku
                         </button>
                          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Produk</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <section class="content">
                                  <div class="container-fluid">
                                    <div class="row">
                                      <form action="../proses/simpan_buku.php" method="POST" enctype="multipart/form-data">               
                                              <div class="mb-3">
                                                  <label class="form-label">Judul Buku</label>
                                                  <input type="text" name="judul_buku" class="form-control">
                                              </div>
                                              <div class="mb-3">
                                                  <label class="form-label">Harga Buku</label>
                                                  <input type="text" name="harga_buku" class="form-control"></label>
                                              </div>
                                              <div class="mb-3">
                                                  <label class="form-label">Cover Buku</label>
                                                  <input type="file" name="cover_buku" value="" class="form-control"></label>
                                              </div>
                                               <div class="mb-3">
                                                  <label class="form-label">Sinopsis</label>
                                                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="sinopsis"></textarea>
                                              </div>
                                              <div class="mb-3">
                                                <select class="form-select" aria-label="Default select example" name="genre">
                                                  <option selected>Genre</option>
                                                  <option value="romance" name="romance">Romantis</option>
                                                  <option value="horor" name="horor">Horor</option>
                                                  <option value="3" name="fantasi">Fantasi</option>
                                                </select>
                                              </div>
                                              <div class="mb-3">
                                                <select class="form-select" aria-label="Default select example" name="trend">
                                                  <option selected>Trend</option>
                                                  <option value="yes" name="yes">yes</option>
                                                  <option value="no" name="no">no</option>
                                                </select>
                                              </div>
  
                                              <button type="submit" name="simpan" value="simpan" class="btn btn-warning">Simpan</button>
                                      </form>
                                    </div>
                                  </div>                                
                                </section>
                              </div>                                                       
                            </div>
                          </div>
                        </div>
        </div>   
        <div class="row">
           <h1 class="mt-5">Trend</h1>
          <table class="table table-bordered mt-4">
                            <thead class="bg-blue">
                                <tr>
                                    <th>Id Buku</th>
                                    <th>Judul Buku</th>
                                    <th>Harga Buku</th>
                                    <th>Cover Buku</th>
                                    <th>Genre</th>                               
                                </tr>
                            </thead>
                            <tbody>
                                
                            <?php
                            

                            
                                include '../proses/koneksi.php';
                                $employee = mysqli_query($conn,"select * from buku where trend='yes'");
                                while($row = mysqli_fetch_array($employee))
                                {
                                    echo "<tr>
                                     <td>".$row['id_buku']."</td>
                                     <td>".$row['judul_buku']."</td>
                                     <td>".$row['harga_buku']."</td>
                                    <td> <img src='../images/".$row['cover_buku']."' class='card-img-top' style='width: 80px;'></td>
                                     <td>".$row['genre']."</td>

                                </tr>";
                                }
                            ?>
                            </tbody>
                           

                            <script>
                            $(document).ready(function(){
                                $('#tabel-data').DataTable();
                            });
                            </script>

                        </table>
        </div>   
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
        
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2021 <a href="https://adminlte.io">E-Library</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<!-- ChartJS -->
<script src="../plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../plugins/moment/moment.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard.js"></script>
</body>
</html>
