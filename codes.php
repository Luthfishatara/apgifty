<?php
session_start();

$connection = mysqli_connect("localhost","root","","gify");

if(isset($_POST['addbarang']))
{
    $nama = $_POST['nama'];
    $photo = $_POST['photo'];
    $kode = $_POST['kode_barang'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];


        $query = "INSERT INTO tbl_barang (nama,photo,kode_barang,harga,deskripsi) VALUES ('$nama','$photo','$kode','$harga','$deskripsi')";
        $query_run = mysqli_query($connection, $query);
    
        if($query_run)
        {
            //echo "Saved";
            $_SESSION['success'] = "Barang Added";
            header('Location: list.php');
        }
        else 
        {
            $_SESSION['status'] = "Barang NOT Added";
            header('Location: list.php');    
        }
    }

?>