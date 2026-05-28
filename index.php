<?php include "db.php";?>
<!DOCTYPE html>
<link rel="stylesheet" href="style.css">
<body>
    <h1>REGISTRATION FORM</h1>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<form method="POST">

<input type="text" name="name" id="name"placeholder="Enter Name" require>

<br>

<input type="number" name="age" id="age" placeholder="Enter Age">
<br>

<input type="number" name="mobileno" id="mobileno" placeholder="Enter Mobile">

<br>

<input type="email" name="email" id="email" placeholder="Enter Email">

<br>

<input type="password" name="password" id="password" placeholder="Enter Password">

<br>

<button type="submit" name="submit" id="btn1">Submit</button>
<div id="result"></div>

</form>
<?php
if(isset($_POST['submit'])){

$name=$_POST['name'];
$age=$_POST['age'];
$mobileno=$_POST['mobileno'];
$email=$_POST['email'];
$password=$_POST['password'];

$sql="INSERT INTO user(name,age,mobileno,email,password) VALUES ('$name','$age','$mobileno','$email','$password')";

if($conn->query($sql)){

header("Location:login.php");
exit();

}else{

echo "Error";

}

}
?>
<script>

$("#btn1").click(function(){

let name=$("#name").val();
let age=$("#age").val();
let mobileno=$("#mobileno").val();
let email=$("#email").val();
let password=$("#password").val();

$.ajax({

url:"index.php",

type:"POST",

data:{
    name:name,
    age:age,
    mobileno:mobileno,
    email:email,
    password:password
},

success:function(data){

$("#result").html(data);

}

});

});
</script>
</body>
</html>