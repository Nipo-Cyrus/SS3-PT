<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://img.utdstc.com/icon/163/844/163844fed46d7b335d8a5eac8a94e0203b544ffb44f8934bd94506635e58d4c8:200" type="image/x-icon">
    <title>Library Expansion Project</title>
    <style type="text/css">
        body,td,th {
	font-family: Arial, Helvetica, sans-serif;
	

	font-size: 12px;
                    }
        body {
	background-color: #FFCC99;
                    }

    .table2 {
        color:#2d6637;
    }
    .head {
        color:#045ebf;
    }
    .name {
        margin-right: 100px;
        margin-top:-10px;
        color:#2c3a69;
    }
    .subhead {color:red}
    .tableHead{background-color:#6d7d8f;}
    .Lumber {background-color:#84ebf0;}
    .Concrete {background-color:#f7ffb8;}
    .Drywall {background-color:#84ebf0;}
    .Paint{background-color:#f7ffb8;}
    .Miscellaneous {background-color:#84ebf0;}
    .price {color:#1444e3;}
    .tableW {font-weight: bold;}
    </style>
</head>
<body>
<table width="90%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#000000">
    <td>
        <h1 class="head"><center> Public Library Expansion Project</center></h1>
        <h2 class="subhead"><center>Cost Estimates</center></h2>
        <table align="center" style="width:80%" border="1">
            <tr class="tableHead" style="height:60px">
                <th>Expenditures</th>
                <th>Estimated Cost</th>
                <th>10% increase</th>
                <th>15% increase</th>
                <th>20% increase</th>
            </tr>
            <tr class="Lumber" style="height:40px" align="center">
                <td class="tableW">Lumber</td>
                <td><?php $lumber= 150000;
                          $formattedLumber= number_format($lumber);
                          echo '$' .  $formattedLumber . '.00';
                 ?></td>
                 <td class="price">
                    <?php
                    $lumber= 150000;
                    $percentage = 10;
                    $price = $lumber + (($percentage * $lumber) / 100);
                    $formattedPrice = number_format($price);
                    echo '$' .  $formattedPrice . '.00';
                    ?>
                 </td>
                 <td class="price">
                    <?php
                   $lumber= 150000;
                   $percentage = 15;
                   $price = $lumber + (($percentage * $lumber) / 100);
                   $formattedPrice = number_format($price);
                   echo '$' .  $formattedPrice . '.00';
                    ?>
                 </td>
                 <td class="price">
                 <?php
                   $lumber= 150000;
                   $percentage = 20;
                   $price = $lumber + (($percentage * $lumber) / 100);
                   $formattedPrice = number_format($price);
                   echo '$' .  $formattedPrice . '.00';
                    ?>
                 </td>
            </tr>
            <tr class="Concrete" style="height:40px" align="center">
                <td class="tableW">Concrete</td>
                <td>
                <?php $Expenditures= 78000;
                          $formattedPrice= number_format( $Expenditures);
                          echo '$' . $formattedPrice . '.00';
                 ?>
                </td>
                <td class="price">
                <?php
                   $Expenditures= 78000;
                   $percentage = 10;
                   $price = $Expenditures + (($percentage *  $Expenditures) / 100);
                   $formattedPrice = number_format($price);
                   echo '$' .  $formattedPrice . '.00';
                    ?>
                </td>
                <td class="price">
                <?php
                   $Expenditures= 78000;
                   $percentage = 15;
                   $price = $Expenditures + (($percentage *  $Expenditures) / 100);
                   $formattedPrice = number_format($price);
                   echo '$' .  $formattedPrice . '.00';
                    ?>
                </td>
                <td class="price">
                <?php
                   $Expenditures= 78000;
                   $percentage = 20;
                   $price = $Expenditures + (($percentage *  $Expenditures) / 100);
                   $formattedPrice = number_format($price);
                   echo '$' .  $formattedPrice . '.00';
                    ?>
                </td>
            </tr>
            <tr class="Drywall" style="height:40px" align="center">
                <td class="tableW">Drywall</td>
                <td>
                <?php $Expenditures= 69000	;
                          $formattedPrice= number_format( $Expenditures);
                          echo '$' . $formattedPrice . '.00';
                 ?>
                </td>
                <td class="price">
                <?php
                   $Expenditures= 69000;
                   $percentage = 10;
                   $price = $Expenditures + (($percentage *  $Expenditures) / 100);
                   $formattedPrice = number_format($price);
                   echo '$' .  $formattedPrice . '.00';
                    ?>
                </td>
                <td class="price">
                <?php
                   $Expenditures= 69000;
                   $percentage = 15;
                   $price = $Expenditures + (($percentage *  $Expenditures) / 100);
                   $formattedPrice = number_format($price);
                   echo '$' .  $formattedPrice . '.00';
                    ?>
                </td>
                <td class="price">
                <?php
                   $Expenditures= 69000;
                   $percentage = 20;
                   $price = $Expenditures + (($percentage *  $Expenditures) / 100);
                   $formattedPrice = number_format($price);
                   echo '$' .  $formattedPrice . '.00';
                    ?>
                </td>
            </tr>
            <tr class="Paint" style="height:40px" align="center">
                <td class="tableW">Paint</td>
                <td>
                <?php $Expenditures= 12000;
                          $formattedPrice= number_format( $Expenditures);
                          echo '$' . $formattedPrice . '.00';
                 ?>
                </td>
                <td class="price">
                <?php
                   $Expenditures= 12000;
                   $percentage = 10;
                   $price = $Expenditures + (($percentage *  $Expenditures) / 100);
                   $formattedPrice = number_format($price);
                   echo '$' .  $formattedPrice . '.00';
                    ?>
                </td>
                <td class="price">
                <?php
                   $Expenditures= 12000;
                   $percentage = 15;
                   $price = $Expenditures + (($percentage *  $Expenditures) / 100);
                   $formattedPrice = number_format($price);
                   echo '$' .  $formattedPrice . '.00';
                    ?>
                </td>
                <td class="price">
                <?php
                   $Expenditures= 12000;
                   $percentage = 20;
                   $price = $Expenditures + (($percentage *  $Expenditures) / 100);
                   $formattedPrice = number_format($price);
                   echo '$' .  $formattedPrice . '.00';
                    ?>
                </td>
            </tr>
            <tr class="Miscellaneous" style="height:40px" align="center" >
                <td class="tableW">Miscellaneous</td>
                <td>
                <?php $Expenditures= 20000;
                          $formattedPrice= number_format( $Expenditures);
                          echo '$' . $formattedPrice . '.00';
                 ?>
                </td>
                <td class="price">
                <?php
                   $Expenditures= 20000;
                   $percentage = 10;
                   $price = $Expenditures + (($percentage *  $Expenditures) / 100);
                   $formattedPrice = number_format($price);
                   echo '$' .  $formattedPrice . '.00';
                    ?>
                </td>
                <td class="price">
                <?php
                   $Expenditures= 20000;
                   $percentage = 15;
                   $price = $Expenditures + (($percentage *  $Expenditures) / 100);
                   $formattedPrice = number_format($price);
                   echo '$' .  $formattedPrice . '.00';
                    ?>
                </td>
                 <td class="price">
                <?php
                   $Expenditures= 20000;
                   $percentage = 20;
                   $price = $Expenditures + (($percentage *  $Expenditures) / 100);
                   $formattedPrice = number_format($price);
                   echo '$' .  $formattedPrice . '.00';
                    ?>
                </td>
                
            </tr>
        </table>
            <br><br>    
            <table width="80%" align="center" border="0" style="height:40px" class="tableW">
                <tr>
                <td align="center">Total Expenditures:</td>
                <td class="table2">
                <?php $Expenditures= 329000;
                          $formattedPrice= number_format( $Expenditures);
                          echo '$' . $formattedPrice . '.00';
                 ?>
                </td>
                <td class="table2" class="price">
                   <?php 
                        $lumber= 150000;
                        $concrete= 78000;
                        $drywall=  69000;
                        $paint=  12000;
                        $miscellaneous= 20000;
                        $percentage = 10;
                        $price = $lumber + $concrete + $drywall + $paint +$miscellaneous;
                        $calculatedPrice = $price + (($percentage  * $price) / 100);
                        $formattedPrice= number_format($calculatedPrice);
                        echo '$'.$formattedPrice. '.00'
                   ?>
                </td>
                <td class="table2">
                   <?php 
                        $lumber= 150000;
                        $concrete= 78000;
                        $drywall=  69000;
                        $paint=  12000;
                        $miscellaneous= 20000;
                        $percentage = 15;
                        $price = $lumber + $concrete + $drywall + $paint +$miscellaneous;
                        $calculatedPrice = $price + (($percentage  * $price) / 100);
                        $formattedPrice= number_format($calculatedPrice);
                        echo '$'.$formattedPrice. '.00'
                   ?>
                </td>
                <td class="table2">
                   <?php 
                        $lumber= 150000;
                        $concrete= 78000;
                        $drywall=  69000;
                        $paint=  12000;
                        $miscellaneous= 20000;
                        $percentage = 20;
                        $price = $lumber + $concrete + $drywall + $paint +$miscellaneous;
                        $calculatedPrice = $price + (($percentage  * $price) / 100);
                        $formattedPrice= number_format($calculatedPrice);
                        echo '$'.$formattedPrice. '.00'
                   ?>
                </td>
            </tr>
    
                </table>
    
    
    
    
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <h4 align="right" class="name">Created by: Apog, Nipo Cyrus T.</h4>

    </td>
    </table>
    
</body>
</html>