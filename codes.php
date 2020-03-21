<?php
session_start();

include('database/dbconfig.php');

if(isset($_POST['addbarang']))
{
    $nama = $_POST['nama_barang'];
    $photo = $_FILES["photo"]["name"];
    $kode = $_POST['kode_barang'];
    $harga = $_POST['harga'];
    $buat = $_POST['kado_buat'];
    $deskripsi = $_POST['deskripsi'];
    $acara = $_POST['acara'];
    $range = $_POST['range_date'];
    $buat = $_POST['kado_buat'];
    $b=implode(",",$buat);
    $a=implode(",",$acara);


        $query = "INSERT INTO tbl_barang (nama_barang,photo,kode_barang,harga,deskripsi,kado_buat,acara,range_date) VALUES ('$nama','$photo','$kode','$harga','$deskripsi','$b','$a','$range')";
        $query_run = mysqli_query($connection, $query);
    
        if($query_run)
        {
            move_uploaded_file($_FILES["photo"]["tmp_name"], "img/".$_FILES["photo"]["name"]);
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
if(isset($_POST['delet_btn']))
{
    $id = $_POST['delet_id'];

    $query = "DELETE FROM tbl_barang WHERE id_barang ='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Delete Successfully";
        header('Location: list.php');
    }
    else
    {
        $_SESSION['status'] = "Delete Failed";
        header('Location: list.php');
    }
}
        


?>