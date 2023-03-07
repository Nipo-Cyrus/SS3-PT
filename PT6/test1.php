<!DOCTYPE html>
<html>
<head>
	<title>Grade Distribution Graph</title>
	<style type="text/css">
		table {
			border-collapse: collapse;
			margin: 20px ;
			width: 70%;
		}

		table, th, td {
			border: 0px solid black;
			padding: 5px;
			text-align: center;
		}
	</style>
</head>
<body>
	<h1>Grade Distribution Graph</h1>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<label for="grade_a">Number of A:</label>
		<input type="text" id="grade_a" name="grade_a" min="0" value="0"><br>

		<label for="grade_b">Number of B:</label>
		<input type="text" id="grade_b" name="grade_b" min="0" value="0"><br>

		<label for="grade_c">Number of C:</label>
		<input type="text" id="grade_c" name="grade_c" min="0" value="0"><br>

		<label for="grade_d">Number of D:</label>
		<input type="text" id="grade_d" name="grade_d" min="0" value="0"><br>

		<label for="grade_f">Number of F:</label>
		<input type="text" id="grade_f" name="grade_f" min="0" value="0"><br>

		<input type="submit" value="Graph Grade Distribution">
	</form>

	<?php
		// Check if the form has been submitted
		if ($_SERVER["REQUEST_METHOD"] == "POST") {

			// Get the input values and calculate the total number of grades
			$num_a = $_POST["grade_a"];
			$num_b = $_POST["grade_b"];
			$num_c = $_POST["grade_c"];
			$num_d = $_POST["grade_d"];
			$num_f = $_POST["grade_f"];

			$total_grades = $num_a + $num_b + $num_c + $num_d + $num_f;

			// Calculate the percentage of each letter grade category
			$percent_a = round(($num_a / $total_grades) * 100);
			$percent_b = round(($num_b / $total_grades) * 100);
			$percent_c = round(($num_c / $total_grades) * 100);
			$percent_d = round(($num_d / $total_grades) * 100);
			$percent_f = round(($num_f / $total_grades) * 100);

			// Generate the graph
			echo '<table>';
			echo '<tr><th>iyot</th><th>iyot</th><th>iyot</th></tr>';
			echo '<tr>';
			for ($i = 1; $i <= 100; $i++) {
				if ($i == 1 || $i % 10 == 1) {
					echo '<th>' . $i . '%</th>';
				} else {
					echo '<th></th>';
				}
			}
			echo '</tr>';

			echo '<tr>';
			for ($i = 1; $i <= $percent_a; $i++) {
				echo '<td style="background-color: green;"></td>';
			}
			for ($i = $percent_a + 1; $i <= 100; $i++) {
            echo '<tr>';}
            
            for ($i = 1; $i <= $percent_b; $i++) {
                echo '<td style="background-color: yellow;"></td>';
            }
            for ($i = $percent_b + 1; $i <= 100; $i++) {
                echo '<td></td>';
            }
            echo '</tr>';
    
            echo '<tr>';
            for ($i = 1; $i <= $percent_c; $i++) {
                echo '<td style="background-color: orange;"></td>';
            }
            for ($i = $percent_c + 1; $i <= 100; $i++) {
                echo '<td></td>';
            }
            echo '</tr>';
    
            echo '<tr>';
            for ($i = 1; $i <= $percent_d; $i++) {
                echo '<td style="background-color: red;"></td>';
            }
            for ($i = $percent_d + 1; $i <= 100; $i++) {
                echo '<td></td>';
            }
            echo '</tr>';
    
            echo '<tr>';
            for ($i = 1; $i <= $percent_f; $i++) {
                echo '<td style="background-color: black; color: white;"></td>';
            }
            for ($i = $percent_f + 1; $i <= 100; $i++) {
                echo '<td></td>';
            }
            echo '</tr>';
    
            echo '</table>';
        }
    ?>
    