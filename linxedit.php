<!DOCTYPE html>
<?php
require_once("func.php");

if(isset($_GET['del'])){
    $id=$_GET['del'];
    $sql="DELETE FROM linx WHERE id=$id";
    $result=mysqli_query($conn, $sql);
    header("Location: index.php");
    exit();
}

if(isset($_POST['updatebtn'])){
    $id=$_POST['id'];
    $url=$_POST['url'];
    $desc=$_POST['desc'];
    $sql="UPDATE linx SET url='$url', description='$desc' WHERE id=$id";
    $result=mysqli_query($conn, $sql);
    header("Location: index.php");
    exit();
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
require_once("assets/_header.php");
require_once("assets/_nav.php");
?>
<h2>Redigera eller ta bort länk</h2>
<?php
if(isset($_GET['edit'])){
    $id=$_GET['edit'];
    $sql="SELECT * FROM linx WHERE id=$id";
    $result=mysqli_query($conn, $sql);
    $row=mysqli_fetch_assoc($result);
    ?>
    <form action="linxedit.php" method="post">
        <input type="hidden" name="id" value="<?=$row['id']?>">
        <input type="text" name="url" value="<?=$row['url']?>">
        <input type="text" name="desc" value="<?=$row['description']?>">
        <input type="submit" value="Uppdatera" name="updatebtn">
    </form>
    <?php
}  
 ?>
    
<?php
require_once("assets/_footer.php");
?>
</body>
</html>