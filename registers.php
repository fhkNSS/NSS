
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "root";
$db="mydb";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$conn->set_charset("utf8");
if ($_SERVER["REQUEST_METHOD"] == "POST")
{

$f_name=$_POST['f_name'];
$m_name=$_POST['m_name'];
$l_name=$_POST['l_name'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$e_id=$_POST['e_id'];
$password=$POST['password'];


}
$stmt = $conn->prepare("INSERT INTO s_personal (f_name,m_name,l_name,dob,gender,e_id,password)
 VALUES ( ?, ?, ?, ?,?,?)");

$stmt->bind_param('sssssss',$f_name,$m_name,$l_name,$dob,$e_id,$password);

$stmt->execute();

$sql="SELECT * FROM s_personal WHERE name='$name'";
$result=$conn->query($sql);
if ($result->num_rows == 1) 
{
	header("Location: homet.html");}
else

	echo $result->num_rows ; 
?>