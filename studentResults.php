<html>
	<head>
		<title>Search Results</title>
		<style>
		#resultTable td, #resultTable tr {
			border: 1px solid #000;
			background-color: #626e6d;
			color: #d9d9d9;
			padding: 8px;
		}
	</style>
	</head>
	<h1>Results</h1>
	<body>
	<?php 
		$serverName = "localhost";
		$username = "root";
		$password = "aa201544";
		$dbname = "TP";

	// create the connection
	$conn = new mysqli($serverName, $username, $password, $dbname);
	
	if($_GET['course']) {
		$course = $_GET['course'];

		$student_query_A = 'SELECT Section_No, Classroom, Meeting_days, Begin_Time, End_Time, COUNT(CWID)
		FROM Course C, Section S, Enrollment E
		WHERE C.Course_No = ' . $course . ' AND C.Course = S.C_no AND C.Course_No = E.Course_No
		GROUP BY Section_No';

		$reslutsA = $conn->query($student_query_A);

		if($reslutsA->num_rows > 0) {
			echo("<table id='resultTable'><tr>");
			echo("<th>Sections</th><th>Room</th><th>Meeting days</th>
			<th>Start</th><th>End</th><th>Student Count</th></tr>");

			while ($row = $reslutsA->fetch_assoc()) {
				echo("<tr><td>" . $row['Section_No'] . "</td>");
				echo("<td>" . $row['Classroom'] . "</td>");
				echo("<td>" . $row['Meeting_Days'] . "</td>");
				echo("<td>" . $row['Begin_Time'] . "</td>");
				echo("<td>" . $row['End_Time'] ."</td></tr>");
				echo("<td>" . $row['COUNT(CWID)'] . "</td>");
			}

			echo("</table>");

		} else {
			echo("There were no courses found");
		};

	} elseif ($_GET['cwid']) {

		$cwid = $_GET['cwid'];

		$student_query_B = 'SELECT Title, Grade FROM Enrollment E, Course C
		WHERE E.CWID = "' . $cwid . '" AND E.Course_No = C.Course_No';

		$resultsB = $conn->query($student_query_B);

		if($resultsB->num_rows > 0) {
			echo("<table id='resultTable'><tr><th> Courses </th><th> Grade </th></tr>");
			while($row = $resultsB->fetch_assoc()) {
				echo('<tr><td>'.$row['Title'].'</td>');
				echo('<td>'.$row['Grade'].'</td>');
			}
			
			echo("</table>");

		} else {
			echo("There is no match for that cwid");
		}

	} else {
		// I dont think you can get here.
		echo("Something went wrong!");
	}
	
	?>

	</body>

		</html>