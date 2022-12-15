<?php 
// some credentials
// $serverName = "mariaDB";
// $username = "cs332f17";
// $password = "aa201544";
// $dbname = "cs332f17";

// ********************************* FOR LOCAL
$serverName = "localhost";
$username = "root";
$password = "aa201544";
$dbname = "TP";

// create the connection
$conn = new mysqli($serverName, $username, $password, $dbname);

// make sure that worked
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

// **********************************************************************the department table
$departmentTable = "CREATE TABLE TP.Department(
	Dept_No INT(10) PRIMARY KEY,
	Name VARCHAR(30),
	Phone INT(10),
	Office_Location VARCHAR(50)
	)";

if ($conn->query($departmentTable) === TRUE) {
	echo "department table created";
} else {
	echo "error at department" . $conn->error;
}
// *********************************************************************************************
// ******************************************for courses ***************************************
$courseTable = "CREATE TABLE TP.Course (
	Course_No VARCHAR(8),
	Title VARCHAR(30),
	Textbook VARCHAR(30),
	Unit INT,
	D_no INT,
	PRIMARY KEY (Course_No),
	CONSTRAINT Department_No FOREIGN KEY (D_no) REFERENCES Department(Dept_No)
	)";

if ($conn->query($courseTable) === TRUE) {
	echo "course table created";
} else {
	echo "error at course" . $conn->error;
}
// ****************************************************************************
// *************************************************************** professor
$profTable = "CREATE TABLE TP.Professor(
	SSN INT,
	Name VARCHAR(30),
	Street VARCHAR(50),
	Zip INT,
	City VARCHAR(20),
	State VARCHAR(20),
	Area_Code INT,
	Number INT,
	Sex VARCHAR(10),
	Salary INT,
	D_no INT,
	PRIMARY KEY (SSN, D_no),
	CONSTRAINT Department_No_p FOREIGN KEY (D_no) REFERENCES Department(Dept_No)
	)";

if ($conn->query($profTable) === TRUE) {
	echo "Prof created successfully";
} else {
	echo "error at prof" . $conn->error;
}
// *****************************************************************************
// ****************************************************************section table
$sectionTable = "CREATE TABLE TP.Section(
	Section_No INT,
	Classroom VARCHAR(6),
	Seats INT,
	Meeting_Days VARCHAR(20),
	Begin_Time INT,
	End_Time INT,
	P_ssn INT,
	C_no VARCHAR(8),
	PRIMARY KEY (Section_No, C_no),
	CONSTRAINT Professor_ssn FOREIGN KEY (P_ssn) REFERENCES Professor(SSN),
	CONSTRAINT Course_No_s FOREIGN KEY (C_no) REFERENCES Course(Course_No)
	)";

if ($conn->query($sectionTable) === TRUE) {
	echo "section table created";
} else {
	echo "error at section" . $conn->error;
}
// ****************************************************************************
// ***************************************************this one for the students
$studentTable = "CREATE TABLE TP.Student(
	CWID INT,
	First_Name VARCHAR(15),
	Last_Name VARCHAR(15),
	Address VARCHAR(50),
	D_no INT,
	PRIMARY KEY (CWID, D_no),
	CONSTRAINT Department_No_st FOREIGN KEY (D_no) REFERENCES Department(Dept_No)
	)";

if ($conn->query($studentTable) === TRUE) {
	echo "student table created";
} else {
	echo "error at student" . $conn->error;
}
// ********************************************************************************
// *********************************************** DEGREES ************************
$degreesTable = "CREATE TABLE TP.Degrees(
	Degrees VARCHAR(15),
	P_ssn INT,
	PRIMARY KEY(Degrees, P_ssn),
	CONSTRAINT Professor_ssn_d FOREIGN KEY (P_ssn) REFERENCES Professor(SSN)
	)";

if ($conn->query($degreesTable) === TRUE) {
	echo "degree table created";
} else {
	echo "error at degree" . $conn->error;
}
// ****************************************************************************
// ***************************** PRE REQ'S ************************************
$prereqTable = "CREATE TABLE TP.Prereq(
	Prereq VARCHAR(20),
	C_no VARCHAR(8),
	PRIMARY KEY(Prereq, C_no),
	CONSTRAINT Professor_ssn_p FOREIGN KEY (C_no) REFERENCES Course(Course_No)
	)";

if ($conn->query($prereqTable) === TRUE) {
	echo "prereq table created";
} else {
	echo "error at prereq" . $conn->error;
}
// *****************************************************************************
// ****************************************** ENROLL ***************************
$enrollmentTable = "CREATE TABLE TP.Enrollment(
	Grade VARCHAR(2),
	CWID INT,
	Course_No VARCHAR(8),
	PRIMARY KEY(CWID, Course_No),
	CONSTRAINT cwid_e FOREIGN KEY (CWID) REFERENCES Student(CWID),
	CONSTRAINT Course_no_e FOREIGN KEY (Course_No) REFERENCES Course(Course_No)
	)";

if ($conn->query($enrollmentTable) === TRUE) {
	echo "emrollment table created";
} else {
	echo "error at enrollment" . $conn->error;
}
// ********************************************************************************
// ********************************* MINOR ****************************************	
$minorTable = "CREATE TABLE TP.Minor(
	Dept_no INT,
	CWID INT,
	PRIMARY KEY(Dept_no, CWID),
	CONSTRAINT Department_no_m FOREIGN KEY (Dept_no) REFERENCES Department(Dept_No),
	CONSTRAINT cwid_m FOREIGN KEY (CWID) REFERENCES Student(CWID)
	)";

if ($conn->query($minorTable) === TRUE) {
	echo "minor table created";
} else {
	echo "error at minor" . $conn->error;
}
// *************************************** ************************************

$conn->close();
?>