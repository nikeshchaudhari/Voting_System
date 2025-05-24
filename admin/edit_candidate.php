
<?php
session_start();
include("../config.php");

if(!isset($_SESSION['role'])|| $_SESSION['role']!= 'admin'){
header("Location: ../login.php");
exit;

}
$id = $_GET['id'];
$query= "SELECT * FROM candidate WHERE id='$id'";
$data = mysqli_query($conn,$query);
$row = mysqli_fetch_array($data);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting System || EDIT_CANDIDATE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">


</head>

<div class="container-fluid px-0">

    <div class="row">
        <div class="col-lg-2  col-md-2 d-flex  d-none  d-md-block">
            <div class="side-bar ">
                <h4><img src="https://img.icons8.com/?size=100&id=u05i13Fgasru&format=png&color=000000" alt=""
                        width="35px">
                    Admin Panel
                </h4>
                <hr>
                <a href="dashboard.php"><i class="fa-solid fa-gauge"></i>Dashboard</a>
                <a href="add_candidate.php"><i class="fa-solid fa-user-plus"></i>Add Candidate</a>
                <a href="manage_candidate.php"><i class="fa-solid fa-users-gear"></i>Manage Voter</a>
                <a href="../logout.php"><i class="fa-solid fa-right-from-bracket"></i>Logout</a>
            </div>

        </div>
        <div class="col-lg-10  px-0 ">
            <h4 class="d-flex justify-content-center py-3 main-candidate fw-bold ">Edit Candidate</h4>
            <div class="candidate-form mx-5 ">
<form class="main-form"method="post">
  <div class="mb-3 mx-3 ">
    <label for="exampleInputEmail1" class="form-label">Candidate Name</label>
    <input type="text"value="<?php echo $row['name']?>"  name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Candidate name">
   
  </div>
  <div class="mb-3 mx-3 ">
    <label for="exampleInputPassword1" class="form-label" >Party</label>
    <input type="text"  value="<?php echo $row['party']?>"name="party" class="form-control" id="party" placeholder="Enter Party name" >
  </div>
  
  <button type="submit" name="update-btn"class="btn btn-primary mx-3 d-flex flex-column justify-content-sm-center align-item-sm-center" >Submit</button>
</form>
            </div>
        </div>
    </div>
</div>
<?php
if(isset($_POST['update-btn'])){
    $name = $_POST['name'];
    $party= $_POST['party'];

    $query="UPDATE candidate SET name='$name',party='$party'WHERE id='$id'";
    $data = mysqli_query($conn,$query);
     if($data){
    header("Location: dashboard.php ");
    exit;
   }
}

?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>