<?php
include 'config.php';
if(isset($_POST ['submit'])){
    $nm=$_POST  ['nama'];
    $em=$_POST  ['email'];
    $p=$_POST   ['pass'];
    $sel="SELECT * FROM user WHERE email='$em'";
    $cek=mysqli_query($conn,$sel);
    if(mysqli_num_rows($cek) > 0){
        header('Location:index.html');
    }else{
        echo '<script>alert("Data anda tidak terdaftar")</script>';
    }
}
?>
<html>
    <head>
            <title>login</title>
            <style>
                h1{
                        text-align: center;
                        }
            </style>
    </head>
    <body>
    <h1>Login</h1>
    <center>
    <table>
        <form action="" method="post">
            <tr>
                <td><label for="">Nama:</label></td>
                <td><input type="text"name="nama"></td>
            </tr>
            <tr>
                <td><label for="">Email:</label></td>
                <td><input type= "email"name="email"></td>
            </tr>
            <tr>
                <td><label for="">Password:</label></td>
                <td><input type="password"name="pass"></td>
            
            </tr>    
            <tr>
                <td><input type="submit"name="submit"></td>
            </tr>        
        </form>
        </table>
        <p>Jika belum punya akun silahkan <a href="regis.php">registrasi</a></p>
</center>
    </body>
</html>