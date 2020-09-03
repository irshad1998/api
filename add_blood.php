<?php
$dbhost = 'sql12.freemysqlhosting.net';
$dbuser = 'sql12363565';
$dbpass = 'lVdCaEwiVC';
$dbname = 'sql12363565';


$dblink = new mysqli($dbhost, $dbuser, $dbpass, $dbname);


if ($dblink->connect_errno) {
	printf("Failed to connect to database");
	exit();
}


$Name = isset($_POST["name"]) ? $_POST["name"] : '';;
$Place = isset($_POST["place"]) ? $_POST["place"] : '';;
$Bgroup = isset($_POST["bgroup"]) ? $_POST["bgroup"] : '';;
$Dob = isset($_POST["dob"]) ? $_POST["dob"] : '';;
$Mobile = isset($_POST["mobile"]) ? $_POST["mobile"] : '';;




$sql = "insert into user_req_blood  (name,place,bgroup,dob,mobile) values ('$Name','$Place','$Bgroup','$Dob','$Mobile');";

if(mysqli_query($con,$sql))
{

echo "Submited Succesfully";

}
else
{
echo "Error in insertion ..." .mysqli_error($con) ;
