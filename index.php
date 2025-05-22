<?php
session_start();
include "config.php";
$error = "";
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login - Online Voting System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="bg-light">
    <section>
        <div class="container-fluid ">
            <div class="d-flex justify-conten-center ">
                <div class="user">
                    <div class="d-flex justify-conten-center ">
                        <div class="logo-img ps-2 pt-1">
                            <img src="https://www.news24galaxy.com/wp-content/uploads/2022/01/1200px-Election_Commission_Nepal.svg_.png"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container mt-5 d-flex flex-column justify-conten-center form">
            <h3 class="mb-4 text-center">Login Form</h3>
            <form method="POST">
                <div class="mb-3">
                    <label for="name" class="form-label">username</label>
                    <input type="text" class="form-control" id="name" placeholder="enter username" name="username">
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">password</label>
                    <input type="password" class="form-control" id="password" placeholder="password" name="password">
                </div>
                <input type="checkbox"> <span>Rememeber me</span><br><br>
                <div class="text-center">
                    <button type="submit" class="btn" name="login-btn">Login</button>
                </div>
                <div class="text-center pt-2">
                    <span>Don't have any account? <span><a href="signUp.php">SignUp</a></span></span>
                </div>
                <div class="text-center pt-2">
                    <span><a href="#">Forget your password?</a></span>
                </div>
            </form>

        </div>
    </section>

<?php
if(isset($_POST['login-btn'])){
    $userName = $_POST['username'];
    $password = $_POST['password']; 

    $query ="SELECT * FROM users WHERE username='$userName'";
    $data = mysqli_query($conn,$query);
   
    if(mysqli_num_rows($data) >0){
        $row = mysqli_fetch_array($data);

        if(password_verify($password,$row['password'])){
            $_SESSION ['username']=$row['username'];
            $_SESSION ['role']=$row['role'];

            if($row['role']=='admin'){
                header("Location:./admin/admin.php");
                exit;
            }
            else{
                header("Location: index.php");
                exit;
            }
        }else{
            $error ="Pass & username not match..";
        }
    }
    else{
        $error ="user not found..";
    }
}


?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>