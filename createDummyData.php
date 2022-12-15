<?php 
// ********************************* FOR LOCAL
$serverName = "localhost";
$username = "root";
$password = "aa201544";
$dbname = "TP";

// create new connection
$conn = new mysqli($serverName, $username, $password, $dbname);

// double check the connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} else {

// start inserting here.

// department: Dept_No; Name; Phone; Office_Location;
// need 2
$department_number_one = "INSERT INTO Department(
	Dept_No, Name, Phone, Office_Location
) VALUES(
	'02', 'CPSC', '45879654', '123 madeUpStreet Fullerton, CA'
)";

$department_number_two = "INSERT INTO Department(
	Dept_No, Name, Phone, Office_Location
) VALUES(
	'03', 'MATH', '4587841', '456 number Two, Fullerton, CA'
)";

if($conn->query($department_number_one) === TRUE){
	echo "Inserted Department One <br>";
} else {
	echo "Oops something went wrong with Department ". $conn->error;
}
if($conn->query($department_number_two) === TRUE){
	echo "Inserted Department two <br>";
} else {
	echo "Oops something went wrong with Department ". $conn->error;
}

// course: Course_No; Title; Textbook; Unit; D_no;
// need 4
$course_number_one = "INSERT INTO Course (Course_No, Title, Textbook, Unit, D_no)
	VALUES ('301', 'Programming', 'Learn to Program', '3', '02')";

$course_number_two = "INSERT INTO Course (Course_No, Title, Textbook, Unit, D_no)
	VALUES ('105', 'Intro To Computers', 'Learn to Computer', '4', '02')";

$course_number_three = "INSERT INTO Course (Course_No, Title, Textbook, Unit, D_no)
	VALUES ('255', 'Discreet Math', 'Learn to Math', '5', '03')";

$course_number_four = "INSERT INTO Course (Course_No, Title, Textbook, Unit, D_no)
	VALUES ('410', 'advanced Math', 'Learn to Math Harder', '3', '03')";

if($conn->query($course_number_one)) {
	echo "Course One created <br>";
} else {
	echo "Failed at course one" . $conn->error;
};

if($conn->query($course_number_two)) {
	echo "Course Two created <br>";
} else {
	echo "Failed at course Two" . $conn->error;
};

if($conn->query($course_number_three)) {
	echo "Course Three created <br>";
} else {
	echo "Failed at course three" . $conn->error;
};

if($conn->query($course_number_four)) {
	echo "Course Four created <br>";
} else {
	echo "Failed at course Four" . $conn->error;
};

// Professor: SSN, Name, Street, Zip, City, State, Area_Code, Number
// Sex, Salary, D_no
$professor_number_one = "INSERT INTO Professor(SSN, Name, Street, Zip, City, State, Area_Code,
	Number, Sex, Salary, D_no
) Values(
	'123567894', 'Mr. Land', '123 Beverly', '90640', 'Montebello', 'CA', '310', '4561287', 'Male',
	'100000', '03'
)";

$professor_number_two = "INSERT INTO Professor(SSN, Name, Street, Zip, City, State, Area_Code,
	Number, Sex, Salary, D_no
) Values(
	'789423105', 'Mrs. Beverly', '123 Memory', '90665', 'Fullerton', 'CA', '562', '4561264', 'Female',
	'150000', '03'
)";

$professor_number_three = "INSERT INTO Professor(SSN, Name, Street, Zip, City, State, Area_Code,
	Number, Sex, Salary, D_no
) Values(
	'635416548', 'Mr. Baggins', '420 Shire', '465820', 'Shire', 'MI', '798', '1876542', 'Male',
	'500000', '02'
)";

if($conn->query($professor_number_one)) {
	echo "Professor One created <br>";
} else {
	echo "Failed at Professor One" . $conn->error;
};

if($conn->query($professor_number_two)) {
	echo "Professor Two created <br>";
} else {
	echo "Failed at Professor Two" . $conn->error;
};

if($conn->query($professor_number_three)) {
	echo "Professor Three created <br>";
} else {
	echo "Failed at Professor Three" . $conn->error;
};

// cs mr land
$Section_number_one = "INSERT INTO Section(Section_No, Classroom, Seats, Meeting_Days, Begin_Time,
	End_Time, P_ssn, C_no)
	VALUES ( '4201', 'hum221', '30', 'mon-wed', '0700', '1100', '123567894', '301' )";

// cs mr land
$Section_number_Two = "INSERT INTO Section(Section_No, Classroom, Seats, Meeting_Days, Begin_Time,
	End_Time, P_ssn, C_no)
	VALUES (
	'4202', 'hum221', '30', 'tue-thur', '0700', '1000', '123567894', '301'
)";

//cs mrs beverly
$Section_number_three = "INSERT INTO Section(Section_No, Classroom, Seats, Meeting_Days, Begin_Time,
	End_Time, P_ssn, C_no)
	VALUES (
	'4203', 'CS120', '25', 'mon-wed', '1000', '1200', '789423105', '105'
)";

// math baggins
$Section_number_four = "INSERT INTO Section(Section_No, Classroom, Seats, Meeting_Days, Begin_Time,
	End_Time, P_ssn, C_no )
	VALUES (
	'4204', 'Mat220', '26', 'tue-thur', '1200', '1300', '635416548', '255'
)";

// math baggins
$Section_number_five = "INSERT INTO Section(Section_No, Classroom, Seats, Meeting_Days, Begin_Time,
	End_Time, P_ssn, C_no)
	VALUES (
	'4205', 'Mat120', '20', 'mon-wed', '1400', '1530', '635416548', '410'
)";

// math baggins
$Section_number_six = "INSERT INTO Section(Section_No, Classroom, Seats, Meeting_Days, Begin_Time,
	End_Time, P_ssn, C_no)
	VALUES (
	'4206', 'Mat120', '25', 'mon-wed', '1200', '1350', '635416548', '410'
)";

if($conn->query($Section_number_one)) {
	echo "Section One created <br>";
} else {
	echo "Failed at Section One" . $conn->error;
};

if($conn->query($Section_number_Two)) {
	echo "Section Two created <br>";
} else {
	echo "Failed at Section Two" . $conn->error;
};

if($conn->query($Section_number_three)) {
	echo "Section Three created <br>";
} else {
	echo "Failed at Section Three" . $conn->error;
};

if($conn->query($Section_number_four)) {
	echo "Section Four created <br>";
} else {
	echo "Failed at Section Four" . $conn->error;
};


if($conn->query($Section_number_five)) {
	echo "Section Five created <br>";
} else {
	echo "Failed at Section Five" . $conn->error;
};

if($conn->query($Section_number_six)) {
	echo "Section six created <br>";
} else {
	echo "Failed at Section Six" . $conn->error;
};

// Student: CWID, First_Name, Last_Name, Address, D_no
// need 8

// 4 cs students 02
$student_number_one = "INSERT INTO Student(
	CWID, First_Name, Last_Name, Address, D_no
) VALUES(
	'4206901', 'Josh', 'Land', '420 fake st', '02'
)";

$student_number_two = "INSERT INTO Student(
	CWID, First_Name, Last_Name, Address, D_no
) VALUES(
	'4206902', 'Mathew', 'Stewart', '8452 madeUp ln', '02'
)";

$student_number_three = "INSERT INTO Student(
	CWID, First_Name, Last_Name, Address, D_no
) VALUES(
	'4206903', 'Mark', 'Potter', '786 mystic ave', '02'
)";

$student_number_four = "INSERT INTO Student(
	CWID, First_Name, Last_Name, Address, D_no
) VALUES(
	'4206904', 'Christina', 'Pescherine', '4225 real Ln', '02'
)";

// 4 math students 03
$student_number_five = "INSERT INTO Student(
	CWID, First_Name, Last_Name, Address, D_no
) VALUES(
	'4206905', 'John', 'Smith', '103 damn st', '03'
)";

$student_number_six = "INSERT INTO Student(
	CWID, First_Name, Last_Name, Address, D_no
) VALUES(
	'4206906', 'Pocahontas', 'Freebird', '389 breath ln', '03'
)";

$student_number_seven = "INSERT INTO Student(
	CWID, First_Name, Last_Name, Address, D_no
) VALUES(
	'4206907', 'stacey', 'Granola', '103 studebaker st', '03'
)";

$student_number_eight = "INSERT INTO Student(
	CWID, First_Name, Last_Name, Address, D_no
) VALUES(
	'4206908', 'jacob', 'Stoner', '21284 birthday st', '03'
)";

if($conn->query($student_number_one)) {
	echo "Student One created <br>";
} else {
	echo "Failed at Student One" . $conn->error;
};

if($conn->query($student_number_two)) {
	echo "Student Two created <br>";
} else {
	echo "Failed at Student Two" . $conn->error;
};

if($conn->query($student_number_three)) {
	echo "Student Three created <br>";
} else {
	echo "Failed at Student Three" . $conn->error;
};

if($conn->query($student_number_four)) {
	echo "Student Four created <br>";
} else {
	echo "Failed at Student Four" . $conn->error;
};

if($conn->query($student_number_five)) {
	echo "Student Five created <br>";
} else {
	echo "Failed at Student Five" . $conn->error;
};

if($conn->query($student_number_six)) {
	echo "Student Six created <br>";
} else {
	echo "Failed at Student Six" . $conn->error;
};

if($conn->query($student_number_seven)) {
	echo "Student Seven created <br>";
} else {
	echo "Failed at Student Seven" . $conn->error;
};

if($conn->query($student_number_eight)) {
	echo "Student Eight created <br>";
} else {
	echo "Failed at Student Eight" . $conn->error;
};

// Prereq: Prereq, C_no
// start with 301 programmin
$class_301_one = "INSERT INTO Prereq(Prereq, C_no)
	VALUES ('highschool', '301')";

if($conn->query($class_301_one)) {
	echo "Prereq One created <br>";
} else {
	echo "Failed at Prereq One" . $conn->error;
};

$class_301_two = "INSERT INTO Prereq(Prereq, C_no)
VALUES ('math 120', '301')";

if($conn->query($class_301_two)) {
	echo "Prereq Two created <br>";
} else {
	echo "Failed at Prereq Two" . $conn->error;
};

$class_105_three = "INSERT INTO Prereq(Prereq, C_no)
	VALUES ('highschool program', '105')";

if($conn->query($class_105_three)) {
	echo "Prereq Three created <br>";
} else {
	echo "Failed at Prereq Three" . $conn->error;
};

$class_255_four = "INSERT INTO Prereq(Prereq, C_no)
VALUES ('discreetA', '255')";

if($conn->query($class_255_four)) {
	echo "Prereq Four created <br>";
} else {
	echo "Failed at Prereq Four" . $conn->error;
};

$class_410_five = "INSERT INTO Prereq(Prereq, C_no)
	VALUES ('less math', '410')";

if($conn->query($class_410_five)) {
	echo "Prereq Five created <br>";
} else {
	echo "Failed at Prereq Five" . $conn->error;
};

// degrees: degrees, P_ssn
$degree_one = "INSERT INTO Degrees(
	Degrees, P_ssn
) VALUES ('Computer Sci', '123567894')";

if($conn->query($degree_one)) {
	echo "degree one created <br>";
} else {
	echo "Failed at degree one" . $conn->error;
};

$degree_two = "INSERT INTO Degrees(
	Degrees, P_ssn
) VALUES ('Computer Sci', '789423105')";

if($conn->query($degree_two)) {
	echo "degree two created <br>";
} else {
	echo "Failed at degree two" . $conn->error;
};

$degree_three = "INSERT INTO Degrees(
	Degrees, P_ssn
) VALUES ('Math', '635416548')";

if($conn->query($degree_three)) {
	echo "degree three created <br>";
} else {
	echo "Failed at degree three" . $conn->error;
};

// MINOR: Dept_no, CWID
// 2cps 3math
$minor_number_one = "INSERT INTO Minor(Dept_no, CWID)
	VALUES ('02', '4206902')";

if($conn->query($minor_number_one)) {
	echo "Minor One created <br>";
} else {
	echo "Failed at Minor One" . $conn->error;
};

$minor_number_two = "INSERT INTO Minor(Dept_no, CWID)
VALUES ('02', '4206906')";

if($conn->query($minor_number_two)) {
	echo "Minor Two created <br>";
} else {
	echo "Failed at Minor Two" . $conn->error;
};

$minor_number_three = "INSERT INTO Minor(Dept_no, CWID)
VALUES ('03', '4206907')";

if($conn->query($minor_number_three)) {
	echo "Minor Three created <br>";
} else {
	echo "Failed at Minor Three" . $conn->error;
};

$minor_number_four = "INSERT INTO Minor(Dept_no, CWID)
	VALUES ('03', '4206901')";

if($conn->query($minor_number_four)) {
	echo "Minor four created <br>";
} else {
	echo "Failed at Minor four" . $conn->error;
};
// this is the end of the else
};

// Enrollment: Grade, CWID, Course_No
// need 20
// josh, 4206901 | course 301
$enrollment_one = "INSERT INTO Enrollment(
	Grade, CWID, Course_No
) VALUES ('+A', '4206901', '301')";

if($conn->query($enrollment_one)) {
	echo "Enrollment One created <br>";
} else {
	echo "Failed at Enrollment One" . $conn->error;
};

// second person course 301
$enrollment_two = "INSERT INTO Enrollment(
	Grade, CWID, Course_No
) VALUES ('B', '4206902', '301')";

if($conn->query($enrollment_two)) {
	echo "Enrollment Two created <br>";
} else {
	echo "Failed at Enrollment Two" . $conn->error;
};

// Third person course 301
$enrollment_third = "INSERT INTO Enrollment(
	Grade, CWID, Course_No
) VALUES ('C', '4206903', '301')";

if($conn->query($enrollment_third)) {
	echo "Enrollment Third created <br>";
} else {
	echo "Failed at Enrollment Third" . $conn->error;
};

// Fourth person course 301
$enrollment_four = "INSERT INTO Enrollment(
	Grade, CWID, Course_No
) VALUES ('B-', '4206904', '301')";

if($conn->query($enrollment_four)) {
	echo "Enrollment Four created <br>";
} else {
	echo "Failed at Enrollment Four" . $conn->error;
};

// fifth person course 301
$enrollment_five = "INSERT INTO Enrollment(
	Grade, CWID, Course_No
) VALUES ('C', '4206905', '301')";

if($conn->query($enrollment_five)) {
	echo "Enrollment Five created <br>";
} else {
	echo "Failed at Enrollment Five" . $conn->error;
};

// sixth person course 301
$enrollment_six = "INSERT INTO Enrollment(
	Grade, CWID, Course_No
) VALUES ('A-', '4206908', '105')";

if($conn->query($enrollment_six)) {
	echo "Enrollment Six created <br>";
} else {
	echo "Failed at Enrollment Six" . $conn->error;
};

// Seven person course 301
$enrollment_seven = "INSERT INTO Enrollment(
	Grade, CWID, Course_No
) VALUES ('C+', '4206907', '105')";

if($conn->query($enrollment_seven)) {
	echo "Enrollment Seven created <br>";
} else {
	echo "Failed at Enrollment Seven" . $conn->error;
};

// Eight person course 301
$enrollment_eight = "INSERT INTO Enrollment(
	Grade, CWID, Course_No
) VALUES ('A+', '4206906', '105')";

if($conn->query($enrollment_eight)) {
	echo "Enrollment Eight created <br>";
} else {
	echo "Failed at Enrollment eight" . $conn->error;
};

// Nineth person course 301
$enrollment_nine = "INSERT INTO Enrollment(
	Grade, CWID, Course_No
) VALUES ('D+', '4206904', '105')";

if($conn->query($enrollment_nine)) {
	echo "Enrollment Nine created <br>";
} else {
	echo "Failed at Enrollment Nine" . $conn->error;
};

// Tenth person course 301
$enrollment_ten = "INSERT INTO Enrollment(
	Grade, CWID, Course_No
) VALUES ('B+', '4206903', '105')";

if($conn->query($enrollment_ten)) {
	echo "Enrollment Ten created <br>";
} else {
	echo "Failed at Enrollment Ten" . $conn->error;
};


// eleventh person course 301
$enrollment_eleven = "INSERT INTO Enrollment(
	Grade, CWID, Course_No
) VALUES ('A-', '4206901', '255')";

if($conn->query($enrollment_eleven)) {
	echo "Enrollment eleven created <br>";
} else {
	echo "Failed at Enrollment eleven" . $conn->error;
};

// Twelve person course 301
$enrollment_twelve = "INSERT INTO Enrollment(
	Grade, CWID, Course_No
) VALUES ('D+', '4206902', '255')";

if($conn->query($enrollment_twelve)) {
	echo "Enrollment Twelve created <br>";
} else {
	echo "Failed at Enrollment Twelve" . $conn->error;
};

// Thirteen person course 301
$enrollment_thirteen = "INSERT INTO Enrollment(
	Grade, CWID, Course_No
) VALUES ('B+', '4206903', '255')";

if($conn->query($enrollment_thirteen)) {
	echo "Enrollment Thirteen created <br>";
} else {
	echo "Failed at Enrollment Thirteen" . $conn->error;
};

// Fourteen person course 301
$enrollment_fourteen = "INSERT INTO Enrollment(
	Grade, CWID, Course_No
) VALUES ('C-', '4206904', '255')";

if($conn->query($enrollment_fourteen)) {
	echo "Enrollment Fourteen created <br>";
} else {
	echo "Failed at Enrollment Fourteene" . $conn->error;
};

// Fifteen person course 301
$enrollment_fifteen = "INSERT INTO Enrollment(
	Grade, CWID, Course_No
) VALUES ('C', '4206903', '255')";

if($conn->query($enrollment_fifteen)) {
	echo "Enrollment fifteen created <br>";
} else {
	echo "Failed at Enrollment fifteen" . $conn->error;
};

// sixteen person course 410
$enrollment_sixteen = "INSERT INTO Enrollment(
	Grade, CWID, Course_No
) VALUES ('A', '4206901', '410')";

if($conn->query($enrollment_sixteen)) {
	echo "Enrollment sixteen created <br>";
} else {
	echo "Failed at Enrollment sixteen" . $conn->error;
};

// seventeen person course 410
$enrollment_seventeen = "INSERT INTO Enrollment(
	Grade, CWID, Course_No
) VALUES ('B', '4206902', '410')";

if($conn->query($enrollment_seventeen)) {
	echo "Enrollment seventeen created <br>";
} else {
	echo "Failed at Enrollment seventeen" . $conn->error;
};

// Eightteen person course 410
$enrollment_eighteen = "INSERT INTO Enrollment(
	Grade, CWID, Course_No
) VALUES ('D', '4206903', '410')";

if($conn->query($enrollment_eighteen)) {
	echo "Enrollment eighteen created <br>";
} else {
	echo "Failed at Enrollment eighteen" . $conn->error;
};

// nineteen person course 410
$enrollment_nineteen = "INSERT INTO Enrollment(
	Grade, CWID, Course_No
) VALUES ('C', '4206904', '410')";

if($conn->query($enrollment_nineteen)) {
	echo "Enrollment nineteen created <br>";
} else {
	echo "Failed at Enrollment nineteen" . $conn->error;
};

// Twenty person course 410
$enrollment_twenty = "INSERT INTO Enrollment(
	Grade, CWID, Course_No
) VALUES ('B', '4206905', '410')";

if($conn->query($enrollment_twenty)) {
	echo "Enrollment twenty created <br>";
} else {
	echo "Failed at Enrollment twenty" . $conn->error;
};

};
$conn->close();
?>