 
 <?php 
 include("database.php");
 include("config.php");
 ?>
<?php 
$db = new dataBase();
if(isset($_POST['submit'])){
    $name   = mysqli_real_escape_string($db->link ,$_POST['Name']);
    $email  = mysqli_real_escape_string($db->link ,$_POST['email']);
    $skill  = mysqli_real_escape_string($db->link ,$_POST['Skill']);
    if($name == "" || $email == "" || $skill == ""){
            $error = "Feild must not be empty";
    }else{
        $query = "INSERT INTO db_tbl(Name,email,skill) values('$name','$email', '$skill')";
        $create = $db->insert($query);
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
 <form action="" method="post">
     <table width="100%" border="1px solid #ddd";>
        <tr>
            <td>Name</td>
            <td><input type="text" name="Name" placeholder="Enter your name" ></td>
        </tr>

        <tr>
            <td>Email</td>
            <td><input type="email" name="email" placeholder="Enter your email" ></td>
        </tr>

        <tr>
            <td>Skill</td>
            <td><input type="text" name="Skill" placeholder="Enter your Skill" ></td>
        </tr>

        <tr>
            <td></td>
            <td>
                <input type="submit" name="submit" value="submit">
                <input type="reset" value="cancel">
            </td>
        </tr>
     </table>
     </form>
     <a href="index.php">go back</a>
 </body>
 </html>