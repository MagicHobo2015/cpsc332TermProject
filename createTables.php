<?php 
// some credentials
$serverName = "mariaDB";
$username = "cs332f17";
$password = "aa201544";
$dbname = "cs332f17";

// create the connection
$conn = new mysqli($serverName, $username, $password, $dbname);

// make sure that worked
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

// create tabes here
// first professor
$profTable = "CREATE TABLE Professor(
	SSN INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	Name VARCHAR(30) TO NULL,
	Street VARCHAR(50),
	Zip INT(5),
	City VARCHAR(20),
	State VARCHAR(20),
	Area_Code INT(3),
	Number INT(7),
	Sex VARCHAR(10),
	Salary INT(20),
	D_no INT(10)
	)";

// the department table
$departmentTable = "CREATE TABLE Department(
	Dept_No INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	Name VARCHAR(30) TO NULL,
	Phone INT(10),
	Office_Location(50)
	)";

// for courses
$courseTable = "CREATE TABLE Course(
	Course_No VARCHAR(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	Title VARCHAR(30) TO NULL,
	Textbook VARCHAR(30),
	Unit INT(2),
	D_no INT(20)
	)";

// section table
$sectionTable = "CREATE TABLE Section(
	Section_No INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	Classroom VARCHAR(6),
	Seats INT(3),
	Meeting_Days VARCHAR(20),
	Begin_Time INT(5),
	End_Time INT(5),
	P_ssn INT(10),
	C_no Course_No VARCHAR(8)
	)";

// this one for the students
$studentTable = "CREATE TABLE Student(
	CWID INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	First_Name VARCHAR(15) TO NULL,
	Last_Name VARCHAR(15) TO NULL,
	Address VARCHAR(50),
	D_No INT(10)
	)";

$degreesTable = "CREATE TABLE Degrees(
	Degrees VARCHAR(15)
	P_ssn INT(10)
	)";


$prereqTable = "CREATE TABLE Prereq(
	Prereq VARCHAR(20),
	C_no INT(5)
	)";
	
$enrollmentTable = 	"CREATE TABLE Enrollment(
	Grade VARCHAR(2),
	CWID INT(8),
	Course_No INT(5)
	)";
	
$minorTable = "CREATE TABLE Minor(
	Dept_no INT(10),
	CWID INT(8)
	)";

// now to make them
if ($conn->query($profTable) === TRUE) {
	echo "Prof created successfully";
} else {
	echo "error at prof" . $conn->error;
}

if ($conn->query($departmentTable) === TRUE) {
	echo "department table created";
} else {
	echo "error at department" . $conn->error;
}

if ($conn->query($courseTable) === TRUE) {
	echo "course table created";
} else {
	echo "error at course" . $conn->error;
}

if ($conn->query($sectionTable) === TRUE) {
	echo "section table created";
} else {
	echo "error at section" . $conn->error;
}

if ($conn->query($studentTable) === TRUE) {
	echo "student table created";
} else {
	echo "error at student" . $conn->error;
}

if ($conn->query($degreesTable) === TRUE) {
	echo "degree table created";
} else {
	echo "error at degree" . $conn->error;
}

if ($conn->query($prereqTable) === TRUE) {
	echo "prereq table created";
} else {
	echo "error at prereq" . $conn->error;
}

if ($conn->query($enrollmentTable) === TRUE) {
	echo "emrollment table created";
} else {
	echo "error at enrollment" . $conn->error;
}

if ($conn->query($minorTable) === TRUE) {
	echo "minor table created";
} else {
	echo "error at minor" . $conn->error;
}

if ($conn->query($minorTable) === TRUE) {
	echo "minor table created";
} else {
	echo "error at minor" . $conn->error;
}

$conn->close();
?>