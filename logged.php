<?php 
include('./db_connection.php');

session_start();

$Email = $_POST['email'];
$username = $_POST['username'];
$pass  = $_POST['password'];


$select = mysqli_query($conn ,"SELECT * FROM users WHERE Username ='$username' AND Password = '$pass' AND Email = '$Email'  " );
$row = mysqli_fetch_array($select);


if(is_array($row)){
    $_SESSION["Username"] = $row["Username"];
    $_SESSION["Password"] = $row["Password"];
   
}else{
    ?>
    <script type="text/javascript">
        alert("Invalid username or password");
        window.location.href = "./Login.php";

    </script>
    <?php
}

if(isset($_SESSION["Username"])){
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
    <h1 class="mb-3"> <span>Welcome</span>  <?php echo $_SESSION["Username"];?> </h1>
    

  </div>
  <!-- Hero -->
  <div class="text-center">
            <h3>Edit your profile</h3>
        </div>
  <div class="container shadow p-3 mb-5 bg-white rounded">
    <form action="./update.php" method="post">
       
    <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input name="email" required type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=<?php echo $Email  ?>>
          
        </div>
        
        <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input name="username" required  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=<?php echo $username ?>>
            
          </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input  name="password" required type="password" class="form-control" id="exampleInputPassword1" placeholder=<?php echo $pass ?>>
        </div> 
        <br> 
     <a class="  btn btn-danger text-white " href="./RemoveUser.php">Delete Your Account</a>
       <br>
       <br>
       <br>
        <div class="row d-flex justify-content-center align-content-center  ">
            <button type="submit" class="btn  btn-outline-dark">Submit</button>
        </div>
        
      </form>
      </div>


    

<div class="p-4 text-center">
<h1>Click here to logout <a href="./logout.php">Logout</a></h1>
</div>

  <footer class="bg-light text-center text-lg-start">
    <!-- Copyright -->
    <div class="text-center p-3 bg-dark" ">
     <div id="footer"><h4></h4></div> 
    </div>
  </footer>
</body>
</html>


    <?php
}
?>

