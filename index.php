<?php 
require_once 'include/function.php';
require_once 'include/classes/login_user.php';
 require_once 'include/classes/database.php';
$test = login_user::getidUser('pera','12121');
// var_dump($test);
// exit();
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
        <a class="nav-link" href="/login">Home <span class="sr-only">(current)</span></a>
      </li>
    </ul>
   <ul class="navbar-nav mr-right">
       

      <li class="nav-item ">
        <a class="nav-link" href="index.php?pages=login">Login <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?pages=register">Register</a>
      </li>
   </ul>
  </div>
</nav>
      <br>
      <div class="container-fluid" >
          <div class="row">
        
          	<div class="col-sm-12">
          		<?php loadContent('pages','search') ?>
          </div>
      </div>
<div>

          <script src="js/jquery3.3.1.js"></script>
          <script src="js/bootstrap.min.js"></script>
</body>
</html>