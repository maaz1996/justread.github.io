<?php session_start();
?>
<?php 
$errors = "";
$host="localhost";

$username="root";

$pass="";

$db_name="readonrent";

$table="login";

$conn = mysqli_connect($host, $username, $pass, $db_name);
// Check connection
if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}


if (!isset($_POST['submit'])) 
{
$userid = $_POST['userid'];
$password = $_POST['password'];

$sql="SELECT * FROM $table WHERE  userid = '$userid' AND password='$password'";

$result=mysqli_query($conn,$sql);

$count=mysqli_num_rows($result);


if ($count == 1)
{
	
	$_SESSION['signed_in'] = true;
	$_SESSION['userid'] = $userid;
	 
	 while ($row = mysqli_fetch_assoc($result))
	 {  $_SESSION['name']  = $row['Name'];
                       
	 }
	 
	 
	echo "<script>alert('Welcome $userid');</script>";
	echo"<script>
    window.location.href='http://localhost/JustRead/index.php';
	</script>";
/*	
echo "Welcome ";
echo $userid;
$_SESSION['userid'] = $userid;
$_SESSION['success']="Welcome to Just Read";
header('location:login.html');*/
}

else 
{
echo "<script>alert('Failure! Please login again');</script>";
	echo"<script>
    window.location.href='http://localhost/JustRead/login.html';
	</script>";
}


}
?>
