<?php


// 

$servername = "localhost";
$username = "root";
$password = "";
$dbname   = "ٌRobotic_arm";


// Create connection
$conn = new mysqli($servername, $username, $password);
if (!$conn) {
	die("connection failed:" . mysqli_connect_error());
}
// Create database

$sql = "CREATE DATABASE $dbname";
if (mysqli_query($conn, $sql))
	echo "Database created successfuly <br>";
else
	die("Error in creating database:" . mysqli_error($conn));





// connect with database
$selected_db = mysqli_select_db($conn, $dbname);

// Check connection
if (!$selected_db)
	die("connection failed:" . mysqli_error($conn));

// create tables
$sql_u = "CREATE TABLE Engines (

UserID INT NOT NULL ,
Engine1 int NOT NULL ,
Engine2 int NOT NULL ,
Engine3 int NOT NULL ,
Engine4 int NOT NULL ,
Engine5 int NOT NULL ,
Engine6 int NOT NULL ,
Status1 BIT  NOT NULL,
PRIMARY KEY(UserID)
)";

if (mysqli_query($conn, $sql_u))
	echo ("Engines created successfully <br>");
else {
	die("Error creating table:" . mysqli_error($conn));
}

$sql = "INSERT INTO  Engines (UserID, Engine1, Engine2, Engine3,Engine4,Engine5,Engine6,Status1) VALUES 
('1','0', '0', '0', '0','0','0',0);";

if (mysqli_query($conn, $sql))
	echo ("Engines initial values created successfully <br>");
else {
	die("Error insering values:" . mysqli_error($conn));
}

$sql_u1 = "CREATE TABLE BaseMovement (

	UserID INT NOT NULL ,
	Forward1 VARCHAR(25) NOT NULL ,
	Left1 VARCHAR(25) NOT NULL ,
	Stop1 VARCHAR(25) NOT NULL ,
	Right1 VARCHAR(25) NOT NULL ,
	Backward1 VARCHAR(25) NOT NULL ,
	PRIMARY KEY(UserID)
	)";
	
	if (mysqli_query($conn, $sql_u1))
		echo ("Base control created successfully <br>");
	else {
		die("Error creating table:" . mysqli_error($conn));
	}

	$sql2 = "INSERT INTO  BaseMovement (UserID, Forward1, Left1, Stop1,Right1,Backward1) VALUES 
('1','0', '0', '1', '0','0');";

if (mysqli_query($conn, $sql2))
	echo ("Base control initial values created successfully <br>");
else {
	die("Error insering values:" . mysqli_error($conn));
}


