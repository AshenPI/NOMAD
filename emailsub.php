<?php 

$server = 'localhost';
$username = 'root';
$password = '';
$dbname  = 'nomad';
$conn = new mysqli($server, $username, $password, $dbname);

if($conn ->connect_error){
    die("Connection Failed: " . $conn->connect_error);
}

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
  <div class="p-5 text-center ">
    <h1 class="mb-3"> <span>Sign for the hike</span></h1>
    

  </div>
  <!-- Hero -->
  
  <div class="container shadow p-3 mb-5 bg-white rounded">
    <form method="post">
       
      <div class="form-group">
        <label for="exampleInputEmail1"> Please Write your Email address </label>

        <input name="email" required type="email" class="form-control" id="inputfield" aria-describedby="emailHelp" placeholder="enter Email">
        <br>
      
        <div class="row d-flex justify-content-center align-content-center  ">
            <button type="submit" onclick="EmailSend();" class="btn  btn-outline-dark">Submit</button>
        </div>
      </div>
</div>

<script type="text/javascript">
            function EmailSend(){
                var inputvalue = document.getElementById("inputfield").value;
               alert("Email Sent To " + inputvalue);
            }
        </script>
 <footer class="bg-light text-center text-lg-start">
  <!-- Copyright -->
  <div class="text-center p-3 bg-dark" ">
   <div id=""><h4></h4></div> 
  </div>
</footer>
</body>
</html>

<?php

?>