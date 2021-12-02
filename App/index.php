
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APP</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div class="container pt-5 d-flex justify-content-center align-items-center" 
style="min-height:80vh;">
    <form action="conn/auth.php" class="shadow pt-2 p-5 border text-dark rounded"
    method="post" style="width:400px">
    <h1 class="text-center text-dark   p-3 shadow mb-4">Login</h1>
    <?php if(isset($_GET['error'])){ ?>
        <div class="alert alert-danger"  role="alert">
            <?=$_GET['error'] ?>
        </div>
    <?php } ?>
    <div class="form-group mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" name="username" class="form-control">
    </div>
     <div class="form-group  mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password"name="password" class="form-control">
    </div>
     <div class="form-group mb-3">
        <label for="" class="form-label">Role</label>
        <select name="role" id="" class="form-select mb-3">
            <option value="user">user</option>
            <option value="admin">admin</option>
        </select>
    </div>
    <button type="submit" class="btn btn-success btn-lg">login</button>
    <h6 class="text-center pt-5">Yet to register...... <a href="./view/sign.php"
     class="btn btn-dark text-white">Sign-up</a></h6>
    </form>
</div>
</body>
</html>