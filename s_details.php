
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
$nationality=$_POST['nationality'];
$country=$_POST['country'];
$id_number=$_POST['id_number'];
$contact=$_POST['contact'];
$e_id=$_POST['e_id'];
$city=$_POST['city'];
$province=$_POST['province'];
$g_name=$_POST['g_name'];
$g_contact=$_POST['g_contact'];
$s_contact=$_POST['s_contact'];
$f_aid=$_POST['f_aid'];

}
$stmt = $conn->prepare("INSERT INTO s_details (f_name,m_name,l_name,dob,gender,nationality,country,id_number,contact,e_id,city,province,g_name,g_contact,s_contact,f_aid)
 VALUES ( ?,?, ?, ?, ?,?,?,?,?,?,?,?,?,?,?,?)");

$stmt->bind_param('ssssssssssssssss',$f_name,$m_name,$l_name,$dob,$gender,$nationality,$country,$id_number,$contact,$e_id,$city,$province,$g_name,$g_contact,$s_contact,$f_aid);

$stmt->execute();

$sql="SELECT * FROM s_personal WHERE e_id='$e_id'";
$result=$conn->query($sql);
if ($result->num_rows == 1) 
	header("Location: homet.html");
?>