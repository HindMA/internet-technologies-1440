<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns=http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"
<title> Untitled Document </title>
</head>

<body>
<?php
/*
$dbconnect = mysqli_connect("localhost", "root", "", "contact_us");
if(mysqli_connect_errno($dbconnect) ){
echo "failed to connect";
}
else{
echo "connection successfull";
}*/

/*
$Name = filter_input (INPUT_POST,'Name');
$Email = filter_input (INPUT_POST,'EMail');

if (!empty($Name)){

if (!empty($Email)){

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "crochet";
// creat connection 
$connection = new mysgli ($host, $dbusername , $dbpassword , $dbname );

if(mysqli_connect_error()){
die('Connect Error ('.mysqli_connect_errno().')'.mysqli_connect_error());
}
else{
$sql = "INSERT INTO contact_us('Name', 'Email') 
values ('$username','$useremail')";
if($connection->query($sql)){
 echo "New record is inserted successfully";
}
else{
echo "Error: ". $sql ."<br>". $connection->error;
}
$connection->close();
}

}
else{
echo "Email should not be empty";
die();

}

}
else{
echo "Name should not be empty";
die();

}*/
<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "crochet";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO contact_us (Name, EMail)
VALUES ('John', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

?>

</body>
</html>