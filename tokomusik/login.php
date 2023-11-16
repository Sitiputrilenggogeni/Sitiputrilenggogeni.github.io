<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | Tokomusik</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>
<body id="bg-login">
    <div class="box-login">
        <h2>Login</h2>
        <form action="" method="POST">
            <input type="text" name="user" placeholder="Username" class="input-control">
            <input type="password" name="pass" placeholder="Password" class="input-control">
            <input type="submit" name="submit" value="Login"  class="btn">
        </form>

        <!-- Registration Button -->
        <p style='padding-top: 15px '>Belum punya akun? <a href="register.php" class="register-btn">Register di sini</a></p>

        <?php
            if(isset($_POST['submit'])){
                session_start();
                include 'db.php';

                $username = mysqli_real_escape_string($conn, $_POST['user']);
                $pass = mysqli_real_escape_string($conn, $_POST['pass']);
                
                $cek_user = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username'");
                $cek_admin = mysqli_query($conn, "SELECT * FROM tb_admin WHERE username = '".$username."' AND password = '".MD5($pass)."'");

                if(mysqli_num_rows($cek_user) === 1){
                    $row = mysqli_fetch_assoc($cek_user);

                    if(password_verify($pass, $row['password'])) {
                        $_SESSION['id_user'] = $row['id_user'];
                        header("location: user.php");
                        exit;
                    } else {
                        echo '<script>alert("Password salah.")</script>';
                        echo '<script>window.location="login.php"</script>';
                    }
                } else if(mysqli_num_rows($cek_admin) === 1) {
                    $d = mysqli_fetch_object($cek_admin);
					$_SESSION['status_login'] = true;
					$_SESSION['a_global'] = $d;
					$_SESSION['id'] = $d->admin_id;
					echo '<script>window.location="dashboard.php"</script>';
                } else{
                    echo '<script>alert("Login gagal.")</script>';
                    echo '<script>window.location="login.php"</script>';
                }
                
            }
        ?>
    </div>    
</body>
</html>