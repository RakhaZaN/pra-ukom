<?php 
session_start();
$redirectTo = $_SESSION['user']['Role'] == 'member' ? '../home-member.php' : '../home-admin.php';

if(isset($_POST['btnChange'])) {
    include 'function/function.php';
    if (changePass($_POST)) {
        echo "<script>
                alert('Success Change Password');
                document.location.href=$redirectTo;
            </script>";
    } else {
        echo "<script>
                alert('Failed Change Password : {$_SESSION['error_message']}');
                document.location.href='change-password.php';
            </script>";
    }
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Change Password | 24 Library</title>
    </head>
    <body>
    
    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">24 Library</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            File
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="login.php">Logout</a>
                            <a class="dropdown-item" href="change-password.php">Change Password</a>        
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Master
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="master-book.php">Book</a>      
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Transaction
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="deposit-payment.php">Deposit Payment</a>
                            <a class="dropdown-item" href="return-book.php">Return Book</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Report
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">All Transaction</a>
                        </div>
                    </li>
                        
                </ul>
            </div>
        </div>
    </nav> -->

    <div class="container">
        <div class="row justify-content-center">
            
            <div class="col-md-5">
                <h1 class="text-center mt-5"></h1>
                <div class="card mt-5">
                    <div class="card-body">
                        <h3 class="h3 mb-4">Change Password</h3>

                        <form method="" action="" class="needs-validation" novalidate>

                            <div class="form-group">
                                <label for="old-pass">Old Password</label>
                                <input type="password" id="oldpass" name="oldpass" class="form-control" required placeholder="Input new password">
                                <div class="invalid-feedback">Old password field is required.</div>
                            </div> 
                            <div class="form-group">
                                <label for="new-pass">New Password</label>
                                <input type="password" id="newpass" name="newpass" class="form-control" required placeholder="Input new password">
                                <div class="invalid-feedback">New password field is required.</div>
                            </div>
                            <div class="form-group">
                                <!-- <label for="retry-pass">Retry Password</label> -->
                                <input type="password" id="retry-pass" class="form-control" required placeholder="Retry new password">
                                <div class="invalid-feedback">Retry password field is required.</div>
                            </div>
                            <a href="" class="btn btn-outline-secondary">Cancel</a>
                            <button type="submit" name="btnChange" class="btn btn-outline-primary col-12">Change Password</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    </body>
</html>