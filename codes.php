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
    $image = $_FILES["image"]["name"];

        $query = "INSERT INTO tbl_account (username,email,password,image) VALUES ('$username','$email','$password','$image')";
        $query_run = mysqli_query($connection, $query);
    
        if($query_run)
        {
            move_uploaded_file($_FILES["image"]["tmp_name"], "upload/".$_FILES["image"]["name"]);
            //echo "Saved";
            $_SESSION['success'] = "Admin Added";
            header('Location: admin.php');
        }
        else 
        {
            $_SESSION['status'] = "Admin NOT Added";
            header('Location: admin.php');    
        }
    }
if(isset($_POST['delete_btn']))
{
    $id_barang = $_POST['delete_id'];

    $query = "DELETE FROM tbl_barang WHERE id_barang ='$id_barang' ";
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
if(isset($_POST['edit_btn']))
{
    $id = $_POST['edit_id'];
    $nama = $_POST['edit_nama'];
    $foto = $_FILES["photo"]["name"];
    $kode = $_POST['edit_kode'];
    $harga = $_POST['edit_harga'];
    $desc = $_POST['edit_desc'];
    $range = $_POST['edit_range'];
    $buat = $_POST['edit_buat'];
    $acara = $_POST['edit_acara'];

    $query = "UPDATE tbl_barang SET nama_barang='$nama', photo='$foto', kode_barang='$kode', harga='$harga', deskripsi='$desc', range_date='$range', kado_buat='$buat', acara='$acara' WHERE id_barang ='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
        {
            move_uploaded_file($_FILES["photo"]["tmp_name"], "img/".$_FILES["photo"]["name"]);
            $_SESSION['success'] = "Barang Updated";
            header('Location: list.php');
        }
    else
    {
        $_SESSION['status'] = "Your Data Is NOT Updated";
        header('Location: list.php');
    }
}
        


?>