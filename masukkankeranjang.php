<?php
    session_start();
    if($_POST) {
        include "koneksi.php";
        $qry_get_buku=mysqli_query($conn, "select * from produk where
        id_produk= '".$_GET['id_produk']."'");
        $dt_buku=mysqli_fetch_array($qry_get_buku);
        $_SESSION['cart'][]=array(
            'id_produk'=>$dt_buku['id_produk'],
            'foto'=>$dt_buku['foto'],
            'nama_produk'=>$dt_buku['nama_produk'],
            'harga'=>$dt_buku['harga'],
            'qty'=>$_POST['jumlah']
        );
        
    }
     header('location: keranjang.php')
?>