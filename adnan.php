<?php



/**jiob vair code */
$conn = mysqli_connect("localhost", "root", "", "themezonee");
if(isset($_POST['submit'])){
$name = $_POST['name'];
$email = $_POST['email'];

$sql = "INSERT INTO teamzone(name, email) VALUES('$name' , '$email')";
if(mysqli_query($conn, $sql)){
	// echo "Insert success Full";
    ?>
    <script>
        alert('Insert success full');
    </script>
    <?php
}else{
	echo "Error";
}

}
//delete

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>


<h2>DATA ADD</h2>
<form action = "" method = "POST" >
         <table>
            <tr>
               <td>Name:</td>
               <td><input type = "text" name = "name"> 
               </td>
            </tr>
           
            <tr>
               <td>E-mail: </td>
               <td><input type = "text" name = "email"> 
               </td>
            </tr>	
            <td>
               <input type = "submit" name = "submit" value = "Submit"> 
            </td>
				
         </table>
			
      </form>




</body>
</html>