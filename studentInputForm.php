<html>
	<head>
		<title>Student Search</title>
		<style>
				body {background-color: rgb(206, 206, 215);}
				input {border-radius: 5px; border-width: 0px; box-shadow: 2px 2px rgb(94, 94, 98);}
			</style>
	</head>
	<h1>Student Search</h1>
	<body>
	<form name="student_section_list" action="studentResults.php" method="get">

		<label>Course number:</label>

		<input type="text" name="section" id="section" size="8" required>
		<br>
		<input type="submit" value="List sections">

	<br>	
	
	</form>
	
	<hr>
	
	<form name="CWID_search" action="studentResults.php" method="get">
	<label>Campus wide ID:</label>
	
	<input type="text" name="cwid" id="cwid"  size="8" required>
	
	<br>

	
		<input type="submit" value="Search"> 

	</form>

</html>