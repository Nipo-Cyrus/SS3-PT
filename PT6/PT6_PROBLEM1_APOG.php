<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Insert a Table -->
<center>
    <!-- create a Form -->
<Form action="" method="post">
<Table >
        <tr>
            <th>
                Grade Distribution
                <table>
                   <tr>
                        <td>
                           How many letter grade 'A':</td>
                        <td><input type="text" name="grade_A" id="grade_A" required></td>
                    </tr>
                    <tr>
                        <td> How many letter grade 'B':</td>
                        <td><input type="text" name="grade_B" id="grade_B" required></td>
                    </tr>
                    <tr>
                        <td>How many letter grade 'C':</td>
                        <td><input type="text" name="grade_C" id="grade_C" required></td>
                    </tr>
                    <tr>
                        <td>How many letter grade 'C':</td>
                        <td><input type="text" name="grade_C" id="grade_C" required></td>
                    </tr>
                    <tr>
                        <td>How many letter grade 'D':</td>
                        <td><input type="text" name="grade_D" id="grade_D" required></td>
                    </tr>    
                    <tr>
                        <td>How many letter grade 'F':</td>
                        <td><input type="text" name="grade_F" id="grade_F" required></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td align="left"><input type="submit" value="submit login" name="submit_login" </td>
                    </tr>


                </table>
            </th>
        </tr>
    </Table>

</center>

<!-- Start a php Program for Distribution  Grade and it's Graph -->
    <?php
    //Get the Grades of each form
    $grade_A = $_POST['grade_A'];
    $grade_B = $_POST['grade_B'];
    $grade_C = $_POST['grade_C'];
    $grade_D = $_POST['grade_D'];
    $grade_F = $_POST['grade_F'];

    //calculate the total sum of grades
    $total = $grade_A + $grade_B + $grade_C + $grade_D + $grade_F;

    //calculate the percentage of each grade and round it
    $percent_A = round(($grade_A / $total) * 100);
    $percent_B = round(($grade_B / $total) * 100);
    $percent_C = round(($grade_C / $total) * 100);
    $percent_D = round(($grade_D / $total) * 100);
    $percent_F = round(($grade_F / $total) * 100);

    //Create a table for the distribution of grades
    echo '<br><br>';
    echo '<center>';
    echo '<table border=0 width=70%>';
    echo '<tr>'
          . '<th align="left">Total Grade: ' . $total . '</th>'  
          . '<th align="right">0' 
          . '<th align="right">10' 
          . '<th align="right">20' 
          . '<th align="right">30' 
          . '<th align="right">40' 
          . '<th align="right">50' 
          . '<th align="right">60' 
          . '<th align="right">70' 
          . '<th align="right">80' 
          . '<th align="right">90' 
          . '<th align="right">100' 
          . '</tr>' ;
          echo '<tr>'
          . '<td align="center">A ='
          .$grade_A . '</td>'
          . '<td align="right">'. $percent_A . '%</td>';
          echo '<tr>'
         . '<td align="center">B ='
         .$grade_B . '</td>'
         . '<td align="right">'. $percent_B . '%</td>';
         echo '<tr>'
         . '<td align="center">C ='
         .$grade_C . '</td>'
         . '<td align="right">'. $percent_C . '%</td>';
         echo '<tr>'
         . '<td align="center">D ='
         .$grade_D . '</td>'
         . '<td align="right">'. $percent_D . '%</td>';
         echo '<tr>'
         . '<td align="center">F ='
         .$grade_F . '</td>'
         . '<td align="right">'. $percent_F . '%</td>';
        
    echo '</table>';

    
    ?>
        
   
   
</form>
    </body>
    </html> 
    