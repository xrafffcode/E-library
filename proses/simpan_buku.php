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
    include './koneksi.php';

    if(isset($_POST['simpan'])){
        $judul_buku = $_POST['judul_buku'];
        $harga_buku = $_POST['harga_buku'];
        $sinopsis = $_POST['sinopsis'];
        $genre = $_POST['genre'];
        $trend = $_POST['trend'];
        $image = $_FILES['cover_buku']['name'];
        $target = "../images/";
        $namaSementara = $_FILES['cover_buku']['tmp_name'];
        $terupload = move_uploaded_file($namaSementara, $target.$image);


        $sql = "INSERT INTO buku (judul_buku, harga_buku,cover_buku,sinopsis,genre,trend) VALUES('$judul_buku','$harga_buku','$image','$sinopsis','$genre','$trend')";
        if($conn->query($sql) === TRUE){
            header("location:../admin/admin.php?pesan=sukses_produk");
        }else{
            echo "Error: " . $sql . "<br>" . $conn->error;
        }	
      
    }
   

    $conn->close();

?>