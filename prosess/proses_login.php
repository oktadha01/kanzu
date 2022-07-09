<?php
ob_start();
session_start();
include "../koneksi.php";
if (@$_SESSION['username']) {
    header('location:index.php');
}
$username = mysqli_real_escape_string($koneksi, @$_POST['username']);
$password = mysqli_real_escape_string($koneksi, @$_POST['password']);
$password = md5($password);
$op = $_GET['op'];
// query untuk mendapatkan record dari username
if ($op == "in") {
    $sql = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' AND password='$password'");
    if (mysqli_num_rows($sql) == 1) {
        $qry = mysqli_fetch_array($sql);
        $_SESSION['id_user']    = $qry['id_user'];
        $_SESSION['username']    = $qry['username'];
        $_SESSION['privilege']    = $qry['privilege'];

        if ($qry['privilege'] == "Admin") {
            header("location:../index.php");
        }else{
            header("location:../index.php"); 
        }
    } else {
        session_start();
        $_SESSION["login-error"] = 'Oops! Login Filed. Incorrect Username & Password ...';
        header("location:../login.php");

?>
        <!-- <script language="JavaScript"> -->
        <!-- //             alert('Oops! Login Failed. Username & password tidak sesuai ...'); -->
        <!-- //             document.location = '../login.php'; -->
        <!-- //         </script> -->
<?php
    }
} else if ($op == "out") {
    unset($_SESSION['id_user']);
    unset($_SESSION['privilege']);
    header("location:./");
}

?>