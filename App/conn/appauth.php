<?php 
require 'db.php';
$todo ="";
$content ="";
$update = FALSE;
$id = 0;

if(isset($_POST['submit'])){
    $todo =$_POST['todo'];
    $content =$_POST['content'];
    if(!empty($todo) && !empty($content)){
        $query = "insert into data(todo,content) values('$todo','$content')";
        $result = mysqli_query($dbname,$query);
        header('location:../view/home.php');
    }
}
if(isset($_GET['delete'])){
    $id_del = $_GET['delete'];
    $query="delete from data where id = '$id_del' ";
    $result = mysqli_query($dbname,$query);
    header('location:../view/home.php');
}
if(isset($_GET['edit'])){
    $id_edit = $_GET['edit'];
    $query = "select * from data where id = '$id_edit' ";
    $result = mysqli_query($dbname,$query);
    $update = TRUE;
    if(mysqli_num_rows($result)===1){
        $row = mysqli_fetch_array($result);
        $todo = $row['Todo'];
        $content = $row['content'];
        $id = $row['id'];
    }
}
if(isset($_POST['update'])){
    $id  = $_POST['id'];
     $todo =$_POST['todo'];
    $content =$_POST['content'];
    $query = "update data set Todo ='$todo' ,content = '$content' where
    id = '$id' ";
    $result = mysqli_query($dbname,$query);
        header('location:../view/home.php');

}
?>