<?php
include('security.php');
include('database/dbconfig.php');

if(isset($_POST['login_btn']))
{
    $username_login = $_POST['username'];
    $password_login = $_POST['password'];
<<<<<<< HEAD
    
=======

>>>>>>> g
    $query = "SELECT * FROM tbl_account WHERE username='$username_login' AND password='$password_login' ";
    $query_run = mysqli_query($connection, $query);

    if(mysqli_fetch_array($query_run))
    {
        $_SESSION['username'] = $username_login;
        header('Location: index.php');
    }
    else
    {
<<<<<<< HEAD
        $_SESSION['status'] = 'Username / Password is Invalid';
=======
        $_SESSION['status'] = 'Email Id/ Password is Invalid';
>>>>>>> g
        header('Location: login.php');
    }
}

if(isset($_POST['edit_btn']))
{
    $id = $_POST['edit_id'];
    $title = $_POST['edit_title'];
    $sub = $_POST['edit_subtitle'];
    $image = $_POST['edit_image'];
    $isi = $_POST['edit_isi'];
    $sumber = $_POST['edit_sumber'];

    $query = "UPDATE berita SET title_berita='$title', subtitle_berita='$sub', image_berita='$image', isi_berita='$isi', sumber_berita='$sumber' WHERE berita_id ='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Your Data Is Updated";
        header('Location: news.php');
    }
    else
    {
        $_SESSION['status'] = "Your Data Is NOT Updated";
        header('Location: news.php');
    }
}

if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM berita WHERE berita_id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Your DATA is DELETED";
        header('Location: news.php');
    }
    else
    {
        $_SESSION['status'] = "Your DATA is NOT DELETED";
        header('Location: news.php');
    }
}

if(isset($_POST['tambah_berita']))
{
    $titles = $_POST['Title_Berita'];
    $subtitles = $_POST['Subtitle_Berita'];
    $images = $_POST['Image_Berita'];
    $isia = $_POST['Isi_Berita'];
    $sumbers = $_POST['Sumber_Berita'];
    

        $query = "INSERT INTO berita (title_berita,subtitle_berita,image_berita,isi_berita,sumber_berita) VALUES ('$titles','$subtitles','$pimages', '$isia','$sumbers')";
        $query_run = mysqli_query($connection, $query);
    
        if($query_run)
        {
            //echo "Saved";
            $_SESSION['success'] = "Berita Berhasil Di Tambah";
            header('Location: news.php');
        }
        else 
        {
            $_SESSION['status'] = "Berita Tidak Berhasil Di Tambah";
            header('Location: news.php');    
        }
    

}






?>