<?php 
    if($_GET['id_user']){
        include "koneksi.php";
        $qry_hapus=mysqli_query($conn,"delete from user where id_user ='".$_GET['id_user']."'");
        if($qry_hapus){
            echo "<script>alert('Sukses hapus user');location.href='tampil_user.php';</script>";
        } else {
            echo "<script>alert('Gagal hapus user');location.href='tampil_user.php';</script>";
        }
    }
?>
<?php
    if($_GET['id_member']){
        include "koneksi.php";
        $qry_hapus=mysqli_query($conn,"delete from member where id_member='".$_GET['id_member']."'");
        if($qry_hapus){
            echo "<script>alert('Sukses hapus member');location.href='tampil_member.php';</script>";
        } else {
            echo "<script>alert('Gagal hapus member');location.href='tampil_member.php';</script>";
        }
    }
?>
<?php
    if($_GET['id_paket']){
        include "koneksi.php";
        $qry_hapus=mysqli_query($conn,"delete from paket where id_paket='".$_GET['id_paket']."'");
        if($qry_hapus){
            echo "<script>alert('Sukses menyelesaikan paket');location.href='tampil_paket.php';</script>";
        } else {
            echo "<script>alert('Gagal menyelesaikan paket');location.href='tampil_paket.php';</script>";
        }
    }
?>
