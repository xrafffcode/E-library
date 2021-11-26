<html>
    <head>
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
                     
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
</html>


<?php
    include '../proses/koneksi.php';
    
    $id_buku = $_GET['id_buku'];

    $sql = ("SELECT * FROM buku WHERE id_buku = '$id_buku'");
    $result = $conn->query($sql);

    $result= $result->fetch_assoc();

?>

 



 <div class="container">
    
            <div class="row mt-5">
               
                <form action="../proses/prosesubah_buku.php" method="POST"> 
                    <input type="hidden" name="id_buku" value="<?php echo $result['id_buku']?>"> 
                        <div class="mb-3">
                            <label class="form-label">Judul Buku</label>
                            <input type="text" name="judul_buku" class="form-control" value="<?php echo $result['judul_buku']?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Harga Buku</label>
                            <input type="   " name="harga_buku" class="form-control" value="<?php echo $result['harga_buku']?>"></label>
                        </div>
                         <div class="mb-3">
                            <label class="form-label">Cover Buku</label>
                          
                            <input type="text" name="cover_buku" value="<?php echo $result['cover_buku']?>" class="form-control"></label>
                            <br>
                            <img src="<?php echo '../images/'.$result['cover_buku']?>" width="100">
                        </div>  
                        <div class="mb-3">
                            <label class="form-label">Genre</label>
                          
                            <input type="text" name="genre" class="form-control" value="<?php echo $result['genre']?>"></label>
                        </div> 
                        <div class="mb-3">
                            <label class="form-label">Sinopsis</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="sinopsis" value=""><?php echo $result['sinopsis']?></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Trend</label>
                          
                            <input type="text" name="trend" class="form-control" value="<?php echo $result['trend']?>"></label>
                        </div> 
                            
                    <button name="simpan" value="stok" class="btn btn-warning">Simpan</button>
                </form>
            </div>
        </div>       