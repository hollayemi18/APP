<?php session_start();
if(isset($_SESSION['username']) && isset($_SESSION['id'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
       <div class="container justify-content-center
     align-items-center" style="min-height:100vh;">
     <?php if($_SESSION['role']=='admin'){ ?>
     <?php  require 'app.php'; ?>
         <div class="card shadow" >
         <img src="../image/wp4048654.jpg" alt="" 
         width='100' height='100' class="card-img-top">
         <div class="card-body text-center">
         <div class="card-title">
         <?= $_SESSION['username']; ?>
         </div>
         <a href="logout.php" class="btn btn-dark">logout</a>
         </div>
     </div>
     <?php }else  { ?>
     <?php  require 'app.php'; ?>
         <div class="card shadow mt-5" >
         <div class="card-body text-center">
         <div class="card-title">
         <?= $_SESSION['username']; ?>
         </div>
         <a href="logout.php" class="btn btn-dark">logout</a>
         </div>
     </div
   <?php  } ?>
</body>
</html>
<?php }else{
    header('location:index.php');
    
} ?>