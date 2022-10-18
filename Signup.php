<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOMAD</title>
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
    <h1 class="mb-3"> <span>Sign up</span></h1>
  
  </div>
  <!-- Hero -->

 <div class="container shadow p-3 mb-5 bg-white rounded">
    <form action="./insert.php" method="post">
    
    <div class="form-group">
          
          <label for="exampleInputEmail1">Email address</label>
          <input name="email" required type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
          
        </div>
        
        <div class="form-group">
            <label for="exampleInputEmail1">Uername</label>
            <input name="username" required  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username">
            
          </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input onkeyup="check();" name="password" required type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Confirm Password </label>
            <input onkeyup="check();" name="passwordcheck" required type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
            <div id="message"> </div> 
        </div>
        <p>Already have an account ? <a class="gg" href="./Login.php">Login Here</a></p>
        <br> 
        <div class="row d-flex justify-content-center align-content-center  ">
            <button type="submit" class="btn  btn-outline-dark">Submit</button>
        </div>
        
      </form>
 </div>
 
 <script src="./app.js"></script>

 <footer class="bg-light text-center text-lg-start">
    <!-- Copyright -->
    <div class="text-center p-3 bg-dark" ">
     <div id=""><h4></h4></div> 
    </div>
  </footer>
  <style>
    html {
      overflow: scroll;
      overflow-x: hidden;
  }
  ::-webkit-scrollbar {
      width: 0;  /* Remove scrollbar space */
      background: transparent;  /* Optional: just make scrollbar invisible */
  }
  /* Optional: show position indicator in red */
  ::-webkit-scrollbar-thumb {
      background: #FF0000;
  }
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