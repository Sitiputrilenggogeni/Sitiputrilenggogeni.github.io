<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register | Tokomusik</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>
<body id="bg-login">
    <div class="box-login">
        <h2>Register</h2>
        <form action="" method="POST">
            <input type="text" name="user" placeholder="Username" class="input-control">
            <input type="password" name="pass" placeholder="Password" class="input-control">
            <input type="submit" name="submit" value="Register"  class="btn">
        </form>
        <?php
            if(isset($_POST['submit'])){
                session_start();
                include 'db.php';
                $user = mysqli_real_escape_string($conn, $_POST['user']);
                $pass = mysqli_real_escape_string($conn, $_POST['pass']);

                $pass = password_hash($pass, PASSWORD_DEFAULT);

                $result = mysqli_query($conn, "SELECT username FROM tb_user WHERE username = '$user'");
                if(mysqli_fetch_assoc($result)) {
                    echo '<script>alert("Username sudah digunakan.")</script>';
                    echo '<script>window.location="register.php"</script>';
                } else{
                    $sql = "INSERT INTO tb_user VALUE ('', '$user', '$pass')";
                    $result = mysqli_query($conn, $sql);
                    if(mysqli_affected_rows($conn) > 0) {
                        echo '<script>alert("Registrasi berhasil.")</script>';
                        echo '<script>window.location="login.php"</script>';
                    }
                }
            }
        ?>
    </div>    
</body>
</html>