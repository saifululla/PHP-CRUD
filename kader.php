<?php  
$conn = mysqli_connect("localhost", "root", "", "themezonee"); 

$query = "SELECT * FROM teamzone";
$adanprodan = mysqli_query($conn, $query);
if(mysqli_num_rows($adanprodan) > 0){
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

<table border="1px">
	<tr>
		<td>ID</td>
		<td>Name:</td>
		<td>Email:</td>
		<td>Edit</td>
		<td>Delete</td>


	</tr>
<?php
while($row = mysqli_fetch_assoc($adanprodan)){
	
?>




<tr>
		<td> <?php  echo $row['ID']; 
?> </td>
		<td><?php echo $row['name'];  ?></td>
		<td><?php echo $row['email']; ?></td>
		<td>    <a href='#'>Edit</a></td>
		<td>  <a href='delete-inline.php?id=<?php echo $row['ID']; ?>'>Delete</a> </td>


	</tr>
<?php } ?>

</table>
<?php }else {
	echo "<h2> No record found</h2>";
}
mysqli_close($conn);
?>



</body>
</html>

<?php


include "adnan.php";
?>