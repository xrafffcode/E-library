<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>E-library</title>
    <link href="../style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body style="background-color: #EAE0D5;">

  <?php 
    session_start();

    // cek apakah yang mengakses halaman ini sudah login
    if($_SESSION['level']==""){
      header("location:index.php?pesan=gagal");
    }

  ?>

  <?php
      $filename = 'counter.txt';       
      function counter(){		
      global $filename;	
                    
      if(file_exists($filename)){		
        $value = file_get_contents($filename);	
      }else{		
        $value = 0;		
      }
                    
      file_put_contents($filename, ++$value);		
      }
                    
      counter();	
                    
  ?>

    <section class="h-100 w-100 " style="box-sizing: border-box">

        <nav class="navbar-1-1 navbar navbar-expand-lg navbar-light p-4 px-md-4 mb-3" style="font-family: Poppins, sans-serif">
            <div class="container">
                <a class="navbar-brand" href="#">
                 <img src="../dist/img/mylogo.svg" width="70">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link px-md-4 active" aria-current="page" href="#">Trend</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-md-4" href="#genre">Genre</a>
                        </li>
                    </ul>
                    <div class="d-flex">
                      <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <?php echo $_SESSION['username'];?>
                        </button>
                    </div>
                </div>
            </div>
        </nav>
    </section>
    <section class="content">
      <div class="container-fluid">
		    <div class="container">
          <h1>Trend</h1>
          <div class="row mt-3" id="load_data">
            <?php
              include '../proses/koneksi_user.php';
              $query = "SELECT * FROM buku where trend='yes'";
              $dewan1 = $db1->prepare($query);
              $dewan1->execute();
              $res1 = $dewan1->get_result();
              while ($row = $res1->fetch_assoc()) {
                  $id_buku = $row["id_buku"];
                $gambar_produk = $row["cover_buku"];
                $harga_produk = $row["harga_buku"];
                $nama_produk = $row["judul_buku"];
                    
            ?>
              <div class="col-sm-3 mb-3" >
                  <div class="card">
                      <img src="<?php echo "../images/$gambar_produk"; ?>" width="300" height="300" alt="gambar">
                    <div class="card-body text-decoration-none">
                        <h5 class="card-title"><?php echo $nama_produk; ?></h5>
                        <p class="card-text text-decoration-none">Rp <?php echo $harga_produk; ?></p>        
                    </div>
              
                    <div class="card-footer">
                        <a href="detail_buku.php?id_buku=<?php echo $id_buku; ?>"><button type="button" class="btn btn-primary w-100">Baca</button></a>
                        </div>
                    </div>
          
                  </div>
                  <?php } ?>
              </div>
        </div>
      </div>
    </section>
    <section class="content mt-5" id="genre">
      <div class="container-fluid">
		    <div class="container">
          <h1>Genre</h1>
          <h1 class="mt-5">Horor</h1>
          <div class="row mt-3" id="load_data">
            <?php
              $query = "SELECT * FROM buku where genre='horor'";
              $dewan1 = $db1->prepare($query);
              $dewan1->execute();
              $res1 = $dewan1->get_result();
              while ($row = $res1->fetch_assoc()) {
                  $id_buku = $row["id_buku"];
                $gambar_produk = $row["cover_buku"];
                $harga_produk = $row["harga_buku"];
                $nama_produk = $row["judul_buku"];
                    
            ?>
              <div class="col-sm-3 mb-3" >
                  <div class="card">
                      <img src="<?php echo "../images/$gambar_produk"; ?>" width="300" height="300" alt="gambar">
                    <div class="card-body text-decoration-none">
                        <h5 class="card-title"><?php echo $nama_produk; ?></h5>
                        <p class="card-text text-decoration-none">Rp <?php echo $harga_produk; ?></p>        
                    </div>
              
                    <div class="card-footer">
                        <a href="detail_buku.php?id_buku=<?php echo $id_buku; ?>"><button type="button" class="btn btn-primary w-100">Baca</button></a>
                        </div>
                    </div>
          
                  </div>
                  <?php } ?>
              </div>

        </div>
      </div>
       <div class="container-fluid">
		    <div class="container">
          <h1 class="mt-5">Romance</h1>
          <div class="row mt-3" id="load_data">
            <?php
              $query = "SELECT * FROM buku where genre='romance'";
              $dewan1 = $db1->prepare($query);
              $dewan1->execute();
              $res1 = $dewan1->get_result();
              while ($row = $res1->fetch_assoc()) {
                 $id_buku = $row["id_buku"];
                $gambar_produk = $row["cover_buku"];
                $harga_produk = $row["harga_buku"];
                $nama_produk = $row["judul_buku"];
                    
            ?>
              <div class="col-sm-3 mb-3" >
                  <div class="card">
                      <img src="<?php echo "../images/$gambar_produk"; ?>" width="300" height="300" alt="gambar">
                    <div class="card-body text-decoration-none">
                        <h5 class="card-title"><?php echo $nama_produk; ?></h5>
                        <p class="card-text text-decoration-none">Rp <?php echo $harga_produk; ?></p>        
                    </div>
              
                    <div class="card-footer">
                        <a href="detail_buku.php?id_buku=<?php echo $id_buku; ?>"><button type="button" class="btn btn-primary w-100">Baca</button></a>
                        </div>
                    </div>
          
                  </div>
                  <?php } ?>
              </div>

        </div>
      </div>
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Keluar Akun?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Yakin mau keluar?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="../proses/logout.php" class="nav-link">
                <button type="button" class="btn btn-primary">Yes</button>
      </a>
      </div>
    </div>
  </div>
</div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>