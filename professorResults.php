<html>
	<head>
		<title>Search Results</title>
	</head>
	<body style="background-color:lightblue;">
	<h1>Results</h1>
	<style>
		#resultTable td, #resultTable tr {
			border: 1px solid #000;
			background-color: #626e6d;
			color: #d9d9d9;
			padding: 8px;
		}
	</style>

	<?php 
	$serverName = "localhost";
	$username = "root";
	$password = "aa201544";
	$dbname = "TP";
	
	// create the connection
	$conn = new mysqli($serverName, $username, $password, $dbname);
	

	if($_GET['ssn']) {

		$ssn = $_GET['ssn'];

		$queryA = 'SELECT Title, Classroom, Meeting_Days, Begin_Time, End_Time
		FROM Professor P, Section S, Course C
		WHERE P.SSN = "'.$ssn.'" AND P.SSN = S.P_ssn AND S.C_no = C.Course_No';

		$resultsA = $conn->query($queryA);

		if($resultsA->num_rows > 0 ) {
			echo("<table id = 'resultTable'><tr><th>Title</th><th>Room</th><th>Meeting Days</th>
				<th>Start Time</th><th>End Time</th></tr>");
				
			while ($row = $resultsA->fetch_assoc()) {
				echo("<tr><td>" . $row['Title'] . "</td>");
				echo("<td>" . $row['Classroom'] . "</td>");
				echo("<td>" . $row['Meeting_Days'] . "</td>");
				echo("<td>" . $row['Begin_Time'] . "</td>");
				echo("<td>" . $row['End_Time'] ."</td></tr>");
			}
			echo("</table>");
		} else {
			echo("There was no one in the database with that ssn");
		}
		

	} elseif ($_GET['course']) {
		$course = $_GET['course'];
		$section = $_GET['section'];

		$queryB = 'SELECT Grade, COUNT(CWID) FROM Course C, Section S, Enrollment E
		WHERE C.Course_No = "'.$course.'" AND S.Section_No = "'.$section.'" AND S.C_no = C.Course_No AND C.Course_No = E.Course_No
		GROUP BY Grade';

		$resultsB = $conn->query($queryB);

		if($resultsB->num_rows > 0) {
			echo("<table id= 'resultTable'><tr>
			<th>Grade</th><th>Count</th></tr>");
			while ($row = $resultsB->fetch_assoc()) {
				echo("<tr><td>" . $row['Grade'] . "</td>");
				echo("<td>" . $row['COUNT(CWID)'] . "</td>");
				echo("</tr>");
			}
			echo("</table>");
		} else {
			echo("Incorrect course or section!");
		}
	} else {
		echo('Something went wrong');
	};

	$conn->close();
	
	?>
	</body>
</html>