<html>
<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Power Theft</title>

  <!-- slider stylesheet -->
  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>
<body>
<div class="hero_area">
<header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <span>
              WBSEDCL
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item">
                  <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="about.html"> About Us </a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="power.php"> Complain
                     </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="rules.html">Rules
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="show_details.html"> Consumer  Details</a>
                </li>
              </ul>
              <!-- <div class="user_option">
                <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                  <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button> -->
                </form>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
</div>
<div class="box">
        <div class="img-box">
          <style>
            body
          {
            background-image : url(images/SNI.jpg);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
          }
          
        </style>
        </div>
    <form method="post" action="dbcon.php" enctype="multipart/form-data">
        <h1 align="center"><b>Complain Box</b></h1>
        <table align="center" width="70%" height="30%"><br><br> 
            <tr align="center">
                <th><h4>Consumer Name:</h4></th>
                <td><input type="text" name="consumer_name" required></td>
            </tr>
            <tr align="center">
                <th><h4>Consumer ID:</h4></th>
                <td><input type="number" name="consumer" required></td>
            </tr>
            <tr align="center">
                <th><h4>Phone No.:</h4></th>
                <td><input type="number" name="ph_no" required></td>
            </tr>
            <tr align="center">
                <th ><h4>Date:</h4></th>
                <!-- <td><input type="date" name="date" required></td> -->
                <readonly>
                <td style=""><input type="text" name="date" value="<?php
                  $currentDate = date('d-m-y');
                  
                  echo $currentDate;
                  ?>"
                 </readonly>
                </td>
            </tr>
            <tr align="center">
                <th><h4>Select Image File to Upload:</h4></th>
                <td><input type="file" name="fileToUpload" required></td>
            </tr>
            <tr align="center">
                <th><h4>Incident Location:</h4></th>
                <td><input type="text" name="address" required></td>
            </tr>
            <tr align="center">
                <th><h4>Reason:</h4></th>
                <td><input type="text" name="reason" required></td>
            </tr>
        </table><br>
        <center> 
            <input type="submit" value="Submit"><br><br>
        </center>
    </form>
</body>
</html>
