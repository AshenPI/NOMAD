<?php 

$server = 'localhost';
$username = 'root';
$password = '';
$dbname  = 'nomad';
$conn = new mysqli($server, $username, $password, $dbname);

if($conn ->connect_error){
    die("Connection Failed: " . $conn->connect_error);
}

session_start();

$select1 = mysqli_query( $conn, "SELECT description FROM products WHERE id = 1");

$row1 = mysqli_fetch_row($select1);

$select2 = mysqli_query( $conn, "SELECT description FROM products WHERE id = 2");

$row2 = mysqli_fetch_row($select2);

$select3 = mysqli_query( $conn, "SELECT description FROM products WHERE id = 3");

$row3 = mysqli_fetch_row($select3);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website</title>
    <link rel="stylesheet" href="style.css">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nabla&display=swap" rel="stylesheet">
</head>
<body>
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
          <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
          <span  class="fs-4"> <h1 style="font-size: 50px;">NOMAD</h1></span>
        </a>
  
        <ul class="nav nav-pills">
          <li class="nav-item "><a href="./index.html" class="bg-dark text-white nav-link active" aria-current="page">Home</a></li>
          <li class="nav-item"><a href="./Signup.php" class="text-dark nav-link">Signup</a></li>
          <li class="nav-item"><a href="./About.html" class="text-dark nav-link">About us</a></li>
          <li class="nav-item"><a href="./Login.php" class="text-dark nav-link">Login</a></li>
          <li class="nav-item"><a href="./products.php" class="text-dark nav-link">Products</a></li>
        </ul>
      </header>

       <!-- Hero -->
         
       <!-- 
       <div class="container">
       <h1 class="text-center">Subscriptions</h1>
       <br>
       <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Basic Tier</h5>
        <p class="card-text">The basic Tier includes hiking and a guide for the trip.</p>
        <a href="#" class="btn btn-primary">Go Basic</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
</div>
<br>
<br>
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">The basic Tier .</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>

</div>

       </div>
-->
<div class="container">
      <div class="card-deck mb-3 text-center">
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h3 class= " font-weight-normal">Basic</h3>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$200 </h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li> <?php 
                $con1 = implode(',', $row1);
                echo $con1;
              //print_r($row1);

                 ?></li>
             
            </ul>
            <a href="#" type="button" class="gg">Sign with us</a>
          </div>
        </div>
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h3 class="my-0 font-weight-normal">Silver</h3>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$400 </h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li><?php 
              $con2 = implode(',' , $row2);
              echo $con2;
              ?></li>
         
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-primary">Get started</button>
          </div>
        </div>
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h3 class="my-0 font-weight-normal">Gold</h3>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$800 </h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li><?php 
              $con3 = implode(',' , $row3);
              echo $con3;
              ?></li>
            
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-primary">Contact us</button>
          </div>
        </div>
      </div>
</div>
  <footer class="bg-light text-center text-lg-start">
    <!-- Copyright -->
    <div class="text-center p-3 bg-dark" ">
     <div id="footer"><h4></h4></div> 
    </div>
  </footer>
  <style>
        .gg{
      background-image: linear-gradient(
        to right,
        #dfb355,
        #e29e50 50%,
        #000 50%
      );
      background-size: 200% 100%;
      background-position: -100%;
      display: inline-block;
      padding: 5px 0;
      position: relative;
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      transition: all 0.3s ease-in-out;
    }
    
    .gg:before {
      content: '';
      background: #ebe15a;
      display: block;
      position: absolute;
      bottom: -3px;
      left: 0;
      width: 0;
      height: 3px;
      transition: all 0.3s ease-in-out;
    }
    
    .gg:hover {
     background-position: 0;
    }
    
    .gg:hover::before {
      width:100%;
    }
  </style>
    
</body>
</html>