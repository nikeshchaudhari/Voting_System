<?php
session_start();
include("../config.php");

if(!isset($_SESSION['role']) || $_SESSION['role']!='admin'){
    header("Location: ..login.php");
    exit;
}

// Total Candidate
$query= "SELECT COUNT(*) AS count FROM candidate";
$data = mysqli_query($conn,$query);
$row = mysqli_fetch_array($data);
$candidate_Count = $row["count"];
// Total voters 
$voter_Query = "SELECT COUNT(*) AS count FROM users WHERE role ='voter'";
$voter_Data = mysqli_query($conn,$voter_Query);
$voter_Row = mysqli_fetch_array($voter_Data);
$total_Voter =$voter_Row["count"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <!-- Sidebar -->

    <div class="container-fluid px-0">

        <div class="row">
            <div class="col-lg-2  col-md-2 d-none d-sm-block">
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
            <!-- Main -->
            <div class="main col-md-10  px-0">
                <div class=" d-flex  justify-content-between py-2 admin-main ">
                    <h3 class="ms-4 ">WELCOME,ADMIN</h3>
                    <a href="../logout.php" class="btn btn-admin-logout"><i class="bi bi-box-arrow-right"></i>
                        Logout</a>

                </div>
                <!-- card -->
                <div class="row d-flex justify-content-center py-3 ">
                    <div class="col-lg-5 ">
                        <div class="card shadow-sm text-center p-4 border-primary ">
                            <h5 class="text-muted">Total Candidates</h5>
                            <h2 class="text-primary"><?php echo $candidate_Count; ?></h2>
                            <i class="bi bi-person-square display-5 text-primary"></i>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="card shadow-sm text-center p-4 border-success ">
                            <h5 class="text-muted">Total Voters</h5>
                            <h2 class="text-success"><?php echo $total_Voter;?></h2>
                            <i class="bi bi-people-fill display-5 text-success"></i>
                        </div>
                    </div>

                </div>
                <!-- Add candidate Button -->
                <div class="col-lg-12  d-flex justify-content-lg-start justify-content-sm-center  ">
                    <a class=" btn candidate-btn" href="add_Candidate.php" role="button"><i
                            class="fa-solid fa-user-plus"></i>Add Candidate</a>
                </div>
                <!-- Candidate View Table -->
                <div class="col-lg-12 candidate-table shadow-lg mt-3">
                    <h5>Candidate List</h5>
                    <div class="table-view">
                        <table class="table table-border table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Party</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
$query = "SELECT * FROM candidate";
$data = mysqli_query($conn,$query);
$result = mysqli_num_rows($data);
if($result){

while($row = mysqli_fetch_array($data)){
    ?>
                                <tr>
                                    <td><?php echo $row['id'];?></td>
                                    <td><?php echo $row['name'];?></td>
                                    <td><?php echo $row['party'];?></td>
                                    <td>
                                        <a href="edit_candidate.php"><i class="fa-solid fa-pen-to-square me-3"></i></a>
                                        <a href="delete_candidate.php"><i class="fa-solid fa-trash"></i></a>
                                        
                                    </td>

                                </tr>
                                <?php

}
}else{
    ?>
<tr>
    <td>No Records</td>
</tr>
    <?php
}
?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>



        </div>

    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>


</html>