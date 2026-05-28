<?php include "db.php";?>
<table border="1">
<tr>
<th>Id</th>
<th>Name</th>
<th>Age</th>
<th>Mobile</th>
<th>Email</th>
<th>Password</th>
<th>Action</th>
</tr>

<?php
$result=$conn->query("SELECT*FROM user");

while($row=$result->fetch_assoc()){

?>

<tr>

<td><?php echo $row['id']; ?></td>

<td><?php echo $row['name']; ?></td>

<td><?php echo $row['age']; ?></td>

<td><?php echo $row['mobileno']; ?></td>

<td><?php echo $row['email']; ?></td>

<td><?php echo $row['password']; ?></td>

<td>

<a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>

<a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>

</td>

</tr>

<?php } 
?>

</table>
<a href="index.php">user</a>
</body>
</html>