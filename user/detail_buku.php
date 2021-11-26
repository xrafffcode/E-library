<link rel="stylesheet" href="./style.css">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

 
<?php
    include '../proses/koneksi.php';
    
    $id_buku = $_GET['id_buku'];

    $sql = ("SELECT * FROM buku WHERE id_buku = '$id_buku'");
    $result = $conn->query($sql);

    $result= $result->fetch_assoc();

?>
    <div class="container">
        
        <a href="user.php"><img src="https://img.icons8.com/material-outlined/50/000000/back--v1.png"/></a>
    </div>
 <div class="container mt-5">
     
<div class="container-fluid">

      <div class="row row-sm">
         <div class="col-md-6 _boxzoom">
            <div class="_product-images">
                <img class="img-fluid" src="../images/<?php echo $result['cover_buku']?>" width="500" height="500">
            </div>
         </div>
         <div class="col-md-6">
            <div class="_product-detail-content">
               <h3 class="_p-name"><?php echo $result['judul_buku']?></h3>
               <div class="_p-price-box">
                  <div class="p-list">
                     <span class="price"> Rp. <?php echo $result['harga_buku']?> </span>
                  </div>
                  <br>
                  <div class="_p-features">
                     <?php echo $result['sinopsis']?>                      
                  </div>
                     <br>
                     <div class="_p-qty-and-cart">
                        <div class="_p-add-cart">
                           <button class="btn btn-primary" tabindex="0">
                           <i class="fa fa-shopping-cart"></i> Buy Now
                           </button>
                        </div>
                     </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
   