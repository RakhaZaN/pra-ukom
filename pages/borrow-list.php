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
        <a class="navbar-brand" href="#">Menu</a>
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
                        <a class="dropdown-item" href="login.html">Logout</a>
                        <a class="dropdown-item" href="change-password.html">Change Password</a>        
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
                        <a class="dropdown-item" href="borrow-list.html">Borrow</a>
                    </div>
                </li>
                    
            </ul>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h3 class="mt-3 mb-5 text-center">Borrowing Books</h3>
                <a href="#" id="btnAdd" class="btn btn-primary">+ Borrow Books</a>
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
                            <th>Borrow ID</th>
                            <th>Name</th>
                            <th>Borrow Date</th>
                            <th align="center">Total Book</th>
                            <th>Due Date</th>
                            <th>Total Deposit</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>                      
                    </thead>
                    <tbody>
                        <tr>
                            <td>BRW0001</td>
                            <td>Subandi</td>
                            <td>01-02-2021</td>
                            <td>2</td>
                            <td>15-02-2021</td>
                            <td>Rp. 20.000</td>
                            <td><span class="badge badge-info">Borrowing</span></td>
                            <td>
                                <a href="" class="btn btn-sm btn-outline-primary">Detail</a>
                            </td>
                        </tr>
                        <tr>
                            <td>BRW0002</td>
                            <td>Subandi</td>
                            <td>01-02-2021</td>
                            <td>2</td>
                            <td>15-02-2021</td>
                            <td>Rp. 20.000</td>
                            <td><span class="badge badge-success">Returned</span></td>
                            <td>
                                <a href="" class="btn btn-sm btn-outline-primary">Detail</a>
                            </td>
                        </tr>
                        <tr>
                            <td>BRW0003</td>
                            <td>Bagus</td>
                            <td>01-02-2021</td>
                            <td>3</td>
                            <td>15-02-2021</td>
                            <td>Rp. 30.000</td>
                            <td><span class="badge badge-danger">Unpaid Deposit</span></td>
                            <td>
                                <a href="" class="btn btn-sm btn-outline-primary">Detail</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-10">
                <h4 class="text-center">Detail</h4>
                <table class="table bg-white" id="tableData">
                    <thead class="thead-dark">
                        <tr>
                            <th>Book ID</th>
                            <th>Name</th>
                            <th>Qty</th>
                            <th>Deposit</th>
                            <th>Total Deposit</th>
                        </tr>                      
                    </thead>
                    <tbody>
                        <tr>
                            <td>BRW0001</td>
                            <td>Subandi</td>
                            <td>1</td>
                            <td>2</td>
                            <td>Rp. 10.000</td>
                        </tr>
                        <tr>
                            <td>BRW0002</td>
                            <td>Subandi</td>
                            <td>1</td>
                            <td>2</td>
                            <td>Rp. 10.000</td>
                        </tr>
                        <tr>
                            <td>BRW0003</td>
                            <td>Bagus</td>
                            <td>1</td>
                            <td>Rp. 10.000</td>
                            <td>Rp. 10.000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    </body>
</html>