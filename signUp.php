<?Php
include "config.php";

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
            <div class="d-flex justify-content-center ">
                <div class="user">
                    <div class="d-flex  ">
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
        <div class="container mt-5 d-flex flex-column justify-content-center form">
            <h3 class="mb-4 text-center">Signup</h3>
            <form method="post">
                <div class="mb-3">

                    <input type="text" class="form-control" id="name" placeholder="username" name="username">
                </div>

                <div class="mb-3">
                  
                    <input type="email" class="form-control" id="email" placeholder="email" name="email">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" id="password" placeholder="password" name="password">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" id="con-password" placeholder="confirm password" name="con-password">
                </div>
                <div class="mb-3">
                    <select class="form-control" name="role" required>
                        <option value="">Select Role</option>
                        <option value="voter">User</option>
                        <option value="admin">Admin</option>
                    </select>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn" name="sign-btn">Signup</button>
                </div>
                <div class="text-center pt-2">
                    <span>Already have account? <span><a href="index.php">Login</a></span></span>
                </div>

            </form>

        </div>
    </section>


<!-- Signup -->

<?php
if(isset($_POST['sign-btn'])){
    $userName = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm = $_POST['con-password'];
    $role = $_POST['role'];
if($password === $confirm){
  $hashPassword = password_hash($password,PASSWORD_DEFAULT);
  
  $query= "INSERT INTO users(username,email,password,role)VALUES('$userName','$email','$hashPassword','$role')";
  $data = mysqli_query($conn,$query);
  
  if($data){
    echo "Signup..Sucessfully ";
  }
  else{
    echo "Error in signup...";
  }

    
}
else{
echo"username and password not match";
}
}
?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>