<?php 

echo $stdn = $_GET['id'];


$conn = mysqli_connect("localhost", "root", "", "themezonee"); 

$query =  "DELETE FROM teamzone WHERE id = {$stdn}";
$adanprodan = mysqli_query($conn, $query);



header("location: http://localhost/crud/kader.php");

mysqli_close($conn);





?>