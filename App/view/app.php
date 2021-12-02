<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
    <div class="container d-flex justify-content-center
     align-items-center">
     <?php require '../conn/db.php';
     require '../conn/appauth.php';
     $query = "select * from data";
     $result = mysqli_query($dbname,$query);
    
     ?>
     <table class="shadow table-bordered m-3 text-center" >
        <thead>
            <tr>
                <th class="p-1">TODO</th>
                <th class="p-1">CONTENT</th>
                <th class="p-1">DATE</th>
                <th class="p-1">EDIT</th>
                <th class="p-1">DELETE</th>

            </tr>
        </thead>
        <tbody class="p-3">
            <?php while($row = mysqli_fetch_assoc($result)){ ?>
                <tr class="">
                   <td class="p-1"><?php echo $row['Todo']; ?></td>
                   <td class="p-1"><?php echo $row['content']; ?></td>
                   <td class="p-1"><?php echo $row['date']; ?></td>
                   <td><a href="../view/home.php?edit=<?php echo $row['id']; ?>"
                    class="btn btn-info btn-sm">Edit</a></td>
                    <td><a href="../view/home.php?delete=<?php echo $row['id']; ?>"
                    class="btn btn-danger btn-sm">Delete</a></td>
                </tr>
            <?php } ?>
        </tbody>
     </table>
     </div>    
    <div class="container d-flex justify-content-center align-items-center">
          <form action="../conn/appauth.php" method='post'
        style="width:300px" class="shadow m-3 p-4">
        <h4 class="text-center mb-4 text-dark">ADD TO DO LIST</h4>
        <input type="hidden" name="id" value = <?php echo $id; ?>>
            <div class="form-group">
                <label for="" class="form-label">TODO</label>
                <input type="text" name="todo" class="form-control"
                 value= "<?php echo $todo ?>"  required>
            </div>
            <div class="form-group">
                <label for="" class="form-label">CONTENT</label>
                <input type="text" name="content" class="form-control" value= "<?php echo $content ?>" >
            </div>
            <?php if($update === TRUE){ ?>
                <button type="submit" name="update"
             class="btn btn-warning mt-3 btn-sm">update</button>
            <?php }else {?>
                <button type="submit" name="submit"
             class="btn btn-success mt-3 btn-sm">submit</button>
            <?php } ?>
        </form>
    </div>
</body>
</html>