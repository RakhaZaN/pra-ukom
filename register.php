<?php 
include_once 'function/function.php';
    if (isset($_POST['submit'])) {
        if (register($_POST) > 0) {
            echo "<script>
                    alert('Success Registered');
                    document.location.href='login.php';
                </script>";
        } else {
            echo "<script>
                    alert('Failed Registered : {$_SESSION['error_message']}');
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

    <title>Register Page | 24 Library</title>
    </head>
    <body>

    <div class="container">
        <div class="row justify-content-center">
            
            <div class="col-md-5">
                <h1 class="text-center mt-3 mb-5">24 Library</h1>

                <div class="card border-dark">
                    <form method="POST" action="" class="needs-validation" novalidate>

                    <div class="card-body">
                        <h3 class="h3 mb-4">Register</h3>

                            <div class="form-group row">
                                <label for="name" class="col-md-3">Name</label>
                                <div class="col-md-9">
                                    <input type="text" id="name" name="name" class="form-control" required>
                                    <div class="invalid-feedback">Name field is required.</div>
                                </div>                               
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-3">Gender</label>
                                <div class="col-md-9">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Male" checked>
                                    <label class="form-check-label" for="inlineRadio1">Male</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Female">
                                    <label class="form-check-label" for="inlineRadio2">Female</label>
                                    </div>
                                    <div class="invalid-feedback">Please select a valid gender.</div>
                                </div>                               
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-md-3">Email</label>
                                <div class="col-md-9">
                                    <input type="email" id="email" name="email" class="form-control" required>
                                    <div class="invalid-feedback">Email is invalid.</div>
                                </div>                             
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-md-3">Password</label>
                                <div class="col-md-9">
                                    <input type="password" name="password" id="password" class="form-control" required>
                                    <div class="invalid-feedback">Password field is required.</div>
                                </div>                             
                            </div>
                            <div class="form-group row">
                                <label for="handphone" class="col-md-3">Phone</label>
                                <div class="col-md-9">
                                    <input type="text" name="handphone" id="handphone" class="form-control" required>
                                    <div class="invalid-feedback">Handphone field is required.</div>
                                </div>                             
                            </div>
                            <div class="form-group row">
                                <label for="address" class="col-md-3">Address</label>
                                <div class="col-md-9">
                                    <textarea name="address" id="address" cols="30" rows="3" class="form-control" required></textarea>
                                    <div class="invalid-feedback">Address field is required.</div>
                                </div>                             
                            </div>
                            <div class="text-right">
                                <a href="login.php" class="btn btn-outline-secondary">Cancel</a>
                                <button type="submit" name="submit" class="btn btn-primary">Create Account</button>
                            </div>
                        
                    </div>
                    
                    </form>
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