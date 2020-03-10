  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>


  <?php

// ADMIN

$connection = mysqli_connect("localhost","root","","test");

if(isset($_POST['registerbtn']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirmpassword'];

    if($password === $confirm_password)
    {
        $query = "INSERT INTO register (username,email,password) VALUES ('$username','$email','$password')";
        $query_run = mysqli_query($connection, $query);
    
        if($query_run)
        {
            echo "done";
            $_SESSION['success'] =  "Admin is Added Successfully";
            header('Location: register.php');
        }
        else 
        {
            echo "not done";
            $_SESSION['status'] =  "Admin is Not Added";
            header('Location: register.php');
        }
    }
    else 
    {
        echo "pass no match";
        $_SESSION['status'] =  "Password and Confirm Password Does not Match";
        header('Location: register.php');
    }

}

// BERITA

$connection = mysqli_connect("localhost","root","","test");

if(isset($_POST['registerbtn2']))
{
    $title = $_POST['title'];
    $subtitle_berita = $_POST['subtitle'];
    $image_berita = $_POST['image'];
    $isi_berita = $_POST['isi'];

    // if($password === $confirm_password)
    {
        $query = "INSERT INTO berita (title,subtitle,image,isi) VALUES ('$title','$subtitle_berita','$image_berita','$isi_berita')";
        $query_run = mysqli_query($connection, $query);
    
        if($query_run)
        {
            echo "done";
            $_SESSION['success'] =  "News is Added Successfully";
            header('Location: berita.php');
        }
        else 
        {
            echo "not done";
            $_SESSION['status'] =  "News is Not Added";
            header('Location: berita.php');
        }
    }
    // else 
    // {
    //     echo "pass no match";
    //     $_SESSION['status'] =  "Password and Confirm Password Does not Match";
    //     header('Location: register.php');
    // }

}

?>