<?php 
require_once 'include/function.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login - test</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-info">
 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/ecommerc">Home <span class="sr-only">(current)</span></a>
      </li>
    </ul>
   <ul class="navbar-nav mr-right">
      <li class="nav-item ">
        <a class="nav-link" href="#">Login <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Register</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#">Log Out</a>
      </li>
   </ul>
  </div>
</nav>
      <br>
      <div class="container-fluid" >
          <div class="row">
        
          	<div class="col-sm-12">
          		<loadContent('pages','login');
          </div>
      </div>
<div>

          <script src="js/jquery3.3.1.js"></script>
          <script src="js/bootstrap.min.js"></script>
</body>
</html>