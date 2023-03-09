<!DOCTYPE html>
<html>
<head>
	<title>Grade Distribution</title>
	<style>
        body{
            background-color: #FBCEB1;
        }
		table {
			border-collapse: collapse;
			width: 100%;
			margin-bottom: 20px;
		}
		th, td {
			padding: 8px;
			text-align: left;
			border: 1px solid #ddd;
			font-size: 14px;
		}
		.grade-label {
			font-weight: bold;
			text-align: right;
			padding-right: 10px;
			width: 60px;
		}
		.grade-bar {
			height: 20px;
			background-color: #B5D5C5;
			border: 1px solid #777;
			margin-bottom: 10px;
			position: relative;
		}
		.grade-bar-inner {
			height: 100%;
			background-color: #6495ED;
			position: absolute;
			top: 0;
			left: 0;
		}
		.grade-percent {
			position: absolute;
			right: 5px;
			top: 0;
			bottom: 0;
			line-height: 20px;
			font-size: 12px;
			color: #212129;
			text-align: right;
		}
	</style>
</head>
<body>
    <center>
<h1>Grade Distribution Graph</h1>
<!-- To input grades-->
	<form method="post">
		<label for="grade-a"><b>Number of A's:</b></label>
		<input type="text" id="numA" name="numA" max="100" value=""><br>
		<label for="grade-b"><b>Number of B's:</b></label>
		<input type="text" id="numB" name="numB" max="100" value=""><br>
		<label for="grade-c"><b>Number of C's:</b></label>
		<input type="text" id="numC" name="numC" max="100" value=""><br>
		<label for="grade-d"><b>Number of D's:</b></label>
		<input type="text" id="numD" name="numD" max="100" value=""><br>
		<label for="grade-f"><b>Number of F's:</b></label>
		<input type="text" id="numF" name="numF" max="100" value=""><br>
		<button type="submit" name="submit" id="submit">Submit</button>
	</form>
    </center>
	<?php
	// Get number of each grade from form
    if(isset($_POST['numA']) && isset($_POST['numB']) && isset($_POST['numC']) && isset($_POST['numD']) && isset( $_POST['numF'])){
	$numA = ($_POST['numA']);
	$numB = ($_POST['numB']);
	$numC = ($_POST['numC']);
	$numD = ($_POST['numD']);
	$numF = ($_POST['numF']);

	// Calculate total number of grades
	$totalGrades = $numA + $numB + $numC + $numD + $numF;

	// Calculate percentage of each grade
	$percentA = round(($numA / $totalGrades) * 100);
	$percentB = round(($numB / $totalGrades) * 100);
	$percentC = round(($numC / $totalGrades) * 100);
	$percentD = round(($numD / $totalGrades) * 100);
	$percentF = round(($numF / $totalGrades) * 100);
    
	// Print number of each grade and total number of grades
    echo "<center>";
	echo "Total number of grades: $totalGrades<br><br>";
    echo "</center>";

	// Print grade distribution
	echo "<center>Graph:</center><br>";
	echo "<table>";
	echo "<tr><td class='grade-label'>A:</td><td>";
	echo "<div class='grade-bar'><div class='grade-bar-inner' style='width: $percentA%;'></div><div class='grade-percent'>$percentA%</div></div>";
	echo "</td></tr>";
	echo "<tr><td class='grade-label'>B:</td><td>";
	echo "<div class='grade-bar'><div class='grade-bar-inner' style='width: $percentB%;'></div><div class='grade-percent'>$percentB%</div></div>";
	echo "</td></tr>";
	echo "<tr><td class='grade-label'>C:</td><td>";
	echo "<div class='grade-bar'><div class='grade-bar-inner' style='width: $percentC%;'></div><div class='grade-percent'>$percentC%</div></div>";
    echo "</td></tr>";
    echo "<tr><td class='grade-label'>D:</td><td>";
	echo "<div class='grade-bar'><div class='grade-bar-inner' style='width: $percentD%;'></div><div class='grade-percent'>$percentD%</div></div>";
    echo "<tr><td class='grade-label'>F:</td><td>";
    echo "<div class='grade-bar'><div class='grade-bar-inner' style='width: $percentF%;'></div><div class='grade-percent'>$percentF%</div></div>";
    }
    ?>