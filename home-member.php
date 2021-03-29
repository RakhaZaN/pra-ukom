<?php 
session_start();
if(isset($_POST['btnLogout'])) {
    include 'function/function.php';
    logout();
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

    <title>Home | 24 Library</title>
    </head>
    <body>
    
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
                            <form action="" method="post">
                                <button type="submit" class="dropdown-item text-danger" name="btnLogout">Logout</button>
                            </form>
                            <a class="dropdown-item" href="pages/change-password.php">Change Password</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" tabindex="-1">Find Book</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Transaction
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="borrow-list.php">Borrow</a>
                        </div>
                    </li>
                        
                </ul>
                <span class="navbar-text text-dark">
                    Hello, <?= $_SESSION['user'] ? $_SESSION['user']['Name'] : 'Member' ; ?> 
                </span>
            </div>
        </div>
    </nav>

    <!-- Body -->
    <div class="container">
        <div class="row justify-content-center">
            
            <div class="col-6">
                <h1 class="text-center mt-5">24 Library</h1>
                Hello Member
            </div>

        </div>
    </div>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    </body>
</html>