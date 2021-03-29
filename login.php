<?php 
// include_once 'connection.php';   
include_once 'function/function.php';
    if (isset($_POST['submit'])) {
        if (login($_POST)) {
            $redirectTo = $_SESSION['user']['Role'] == 'admin' ? 'home-admin.php' : 'home-member.php';
            echo "<script>
                    alert('Success Login');
                    document.location.href='$redirectTo';
                </script>";
        } else {
            echo "<script>
                    alert('Failed Login : {$_SESSION['error_message']}');
                    document.location.href='register.php';
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

    <title>Login Page | 24 Library</title>
    </head>
    <body>

    <div class="container py-5">
        <div class="row justify-content-center d-flex align-items-center">
            
            <div class="col-md-4">
                <!-- <h1 class="text-center mt-5">24 Library</h1> -->
                <div class="card mt-5 border-dark">
                    <div class="card-body">
                        <h3 class="h3 mb-4">Sign In</h3>
                        <form method="POST" action="" class="needs-validation" novalidate>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" class="form-control" required>
                                <div class="invalid-feedback">Email is invalid.</div>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" id="password" name="password" class="form-control" required>
                                <div class="invalid-feedback">Password field is invalid.</div>
                            </div>
                            <button type="submit" name="submit" class="btn btn-outline-primary col-12">Login</button>
                        </form>
                        <p class="mt-2" style="font-size: small;">
                            Not a Member? <a href="register.php">Register Now</a>
                        </p>
                    </div>
                </div>
            </div>
            <!-- <div class="col-md-6 justify-content-center my-5">
                <img src="assets/account.svg" class="img-fluid my-5" alt="IMG LANDING">
            </div> -->

        </div>
    </div>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    </body>
</html>