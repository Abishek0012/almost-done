<?php
  include "connection.php";

  if (!isset($_SESSION['username'])) {
  	//$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/a7dbdcfa2b.js" crossorigin="anonymous"></script>
  <title>Readssy</title>
</head>
<body>

<div style="height: 100%;
    width: 100%;
    background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),
    url(./images/book.jpeg); position:absolute; background-size: cover;">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Readssy</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="feature.php">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php" tabindex="-1" aria-disabled="true">Contact us</a>
          </li>
        </ul>
        <a href="logout.php" class="btn btn-outline-danger">Logout</a>
      </div>
    </div>
  </nav>

  <style>
    .checked {
        color: orange;
    }
    .container {
      margin-top: 50px;
    }
  </style>

  <div class="container">
    <div class="row">
            <div class="card" style="width: 18rem;" >
                <img src="./images/book-3.jfif" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Wicked Like A Wildfire</h5>
                  <p class="card-text">17-year-old twin sisters with magical abilities who set out to learn the truth behind their magic.</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;" >
                <div class="card-body">
                  <h5 class="card-title">Zara Williams</h5>
                  <p class="card-text">This book is a marvellous and engrossing fairy tale-like read for young and old alike! Set in Montenegro in a small town by the sea and against the mountains, two sisters and their mother have magical powers that they must keep secret.</p>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span><br><br><br>
                    <h5 class="card-title">Ariana Cole</h5>
                  <p class="card-text">I'm really, honestly tired of and terribly sorry for having to say this, especially when it's a book that offers such potential for diversity I'm talking about, but there's just no other way of putting it: good concept, poor execution.</p>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>
            </div>
        </div>
  </div>
</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>




</html>