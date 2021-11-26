<?php
    include './koneksi.php';
   
    $id_buku = $_POST['id_buku'];
        
        $judul_buku = $_POST['judul_buku'];
        $harga_buku = $_POST['harga_buku'];
        $genre = $_POST['genre'];
        $sinopsis = $_POST['sinopsis'];
        $trend = $_POST['trend'];
        $image = $_POST['cover_buku'];

    $sql = "UPDATE buku SET judul_buku='$judul_buku', harga_buku='$harga_buku' , genre='$genre' , cover_buku='$image', sinopsis='$sinopsis', trend='$trend' WHERE id_buku = '$id_buku'";
    
    if($conn->query($sql) === TRUE){
         header("location:../admin/admin.php?pesan=ubahproduk_sukses");
    }else{
        echo "Eror: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

?>