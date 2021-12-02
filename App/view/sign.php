
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APP</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
<div class="container pt-5 d-flex justify-content-center align-items-center" 
style="min-height:80vh;">
    <form action="../conn/authsign.php" method="post" class="shadow pt-3 p-5 border text-dark rounded"
    method="post" style="width:400px">
    <h1 class="text-center text-dark  p-3 shadow mb-4">Register</h1>
    <?php if(isset($_GET['error'])) { ?>
        <div class="alert alert-danger" role="alert">
            <?=$_GET['error'] ?>
        </div>
    <?php } ?>
    <?php if(isset($_GET['wrong'])) { ?>
        <div class="alert alert-danger" role="alert">
            <?=$_GET['wrong'] ?>
        </div>
    <?php } ?>
    <div class="form-group mb-3">
        <label for="" class="form-label">Username</label>
        <input type="text" name="name" class="form-control">
    </div>
     <div class="form-group  mb-3">
        <label for="" class="form-label">Password</label>
        <input type="password" name='pass' class="form-control">
    </div>
     <div class="form-group mb-3">
        <label for="" class="form-label">Role</label>
        <select name="role" id=""  class="form-select mb-3">
            <option value="user">User</option>
            <option value="admin">Admin</option>
        </select>
    </div>
    <button type="submit" class="btn btn-success btn-lg  " name="submit">Register</button>
    <h6 class="text-center pt-5">Already registered..... 
        <a href="../index.php" class="btn btn-dark text-white"> Login</a></h6>
    </form>
</div>
</body>
</html>