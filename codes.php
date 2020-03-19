<?php
session_start();

include('database/dbconfig.php');

if(isset($_POST['addbarang']))
{
    $nama = $_POST['nama_barang'];
    $photo = $_POST['photo'];
    $kode = $_POST['kode_barang'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];
    $buat = $_POST['kado_buat'];
    $acara = $_POST['acara'];
    $range = $_POST['range_date'];


        $query = "INSERT INTO tbl_barang (nama_barang,photo,kode_barang,harga,deskripsi,kado_buat,range_date) VALUES ('$nama','$photo','$kode','$harga','$deskripsi','$buat','$range')";
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

    if(isset($_POST['addadmin']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $image = $_FILES["image"]['name'];


    if(file_exists("upload/" .$_FILES["image"]["name"])) 
    {
        $store = $_FILES["image"]["name"];
        $_SESSION['status']= "Image already exist. '.$store.'";
        header('Location: admin.php');
    }
    else
    {

        $query = "INSERT INTO tbl_account ('username','email','password','image') VALUES ('$username','$email','$password','$image')";
        $query_run = mysqli_query($connection, $query);
    
        if($query_run)
        {
            move_uploaded_file($_FILES["image"]["tmp_name"], "upload/".$_FILES["image"]["name"]);
            $_SESSION['success'] = "Admin Added";
            header('Location: admin.php');
        }
        else 
        {
            $_SESSION['status'] = "Admin NOT Added";
            header('Location: admin.php');    
        }
    }
}
        


?>