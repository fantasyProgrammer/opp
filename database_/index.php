 
 <?php 
 include("database.php");
 include("config.php");
 ?>
<?php 
$db = new dataBase();
$query = " SELECT * FROM db_tbl";
$read  = $db->select($query);
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
if(isset($_GET['msg'])){
    echo "<span style='color:green'>".$_GET['msg']."</span>";
}
?>
     <table width="100%" border="1px solid #ddd";>
        <tr>
            <th width="25%">name</th>
            <th width="25%">Email</th>
            <th width="25%">skill</th>
            <th width="25%">action</th>
        </tr>
        <?php if($read){?>
            <?php while($row = $read->fetch_assoc()){?>
                <tr>
                    <td><?php echo $row["Name"];?></td>
                    <td><?php echo $row["email"];?></td>
                    <td><?php echo $row["Skill"];?></td>
                    <td><a href="update.php?id=<?php echo urlencode($row['Id']); ?>">Ëdit</a></td>
                </tr>
            <?php }?>

            <?php }  else {?>

            <?php }?>
     </table>
     <a href="create.php">submit value</a>
 </body>
 </html>