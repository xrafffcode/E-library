<?php
    include './koneksi.php';
    
    $id_buku = $_GET['id_buku'];
    

    $sql = "DELETE FROM buku WHERE id_buku='$id_buku'";
    if($conn->query($sql) === TRUE){
         header("location:../admin/admin.php?pesan=sukses_hapus");
    }else{
        echo "Eror: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

?>