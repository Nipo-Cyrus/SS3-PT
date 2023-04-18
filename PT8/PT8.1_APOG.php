<?php 
// Function script

function cost($lumber10, $percentage10 ) {
    $pricelumber = $lumber10 + (($percentage10 * $lumber10) / 100);
    $formattedexpenses = number_format($pricelumber);
   
    return $formattedexpenses;
}

function initial($initialcost){
    $initialcost = $initialcost;
    $formattedcost = number_format($initialcost);
  
    return $formattedcost;
}

function total($lumber, $concrete, $drywall, $paint, $misc){
    $total = $lumber + $concrete + $drywall + $paint + $misc;
    $formattedtotal = number_format($total);
   
    return $formattedtotal;
}
// lumber initial cost and it's increased rates
    initial(150000);
    $lumber = initial(150000);
// 10%
    cost(150000, 10);
    $lumber10 = cost(150000, 10);
// 15%
    cost(150000, 15);
    $lumber15 = cost(150000, 15);
// 20%
    cost(150000, 20);
    $lumber20 = cost(150000, 20);

// Concrete Initial cost and it's increased rates
    initial(78000);
    $concrete = initial(78000);
// 10%
    cost(78000, 10);
    $concrete10 = cost(78000, 10);
// 15%
    cost(78000, 15);
    $concrete15 = cost(78000, 15);
// 20%
    cost(78000, 20);
    $concrete20 = cost(78000, 20);
   
// Drywall initial costs and it's increased rates
        initial(69000);
        $drywall = initial(69000);
// 10%
    cost(69000, 10);
    $drywall10 = cost(69000, 10);
// 15% 
    cost(69000, 15);
    $drywall15 = cost(69000, 15);
// 20%
    cost(69000, 20);
    $drywall20 = cost(69000, 20);

// Miscellanous initial cost and it's increased rates
    initial(20000);
    $misc = initial(20000);
// 10% 
    cost(20000, 10);
    $misc10 = cost(20000, 10);
// 15%
    cost(20000, 15);
    $misc15 = cost(20000, 15);
// 20%
    cost(20000, 20);
    $misc20 = cost(20000, 20);

// paint initial cost and it's increased rates
    initial(12000);
    $paint = initial(12000);
// 10%
    cost(12000, 10);
    $paint10 = cost(12000, 10);
  
// 15%
    cost(12000, 15);
    $paint15 = cost(12000, 15);

// 20%
    cost(12000, 20);
    $paint20 = cost(12000, 20);

// Total initial cost and it's increased rates
    total(150000, 78000, 69000, 12000, 20000);
    $total = total(150000, 78000, 69000, 12000, 20000);
// 10%
    total(165000, 85800, 14400, 13200, 22000);
    $total10 = total(165000, 85800, 75900, 13200, 22000);
// 15%
    total(172500, 89700, 79350, 13800, 23000);
    $total15 = total(172500, 89700, 79350, 13800, 23000);
// 20%
    total(180000, 93600, 82800, 14400, 24000);
    $total20 = total(180000, 93600, 82800, 14400, 24000);
?>


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
	background-color: #ffeed0;
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
                <td><?php echo '$' . $lumber . '.00' ; ?></td>
                 <td class="price">
                    <?php echo '$' . $lumber10 . '.00' ;?>      
                 </td>
                 <td class="price">
                    <?php echo '$' . $lumber15 . '.00' ; ?>  
                 </td>
                 <td class="price">
                 <?php echo '$' . $lumber20 . '.00' ; ?>
                 </td>
            </tr>
            <tr class="Concrete" style="height:40px" align="center">
                <td class="tableW">Concrete</td>
                <td>
                <?php  echo '$' . $concrete . '.00' ; ?>
                </td>
                <td class="price">
                <?php echo '$' . $concrete10 . '.00' ; ?>       
                </td>
                <td class="price">
                <?php echo '$' . $concrete15 . '.00' ; ?>   
                </td>
                <td class="price">
                <?php echo '$' . $concrete20 . '.00' ; ?>   
                </td>
            </tr>
            <tr class="Drywall" style="height:40px" align="center">
                <td class="tableW">Drywall</td>
                <td>
                <?php echo '$' . $drywall . '.00' ; ?>
                </td>
                <td class="price">
                <?php echo '$' . $drywall10 . '.00' ; ?>   
                </td>
                <td class="price">
                <?php echo '$' . $drywall15 . '.00' ; ?>   
                </td>
                <td class="price">
                <?php echo '$' . $drywall20 . '.00 <br>' ; ?>   
                </td>
            </tr>
            <tr class="Paint" style="height:40px" align="center">
                <td class="tableW">Paint</td>
                <td>
                <?php echo '$' . $paint . '.00' ; ?>
                </td>
                <td class="price">
                <?php echo '$' . $paint10 . '.00' ; ?>
                </td>
                <td class="price">
                <?php echo '$' . $paint15 . '.00' ; ?>
                </td>
                <td class="price">
                <?php echo '$' . $paint20 . '.00' ; ?>
                </td>
            </tr>
            <tr class="Miscellaneous" style="height:40px" align="center" >
                <td class="tableW">Miscellaneous</td>
                <td>
                <?php echo '$' . $misc . '.00' ; ?>
                </td>
                <td class="price">
                <?php echo '$' . $misc10 . '.00' ; ?>
                </td>
                <td class="price">
                <?php echo '$' . $misc15 . '.00' ; ?>
                </td>
                 <td class="price">
                <?php echo '$' . $misc20 . '.00' ; ?>
                </td> 
            </tr>
        </table>
            <br><br>    
            <table width="80%" align="center" border="0" style="height:40px" class="tableW">
                <tr>
                <td align="center">Total Expenditures:</td>
                <td class="table2">
                <?php echo '$' . $total . '.00' ; ?>
                </td>
                <td class="table2" class="price">
                <?php echo '$' . $total10 . '.00' ; ?>
                </td>
                <td class="table2">
                <?php echo '$' . $total15 . '.00' ; ?>
                </td>
                <td class="table2">
                <?php echo '$' . $total20 . '.00' ; ?>
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
    <h5 align="right" class="name">Remake</h5>

    </td>
    </table>
    
</body>
</html>