<link rel="stylesheet" href="style.css">
<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
include "db.php";

$id=isset($_GET['id']) ? intval($_GET['id']):0;

$result=$conn->query("SELECT * FROM user WHERE id=$id");

$row=$result->fetch_assoc();
if(!$row){

    echo "error";
}

?>
<form method="POST">
<input type="hidden" name="user_id" value="<?php echo $row['id'];?>"><br>
<input type="text" name="name" value="<?php echo $row['name'];?>"><br>
<input type="number" name="age" value="<?php echo $row['age'];?>"><br>
<input type="number" name="mobileno" value="<?php echo $row['mobileno'];?>"><br>
<input type="email" name="email" value="<?php echo $row['email'];?>"><br>
<input type="password" name="password" value="<?php echo $row['password'];?>">
<button type="submit" name="update">Update</button>
</form>
<?php
if(isset($_POST['update'])){
$name=$_POST['name'];
$age=$_POST['age'];
$mobileno=$_POST['mobileno'];
$email=$_POST['email'];
$password=$_POST['password'];

$sql="UPDATE user SET name='$name',age='$age',mobileno='$mobileno',email='$email',password='$password' WHERE id=$id";

if($conn->query($sql)){

header("Location:view.php");
exit();

}else{

echo "Error ".$conn->error;

}

}
?>


</body>

</html>