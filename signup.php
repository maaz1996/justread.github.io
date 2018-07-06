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
$name = $_POST['name'];
$userid = $_POST['userid'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$address = $_POST['address'];
$password = $_POST['password'];
$coupon = $_POST['coupon'];

if(empty($userid)||empty($name)||empty($mobile)||empty($address)||empty($email)||empty($password))
{
    $errors="You must fill all the entries ";
}
  else
{

 $sql = "INSERT INTO $table (userid,Name,password,address,email,mobile,coupon) VALUES ('$userid','$name','$password','$address','$email','$mobile','$coupon')";

}

if (mysqli_query($conn, $sql)) 
{
    echo "<script>alert('You Signed Successfully');</script>";
	echo"<script>
    window.location.href='http://localhost/JustRead/login.html';
	</script>";
} 
else 
{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}

?>
