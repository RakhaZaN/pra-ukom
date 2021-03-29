<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>24 Library</title>
    </head>
    <body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">24 Library |</a>
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
    </nav>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h3 class="mt-3 mb-5 text-center">Master Book</h3>
                <a href="#" id="btnAdd" class="btn btn-primary">+ Add Data</a>
                <div class="row justify-content-between">
                    <form action="" class="col-md-4 form-inline my-3">
                        <div class="form-group">
                            <input type="text" class="form-control mr-1" placeholder="Search..">
                            <button type="submit" class="btn btn-outline-secondary">Search</button>
                        </div>
                    </form>

                    <form action="" class="col-md-4 form-inline">
                        <div class="input-group">
                            <input type="text" class="form-control rounded-left" placeholder="column">
                            <div class="input-group-append mr-1">
                                <select name="" id="" class="custom-select border-left-0 rounded-right">
                                    <option value="">Ascending</option>
                                    <option value="">Descending</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-outline-secondary">Order</button>
                        </div>
                        
                    </form>
                </div>
                
                <table class="table bg-white" id="tableData">
                    <thead class="thead-dark">
                        <tr>
                            <th>Book ID</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Author</th>
                            <th>Book Qty</th>
                            <th>Action</th>
                        </tr>                      
                    </thead>
                    <tbody>
                        <tr>
                            <td>B0001</td>
                            <td>Calculus Basic</td>
                            <td><span class="badge badge-secondary">Non Fiction</span></td>
                            <td>Setyo Budianto</td>
                            <td>6</td>
                            <td>
                                <a href="#" id="btnEdit" class=" btn btn-warning btn-sm">Edit</a>
                                <a href="#" id="btnDelete" class=" btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>B0002</td>
                            <td>Harry Potter</td>
                            <td><span class="badge badge-info">Fiction</span></td>
                            <td>Setyo Budianto</td>
                            <td>6</td>
                            <td>
                                <a href="#" id="btnEdit" class=" btn btn-warning btn-sm">Edit</a>
                                <a href="#" id="btnDelete" class=" btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalBook" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                <h4 class="modal-title text-white" data-toggle='modal' id="titel1">
                                ADD DATA BOOK
                </h4>
                <h4 class="modal-title text-white" data-toggle='modal' id="titel2">
                                EDIT DATA BOOK
                </h4>
                </div>
                <div class="modal-body">
                <div class="form-group row">
                    <label for="bookId" class="col-md-2 col-form-label">Book ID</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control" id="bookId" autocomplete="off"> 
                    </div>
                    <label for="bookName" class="col-md-2 col-form-label">Book Name</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control" id="bookName" autocomplete="off">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="author" class="col-md-2 col-form-label">Author</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control" id="author" autocomplete="off"> 
                    </div>
                    <label for="publishedDate" class="col-md-2 col-form-label">Published</label>
                    <div class="col-md-4">
                        <input type="date" class="form-control" id="publishedDate" autocomplete="off">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="category" class="col-md-2 col-form-label">Category</label>
                    <div class="col-md-4">
                        <select name="" id="category" class="custom-select">
                            <option value="">-</option>
                            <option value="Fiction">Fiction</option>
                            <option value="Non Fiction">Non Fiction</option>
                        </select>
                    </div>
                    <label for="qty" class="col-md-2 col-form-label">Qty</label>
                    <div class="col-md-4">
                        <input type="number" class="form-control" id="qty" autocomplete="off">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="location" class="col-md-2 col-form-label">Location</label>
                    <div class="col-md-4">
                        <input type="text" id="location" class="form-control" required>
                    </div>
                    <label for="photo" class="col-md-2 col-form-label">Photo</label>
                    <div class="col-md-4">
                        <input type="file" class="form-control" id="photo" autocomplete="off">
                    </div>
                </div>

                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" id="btnSave">Save</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <script>
        $('#btnAdd').click(function() {
            $('#modalBook').modal('show');
            $("#titel1").show();
            $("#titel2").hide();
        })

        $('#tableData tbody').on('click', '#btnEdit', function() {
            console.log('edit');
            $('#modalBook').modal('show');
            $("#titel2").show();
            $("#titel1").hide();
        })
    </script>
    </body>
</html>