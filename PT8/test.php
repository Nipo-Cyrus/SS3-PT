<?php 
function lumbercost() {

    echo '$150000.00';
}  
function lumber10($lumber10, $percentage10 ) {
    $pricelumber = $lumber10 + (($percentage10 * $lumber10) / 100);
    $formattedlumber = number_format($pricelumber);
    
    echo $formattedlumber;
}
?>
<?php lumber10(150000, 10); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> <center>
    <table border="1" width="90%%">
        <td>
            <h1>Public Library Expansion Prject</h1>
            <h1>Cost Estimate</h1>
            <table border="1" width=70%>
                <tr>
                    <th>Expenditures</th>
                    <th>Estimated Cost</th>
                    <th>10% increase</th>
                    <th>15% increase</th>
                    <th>20% increase</th>
                </tr>
                <tr>
                    <td>Lumber</td>
                    <td></td>
                </tr>
            </table>
 
 
 
        </td>
    </table>
</body>
</html>
</html>