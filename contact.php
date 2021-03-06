<?php session_start() ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="A project for Web Development Level 2">
    <meta name="author" content="Jericho, Irael, Fannie, Grace">
    <title>Scentology Lab || Contact Us!</title><!--Enter your title here-->

    <!--Styles-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="icon" href="assets/img/logo.png" type="image/gif" sizes="16x16">
    <link href="assets/css/main.css" rel="stylesheet">
    <link href="assets/css/navbar-hover.css" rel="stylesheet">
    <link href="assets/css/carousel.css" rel="stylesheet">
    <link href="assets/css/product-card.css" rel="stylesheet">

    <script src="https://kit.fontawesome.com/667efc23be.js" crossorigin="anonymous"></script>
    <style>
      footer{
        background: #000c13;
        color:#ffffff;
        text-align: center;
        padding: 20px 0 10px 0;
        margin-bottom: -50px;
      }
    </style>
  </head>

<body> 
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bgcolor">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.html"><img class="logo" src="assets/img/logo.png"><span class="title-logo sign__word"> Scentology &nbsp;Lab</span> <!--Enter logo here--></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ms-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link hoverable" id="len1" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link hoverable" id="len2" href="shop.html">Shop</a>
          </li>
          <li class="nav-item">
            <a class="nav-link hoverable" id="len3" href="services.html">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link hoverable" id="len" href="about.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link hoverable active" id="len5" aria-current="page" href="contact.php">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>

<main>
<div class="container marketing mx-auto">
  <div class="breadcrumb shadow bg-light" aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a class="text-decoration-none" href="index.html">Home</a></li>
      <li class="breadcrumb-item" aria-current="page">Contacts Us</li>
    </ol>
  </div><!--end of breadcrumb-->

  <!--Start of main content-->
  <?php
      if(isset($_SESSION['message'])): ?>
            <div class="alert alert-<?=$_SESSION['msg_type']?> alert-dismissible fade show text-center" role="alert" style="margin-bottom: -10px; margin-top:15px;">
              <?php
                echo $_SESSION['message'];
                unset($_SESSION['message']);
              ?>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
      <?php endif ?>
  <hr class="mb-5 mt-5" id="contact">
  <h2 class="featurette-heading mt-0" style="text-align: center;">Please send us a message if you wish to book an appointment or event with us.</h2>

  <!--Start of form-->
  <div class="row featurette">
    <div class="col-md-5 p-3">
      <img src="assets/img/about3.jpg" style="width: 500px; height: 500px;" class="shadow mb-5 bg-white rounded img-fluid">
    </div>
    <div class="col-md-7 order-lg-last order-first p-3">
      <form action="includes/sendEmail.php" class="g-3 needs-validation" method="POST" novalidate>
        <div class="mb-3">
          <label class="form-label lead"><strong>Name</strong></label>
          <input type="text" class="form-control" name="name" id="validationCustom01" placeholder="Your fullname" required>
            <div class="invalid-feedback">
              Please enter your fullname
            </div>
        </div>
        <div class="mb-3">
          <label class="form-label lead"><strong>Email address</strong></label>
          <input type="email" class="form-control" name="email" placeholder="Your email address" required>
            <div class="invalid-feedback">
              Please enter a valid email
            </div>
        </div>
        <div class="mb-3">
          <label class="form-label lead"><strong>Subject</strong></label>
          <input type="text" class="form-control" name="subject" id="validationCustom03" placeholder="Enter a subject" required>
          <div class="invalid-feedback">
            Please add a subject
          </div>
        </div>
        <div class="mb-3">
          <label class="form-label lead"><strong>Message</strong></label>
          <textarea class="form-control" rows="7" name="message" required></textarea>
          <div class="valid-feedback">
            
          </div>
        </div>
        <div class="mb-3 text-center">
          <button type="submit" class="btn btn-outline-danger float-end" name="send">Submit</button>
        </div>
      </form>
    </div>
  </div>
  <!--End of form-->

  <hr class="mb-5">
    <div class="row featurette">
      <div class="col-md-7">
        <h3 class="featurette-heading mb-3"><span class="text-muted">Connect with us</span></h3>
        <h5 class="lead">To book an appointment, feedbacks or other concerns:</h5>
        <p class="lead">Email Us at: <b>ScentologyLabPH@gmail.com</b></p>
        <p class="lead mt-0"><b>Contact Number: </b>+639952356002 or (046) 238 7033</p>

        <h4 class="mt-4"><span class="text-muted">Address</span></h4>
        <p class="lead">002 Unit 2A Sta. Rosa - Tagaytay Rd., Putingkahoy, Silang Cavite 4118</p>
      </div>
      <div class="col-md-5">
        <img src="assets/img/bldg.jpg" style="width: 500px; height: 500px;" class="shadow p-3 mb-5 bg-white rounded img-fluid">

      </div>
    </div><!--End of Content-->

  </div><!-- /.container -->

  </main>
  <!-- FOOTER -->
  <footer class="text-muted py-5 mt-5">
    <div class="container-fluid text-center">
      <p class="float-end mb-1">
        <a class="btn btn-outline-danger p-0" style="border: none; border-radius: 50%;" href="#"><img src="assets/img/back-to-top.png" width="50px"></a>
        <ul class="nav col-md-4 list-unstyled">
          <li class="ms-3"><a href="https://twitter.com/scentologylab"><i class="fab fa-2x fa-twitter"></i></a></li>
          <li class="ms-3"><a href="https://www.instagram.com/scentologylab_official/"><i class="fab fa-2x fa-instagram"></i></a></li>
          <li class="ms-3"><a href="https://web.facebook.com/ScentologyLabPHOfficial"><i class="fab fa-2x fa-facebook"></i></a></li>
          <li class="ms-3"><a href="https://mail.google.com/mail/u/0/#inbox"><i class="fas fa-2x fa-envelope-square"></i></i></a></li>
        </ul>
      </p>
      <span class="text-muted">Copyright &copy; 2021 Scentology Lab, Inc. All Rights Reserved</span>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  <script src="assets/js/validation.js"></script>
</body>
</html>
