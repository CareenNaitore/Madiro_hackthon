<?php
// database connection code

if(isset($_POST['no_child']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','manutrition');

// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully"; 

// Create database
$sql = "CREATE DATABASE myDB";
if ($con->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $con->error;
}
// sql to create table
$sql= "CREATE TABLE `manutrition` ( 
   id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,  
   Parent_name VARCHAR(50) NOT NULL , 
   Gender_parent VARCHAR (50) NOT NULL,
   Phone INT(50) NOT NULL ,
   Child_name VARCHAR(50) NOT NULL ,
   Child_age INT(50) NOT NULL ,
   Birthday DATE NOT NULL ,
   Gender_child VARCHAR(50) NOT NULL ,
   Number_of_women INT(50) NOT NULL ,
   Female_name VARCHAR(50) NOT NULL ,
   Age INT(50) NOT NULL ,
   marital_status VARCHAR(50) NOT NULL, 
   Pregnancy_status VARCHAR(50) NOT NULL ,
   Sources VARCHAR(50) NOT NULL ,
   Distances VARCHAR(50) NOT NULL ,
   Ranking VARCHAR(50) NOT NULL ,
   Rubish VARCHAR(50) NOT NULL ,
   Kitchen VARCHAR(50) NOT NULL ,
   Cooking VARCHAR(50) NOT NULL ,
   Breast_feeding_mother VARCHAR(50) NOT NULL ,
   Oedema VARCHAR(25) NOT NULL ,
   Yes VARCHAR(50) NOT NULL ,
   Weight VARCHAR(25) NOT NULL ,
   MUAC VARCHAR(25) NOT NULL ,
   Color VARCHAR(100) NOT NULL ,
   Feeding VARCHAR(11) NOT NULL 
 )";
 
 if ($con->query($sql) === TRUE) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . $con->error;
}


// get the post records

$hname = $_POST['hname'];
$genderp = $_POST['genderp'];
$Phone = $_POST['phone'];
$no_child = $_POST['no_child'];
$cname = $_POST['cname'];
$Cage = $_POST['cage'];
$birthday = $_POST['birthday'];
$gender_c = $_POST['gender_c'];
$no_women = $_POST['no_women'];
$fname = $_POST['fname'];
$Age_women = $_POST['Age_women'];
$marital_status = $_POST['marital_status'];
$pregnacy_status = $_POST['pregnancy_status'];
$sources = $_POST['sources'];
$Distance = $_POST['Distance'];
$ranking = $_POST['ranking'];
$rubish = $_POST['rubish'];
$kitchen = $_POST['kitchen'];
$cooking = $_POST['cooking'];
$B_mothers = $_POST['B_mothers'];
$odema = $_POST['odema'];
$yes = $_POST['yes'];
$weight = $_POST['weight'];
$muac = $_POST['muac'];
$favcolor = $_POST['mauccolor'];
$feeding = $_POST['feeding'];

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// database insert SQL code
$sql ="INSERT INTO manutrition(ID, Parent_name, Gender_parent, Phone, Child_name, Child_age, Birthday, Gender child, Number_of_women, Female_name, Age, Marital_status, Pregnancy_status, Sources, Distances, Ranking, Rubish, Kitchen, Cooking, Breast_feeding_mother, Oedema, Yes, Weight, MUAC, Color, Feeding) VALUES ('0',$hname ,$genderp, $phone, $no_child, $cname, $cage, $birthday,$gender_c, $no_women, $fname, $Age_women,$marital_status, $pregnancy_status,$sources, $Distance, $ranking, $rubish, $kitchen, $cooking, $B_mothers,$oedema, $yes, $weight, $muac, $maucolor, $feeding)";
// insert in database 
$rs = mysqli_query($con, $sql);

if (empty($rs))
{
	echo "Contact Records Inserted";
}
}
else
{
	echo "Are you a genuine visitor?";
	
}
?>