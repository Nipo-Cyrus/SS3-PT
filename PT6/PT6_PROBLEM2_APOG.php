<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Input my Signature icon -->
    <link rel="icon" href="https://img.utdstc.com/icon/163/844/163844fed46d7b335d8a5eac8a94e0203b544ffb44f8934bd94506635e58d4c8:200" type="image/x-icon">
    <!-- css stylesheet -->
    <style = "text/css">
        .table1 {
            background-color: #f0e965;
            width: 70%;
            height: 60%;
        }
        .table2 {
            background-color: #28d166;
            width: 50%;
            
        }
        .bgA {
            background-color:#00ddff;
            align:left;
        }
        .bgB {
            background-color:#fff200;
        }
        .bgC {
            background-color:#5eff00;
        }
        .bgD {
            background-color:#2b00ff;
        }
        .bgF {
            background-color:#9d00ff;
        }
        .cent {
            text-align: center;
        }
        .kantotan {
            text-align: right;
        }
        .table3 {
            background-color: #acc43f;
            width: 50%;
            height: 60%;
            border: absolute;
        }
        .table4 {
            background-color: #f50707;
            width: 50%;
            height: 60%;
            border: absolute;
        }
    body {
        background-color: lightblue;
        }
        
    </style>

    </style>
    <title>Document</title>
</head>
<body>
   <!-- Create a Form data -->
    <form action="" method="post">
    <!-- Create a Table To Show the Gatespace of the Website -->
    <Table align=center class ="table1">
        <tr>
            <th>Grade Distribution Graph
                <!-- Create a 2nd Table -->
                <Table class= "table2" align=center >
                    <tr>
                        <td><label for="grade_A">How many is A: </label></td>
                        <td align=left><input type="text" name="grade_A" id="grade_A"> </td>
                    </tr>
                    <tr>
                        <td><label for="grade_B">How many is B: </label></td>
                        <td  align=left><input type="text" name="grade_B" id="grade_B"></td>
                    </tr>
                    <tr>
                        <td><label for="grade_C">How many is C: </label></td>
                        <td  align=left><input type="text" name="grade_C" id="grade_C"></td>
                    </tr>
                    <tr>
                        <td><label for="grade_D">How many is D: </label></td>
                        <td  align=left><input type="text" name="grade_D" id="grade_D"></td>
                    </tr>
                    <tr>
                        <td><label for="grade_F">How many is F: </label></td>
                        <td  align=left><input type="text" name="grade_F" id="grade_F"></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td align="left"><input type="submit"  name ="submit_login" value="Graph Grade Distribution"></td>
                    </tr>
                  
                </Table>
            </th>

        </tr>
    </Table>
    </form>
    <!-- End the Form Data -->

<?php
    // Display errors
    ini_set("display_errors", 1);
    
    // Create a if statement to check if the submit button is clicked
    if (isset($_POST['submit_login'])) {
       
        // Get the Input Values of the Letter Grades
        $numA = $_POST['grade_A'];
        $numB = $_POST['grade_B'];
        $numC = $_POST['grade_C'];
        $numD = $_POST['grade_D'];
        $numF = $_POST['grade_F'];

    // Get the Total Grades
    $numA = intval($numA);
    $numB = intval($numB);
    $numC = intval($numC);
    $numD = intval($numD);
    $numF = intval($numF);
    
    // Calculate the Total Grades
    $total_Grades = $numA + $numB + $numC + $numD + $numF;

    // Calculate the Percentage of each Letter
    if ($total_Grades != 0) {
        $percent_A = round(($numA / $total_Grades) * 100);
        $percent_B = round(($numB / $total_Grades) * 100);
        $percent_C = round(($numC / $total_Grades) * 100);
        $percent_D = round(($numD / $total_Grades) * 100);
        $percent_F = round(($numF / $total_Grades) * 100);
      } else {
        $percent_A = 0;
        $percent_B = 0;
        $percent_C = 0;
        $percent_D = 0;
        $percent_F = 0;
        // or the user will handle the error
      }
    
     
     
      // Create a Graph Table
       echo "<center>";
        echo "<br>";
        echo "<Table width ='90%' border='0' class='table3'>";
        echo '<tr>
              <th>Total Grades:' . $total_Grades . '</th>'
              . '<th>&nbsp;</th>'
              . '<th></th>'
              . '</tr>' ;
        
              echo '<tr><td class="cent">A = ' . $numA . '</td>'
              . '<td class ="kantotan">' . $percent_A . '%</td>'
              . '<td class="bgA" style="width:' .$percent_A . 'px";'; 
                echo '</tr>';
            
                echo '<tr><td class="cent">B = ' . $numB . '</td>'
                . '<td class ="kantotan">' . $percent_B . '%</td>'
                . '<td class="bgB" style="background-color:#eb4034; width:' .$percent_B . 'px;"';
                echo '</tr>';

                echo '<tr><td class="cent">C = ' . $numC . '</td>'
                . '<td class ="kantotan">' . $percent_C . '%</td>'
                . '<td class="bgC" style="width:' .$percent_C . '%"';
                echo '</tr>';

                echo '<tr><td class="cent">D = ' . $numD . '</td>'
                . '<td class ="kantotan">' . $percent_D . '%</td>'
                . '<td class="bgD" style="width:' .$percent_D . '%"';
                echo '</tr>';

                echo '<tr><td class="cent">F = ' . $numF . '</td>'
                . '<td class ="kantotan">' . $percent_F . '%</td>'
                . '<td class="bgF" style="width:' .$percent_F . '%"';
                echo '</tr>';
                echo "</Table>";
                echo "</center>";

     //    Create a if statement that shows that the the form is empty
        if (empty($numA) || empty($numB) || empty($numC) || empty($numD) || empty($numF)) {
            echo "<center>";
            echo "<br>";
            echo "<Table width ='40%' border='0' class='table4'>";
            echo '<tr>
                  <th>ERROR: Please Fill up the Form</th>'
                  . '<th>&nbsp;</th>'
                  . '<th></th>'
                  . '</tr>' ;
            }
        }           

?>
</body>
</html>