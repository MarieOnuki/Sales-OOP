<?php
session_start();

require '../classes/User.php';

$user = new User;
$all_users = $user->getALLusers(); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white
    justify-conetent-between">
            <a href="dashboard.php" class="ms-3" title="Homepage">
                <i class="fa-solid fa-house fa-2x text-dark"></i>
            </a>
            <a href="profile.php" class="nav-link text-secondary">
                <span class="fw-bold fs-5">Welcome, </span>
            </a>
            <a href="../actions/logput.php" class="me-3" title="Logout"><i class="fa-solid fa-user-xmark fa-2x text-danger"></i></a>
    </nav>
    
    <div class="conatainer mt-5">
        <div class="card w-75 border-0 mx-auto">
            <div class="card-header bg-white border-0">
                <div class="row">
                    <div class="col text-start">
                        <h1 class="display-6 fw-bold">Product List</h1>
                    </div>
                    <div class="col text-end">
                        <i class="class fa-solid fa-plus fa-3x text-info" data-bs-toggle="modal" data-bs-target="#add-product" style="cursor: pointer;"></i>
                    </div>
                </div>
            </div>
            <div class="card-body">

            <div class="container-fluid bg-dark p-5 text-danger text-center">
                <h1 class="display-6 fw-bold pt-5 pb-3">No Records Found</h1>
                <i class="fa-regular fa-circle-xmark fa-8x nb-5"></i>
            </div>
            </div>
        </div>
    </div>
</body>
</html>