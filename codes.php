<?php
session_start();

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
        $query_run = mysqli_query($connection, $query);
    
        if($query_run)
        {
            //echo "Saved";
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

?>