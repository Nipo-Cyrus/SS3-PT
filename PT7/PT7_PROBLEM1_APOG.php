<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Added Signature Icon -->
    <link rel="icon" href="https://img.utdstc.com/icon/163/844/163844fed46d7b335d8a5eac8a94e0203b544ffb44f8934bd94506635e58d4c8:200" type="image/x-icon">
<!-- Css stylesheet -->
    <style>
    .table1{
        width:60%;
        border: 1px solid;
        background-color: #fffacb;
    }
    .td1{
        
        height: 30px;
    }
    .table3{
        width: 40%;
        border-collapse: collapse;
        background-color: #99ffe6;
    }
    .table2{
        background-color: #fff2f4;
        border-collapse: collapse;
        border: absolute;
    }
    .table4{
        width: 50%;
        background-color: red;
    
    }
    .table4 td{
        text-align: center;
        height: 10px;
    }
    .button {
        background-color: #016c9a;
    border: none;
    color: white;
    padding: 5px 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    }
    
    th {
        height: 30px;
    }
    th, td {
        padding: 10px;
    }
    body {
        background-color: #a1b2c3;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 14px;
    } 
    </style>
    <title>Document</title>
</head>
<body>
   <form action="" method="post">
    <table class ="table1" border="0" align= "center" >
        <tr align="center">
            <th  class="td1" colspan="2">Investment Calculator</th>
        </tr> 
            <tr>
                <td colspan="2" align="center">
                  <table border="0" class="table2" >
                    <tr>
                <td  align="right">Initial Investment:</td>
                <td><input type="text" name="investment" id="investment"></td>
            </tr>
            <tr>
                <td>Annual Compund Interest (in Percent):</td>
                <td><input type="text" name="AnnualInt" id="AnnualInt"></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><button type="submit" name="calculate" class="button">Calculate</button> </td>
            </tr>
                </table> 
            </td>
        </tr>
        </table>

   </form>
   <?php
// Check if the form is submitted
if (isset($_POST{'calculate'})){
    // Retrieve the form data by using the element's name attributes value as key
    $investment = $_POST['investment'];
    $Percentage = $_POST['AnnualInt'];
    
    $investment = intval($investment);
    $Percentage = intval($Percentage);
    //Connvert $AnnualInt from percentage to decimal
    $AnnualInt = $Percentage / 100;

// Create an if statement that shows the form is empty
    if (empty($investment) || empty($Percentage)) { 
        echo '<center>';
        echo '<br>';echo '<br>';
        echo '<table class= "table4" ><tr><td><p style="color:white;"><i>Please fill out the form completely.</i></p><td><tr><table>';
    } else {
    // Display the result
   
    echo '<br>';echo '<br>';
    echo '<table border="1" class= "table3" align ="center"c>';
    echo '<tr>'
         . '<th>Year</th>'
         . '<th>Initial Investment</th>'
         . '</tr>'; 
        //  Create the loop
         $i = 1;
    do { $investment = $investment + ($investment * $AnnualInt);
        echo '<tr>';
        echo '<td align= "center">' . $i . '</td>';
        // remove the unecessart zeros from the end of the number
        // format the number to 5 decimal places
        echo '<td align="left">' . rtrim(number_format($investment, 5), '0.') . '</td>';
        echo '</tr>';
        $i++;
    } while ($i <= 10);

    echo '</table>';
    
   }
} 
?>
<br><br><br>
</body>
</html>