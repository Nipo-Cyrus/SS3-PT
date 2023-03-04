<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
<table border="0">
    <th><h1>Amortization</h1></th>     
    <table width="80%" align="center">
           <!-- Input principal loan Amount -->
        <tr>
                <td width="50%" align="right">Principal Loan Amount <b>(P)</b>:&nbsp;</td>
                <td width="50%" align="left"><input type="text" name="input_p" id="input_p" required></td>
            </tr>
            <!-- Input Annual Interest Rate -->
            <tr>
                <td align="right">Annual Interest Rate <b>(r)</b>:&nbsp;</td>
                <td align="left"><input type="text" name="input_r" id="input_r"required> % <i>(divided 12 months)</i></td>
          </tr>
          <!-- Input Total Payment Period -->
          <tr>
            <td align="right">Total Number of Payment Periods <b>(n)</b>:&nbsp;</td>
            <td align="left"><input type="text" name="input_n" id="input_n" required /></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <!-- Submit button -->
            <tr>
                <td align="right">&nbsp;</td>
                <td align="left"><input type="submit" name="submit_login" value="Compute" /></td>
        </table>    
 </table>    
</center>

</body>
</html>