<?php
$host="localhost";
$username="root";
$password="";
$connection = mysql_connect($host,$username,$password); 

if (!$connection)

  {

  die('Could not connect: ' . mysql_error());

  }
mysql_select_db("readonrent", $connection);

if(!isset($_POST['submit'])){

$name = $_POST['name'];
$email = $_POST['email'];
$bookname = $_POST['bookname'];
$mobile= $_POST['mobile'];


if(empty($name)){
	echo "<script>alert('Order Failed');</script>";
}
else{
$sql = "INSERT INTO bookrequest(Name,email,book,mobile) VALUES 
('$name','$email','$bookname','$mobile')";
if (!mysql_query($sql,$connection))

  {

  die('Error: ' . mysql_error());

  }

echo"
<script>
alert('Request Placed Successfully,We will contact you soon!');
alert('Meanwhile,Checkout our other Collections!');
</script>";
echo"<script>
    window.location.href='http://localhost/JustRead/rent.html';
	</script>";

}
}


mysql_close($connection); // Closing Connection with Server
?>