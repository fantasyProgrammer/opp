 
 <?php 
 include("database.php");
 include("config.php");
 ?>
<?php 
$id = $_GET['id'];
$db = new dataBase();
$query = " SELECT * FROM db_tbl WHERE Id=$id";
$getData  = $db->select($query)->fetch_assoc();
if(isset($_POST['submit'])){
    $name   = mysqli_real_escape_string($db->link ,$_POST['Name']);
    $email  = mysqli_real_escape_string($db->link ,$_POST['email']);
    $skill  = mysqli_real_escape_string($db->link ,$_POST['Skill']);
    if($name == "" || $email == "" || $skill == ""){
            $error = "Feild must not be empty";
    }else{
        $query = " UPDATE db_tbl
        SET 
        Name = '$name',
        email = '$email',
        Skill = '$skill'
        WHERE Id = $id";
        $update = $db->update($query);
    }
}
?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
 </head>
 <body>
 <?php 
 if(isset($error)){
    echo "<span style='color:red'>".$error."</span>";
}
 ?>
 <form action="update.php?id=<?php echo $id?>" method="post">
     <table width="100%" border="1px solid #ddd";>
        <tr>
            <td>Name</td>
            <td><input type="text" name="Name" value= "<?php echo $getData['Name'] ?>" ></td>
        </tr>

        <tr>
            <td>Email</td>
            <td><input type="email" name="email" value = "<?php echo $getData['email']?>" ></td>
        </tr>

        <tr>
            <td>Skill</td>
            <td><input type="text" name="Skill" value = "<?php echo $getData['Skill']?>" ></td>
        </tr>

        <tr>
            <td></td>
            <td>
                <input type="submit" name="submit" value="update">
                <input type="reset" value="cancel">
                <input type="submit" name="delete" value="delete">
            </td>
        </tr>
     </table>
     </form>
     <a href="index.php">go back</a>
 </body>
 </html>