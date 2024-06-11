<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Library Management</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="http://localhost/library%20event%20and%20subscription/viewprofile.php">profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Books</a><!DOCTYPE html>
                    <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <title>Book View</title>
                        <!-- Bootstrap CSS -->
                        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
                    </head>
                    <body>
                       
                        <!-- Bootstrap Bundle with Popper -->
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
                    </body>
                    </html>
                        
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{%url 'insertmember'%}">member</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="jumbotron text-center bg-primary text-white py-5">
    <div class="container">
        <h1 class="display-4">Welcome to Our Library <?php echo $_SESSION['email'];?> </h1>
        <p class="lead">Explore a world of knowledge and adventure.</p> 
        <a href="#" class="btn btn-light btn-lg">Get Started</a>
    </div>
</div>

<div class="container py-5">
    <div class="row">
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">view Books</h5>
                    <p class="card-text">Find books across various genres and categories.</p>
        
                    <a href="http://localhost/library%20event%20and%20subscription/viewbook.php" class="btn btn-primary" >Browse Now</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Stay Updated</h5>
                    <p class="card-text">Get the latest updates on new arrivals and events.</p>
                    <a href="http://localhost/library%20event%20and%20subscription/subscription.php" class="btn btn-primary">Subscribe</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Event</h5>
                    <p class="card-text">Get the latest updates on new arrivals and events.</p>
                    <a href="http://localhost/library%20event%20and%20subscription/event.php" class="btn btn-primary">check event</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Author</h5>
                    
                    <a href="http://localhost/library%20event%20and%20subscription/authorview.php" class="btn btn-primary">View Author</a>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="bg-light text-center text-lg-start">
    <div class="container p-4">
        <div class="row">
            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                <h5 class="text-uppercase">Contact Us</h5>
                <p>
                    Address: 123 Library St, Booktown, BK 56789 <br>
                    Phone: (123) 456-7890 <br>
                    Email: info@library.com
                </p>
            </div>
            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                <h5 class="text-uppercase">Follow Us</h5>
                <a href="#" class="btn btn-outline-dark btn-floating m-1" role="button">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="btn btn-outline-dark btn-floating m-1" role="button">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#" class="btn btn-outline-dark btn-floating m-1" role="button">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#" class="btn btn-outline-dark btn-floating m-1" role="button">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="text-center p-3 bg-dark text-white">
        &copy; 2024 Library Management System
    </div>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
</body>
</html>
