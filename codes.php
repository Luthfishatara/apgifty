<?php
session_start();

<<<<<<< HEAD
include('database/dbconfig.php');
// if(isset($_POST['save_data']))
// (
//     $name = $_POST[''];
// )


if(isset($_POST['addbarang']))
{
    $nama = $_POST['nama'];
    $photo = $_FILES['photo']['name'];
    $kode = $_POST['kode_barang'];
    $harga = $_POST['harga'];
    $deskripsi = $_FILES['deskripsi'];

    if (file_exists("img/". $_FILES["photo"]["name"]))
    {       
        $store = $_FILES["photo"]["name"];
        $_SESSION['status']= "Image already exists. '.$store.'";
        header('Location: list.php');
    }
    else
    {
            $query = "INSERT INTO tbl_barang (nama,photo,kode_barang,harga,deskripsi) VALUES ('$nama','$photo','$kode','$harga','$deskripsi')";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                move_uploaded_file($_FILES["photo"]["tmp_name"],"img/".$_FILES["file"]["name"]);
                $_SESSION['success'] = "Data Berhasil Di Tambah";
                header('Location: list.php');
            }
            else
            {
                $_SESSION['success'] = "Data Gagal Di Tambah";
                header('Location: list.php');    
            }
       
    }

<<<<<<< HEAD
        $query = "INSERT INTO tbl_barang (nama,photo,kode_barang,harga,deskripsi) VALUES ('$nama','$photo','$kode','$harga','$deskripsi')";
=======
$connection = mysqli_connect("localhost","root","","test");

if(isset($_POST['registerbtn']))
{
    $name = $_POST['Nama'];
    $username = $_POST['Username'];
    $email = $_POST['Email'];
    $alamat = $_POST['Alamat'];
    $telepon = $_POST['Telepon'];
    $sandi = $_POST['Sandi'];
    $csandi = $_POST['csandi'];
    $pendidikan = $_POST['pendidikan'];



    if($sandi === $csandi)
    {

        $query = "INSERT INTO akun_gurus (Nama,Username,Email,Alamat,Telepon,Sandi,Pendidikan) VALUES ('$name','$username','$email','$alamat','$telepon','$sandi','$pendidikan')";
>>>>>>> g
        $query_run = mysqli_query($connection, $query);
    
        if($query_run)
        {
            //echo "Saved";
<<<<<<< HEAD
<<<<<<< HEAD
=======
            move_uploaded_file($_FILES["photo"]["tmp_name"], "upload/".$_FILES["image"]["name"]);
>>>>>>> as
            $_SESSION['success'] = "Barang Added";
            header('Location: list.php');
        }
        else 
        {
            $_SESSION['status'] = "Barang NOT Added";
            header('Location: list.php');    
        }
    }
=======
    
      
}

>>>>>>> gf

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
        

=======
            $_SESSION['success'] = "Admin Profile Added";
            header('Location: akun_guru.php');
        }
        else 
        {
            $_SESSION['status'] = "Admin Profile NOT Added";
            header('Location: akun_guru.php');    
        }
    }
    else 
    {
        $_SESSION['status'] = "Password And Confirm Password Doesn't Match";
        header('Location: akun_guru.php'); 
    }

}
>>>>>>> g

?>