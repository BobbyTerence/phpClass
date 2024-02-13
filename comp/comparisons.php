<!DOCTYPE html>

<html lang="en">
	<head>
		<title>Brother Bear does Numbers</title>
  		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		
		<style>
        	   thead {
        	       background: #FFFFF;
        	       color: #00000;
        	       text-align: center;
        	   }
        	   
        	   td {
        	       text-align: center;
        	   }
        	   
        	   table {
        	       margin-top: 5em;
        	       border: solid;
        	   }
        	</style>
	</head>
	
	<?php
	    //Create variables for performing math
	   	global $rand1, $rand2, $result;
	   	
	   	$rand1 = rand(1,100);
	   	$rand2 = rand(1,100);
	   	$rand3 = rand(1,100);
	   	$rand4 = rand(1,100);
	?>

    <body>
        	<div class="row">
        		<div class="col-md-1 col-sm-1"></div>
        		<div class="col-md-10 col-sm-10">
        			<table class="table table-striped table-hover">
                      <thead>
                        <tr>
                          <th scope="col">Random Number</th>
                          <th scope="col">Comparison Operator</th>
                          <th scope="col">Random Number</th>
                          <th scope="col">Result</th>
                        </tr>
                      </thead>
                      <tbody>
                      	<tr>
                      		<?php 
                      		    echo "<td>$rand1</td>
                                <td>==</td>
                                <td>$rand2</td>";
                                
                                if($rand1 == $rand2)
                                {
                                    $result = "EQUAL";
                                }
                                else
                                {
                                    $result = "NOT EQUAL";
                                }
                                
                                echo "<td>$rand1 is $result to $rand2</td>";
                      		?>
                      	</tr>
                      	<tr>
                      		<?php 
                      		    echo "<td>$rand1</td>
                                <td>===</td>
                                <td>$rand2</td>";
                                
                                if($rand1 === $rand2)
                                {
                                    $result = "IDENTICAL";
                                }
                                else
                                {
                                    $result = "NOT IDENTICAL";
                                }
                                
                                echo "<td>$rand1 is $result to $rand2</td>";
                      		?>
                      	</tr>
                      	<tr>
                      		<?php 
                      		    echo "<td>$rand1</td>
                                <td>!=</td>
                                <td>$rand2</td>";
                                
                                if($rand1 != $rand2)
                                {
                                    $result = "NOT EQUAL";
                                }
                                else
                                {
                                    $result = "EQUAL";
                                }
                                
                                echo "<td>$rand1 is $result to $rand2</td>";
                      		?>
                      	</tr>
                      	<tr>
                      		<?php 
                      		    echo "<td>$rand1</td>
                                <td>!==</td>
                                <td>$rand2</td>";
                                
                                if($rand1 !== $rand2)
                                {
                                    $result = "NOT IDENTCAL";
                                }
                                else
                                {
                                    $result = "IDENTICAL";
                                }
                                
                                echo "<td>$rand1 is $result to $rand2</td>";
                      		?>
                      	</tr>
                      	<tr>
                      		<?php 
                      		    echo "<td>$rand1</td>
                                <td>></td>
                                <td>$rand2</td>";
                                
                                if($rand1 > $rand2)
                                {
                                    $result = "GREATER THAN";
                                }
                                else
                                {
                                    $result = "NOT GREATER THAN";
                                }
                                
                                echo "<td>$rand1 is $result to $rand2</td>";
                      		?>
                      	</tr>
                      	<tr>
                      		<?php 
                      		    echo "<td>$rand1</td>
                                <td><</td>
                                <td>$rand2</td>";
                                
                                if($rand1 < $rand2)
                                {
                                    $result = "LESS THAN";
                                }
                                else
                                {
                                    $result = "NOT LESS THAN";
                                }
                                
                                echo "<td>$rand1 is $result to $rand2</td>";
                      		?>
                      	</tr>
                      	<tr>
                      		<?php 
                      		    echo "<td>$rand1</td>
                                <td>>=</td>
                                <td>$rand2</td>";
                                
                                if($rand1 >= $rand2)
                                {
                                    $result = "GREATER THAN OR EQUAL";
                                }
                                else
                                {
                                    $result = "NOT GREATER THAN OR EQUAL";
                                }
                                
                                echo "<td>$rand1 is $result to $rand2</td>";
                      		?>
                      	</tr>
                      	<tr>
                      		<?php 
                      		    echo "<td>$rand1</td>
                                <td><=</td>
                                <td>$rand2</td>";
                                
                                if($rand1 <= $rand2)
                                {
                                    $result = "LESS THAN OR EQUAL";
                                }
                                else
                                {
                                    $result = "NOT LESS THAN OR EQUAL";
                                }
                                
                                echo "<td>$rand1 is $result to $rand2</td>";
                      		?>
                      	</tr>
                      	<tr>
                      		<?php 
                      		    echo "<td>$rand1</td>
                                <td><=></td>
                                <td>$rand2</td>";
                                
                                $result = ($rand1 <=> $rand2);
                                
                                echo "<td>$result</td>";
                      		?>
                      	</tr>
                      </tbody>
                    </table>
                    <table class="table table-striped table-hover">
                      <thead>
                        <tr>
                          <th scope="col">Random Number</th>
                          <th scope="col">Random Number</th>
                          <th scope="col">Random Number</th>
                          <th scope="col">Random Number</th>
                          <th scope="col">Average</th>
                        </tr>
                      </thead>
                      <tbody>
                      	<tr>
                      		<?php 
                      		    echo "<td>$rand1</td>
                                <td>$rand2</td>
                                <td>$rand3</td>
                                <td>$rand4</td>";
                                
                                $result = ($rand1 + $rand2 + $rand3 + $rand4) / 4;
                                
                                echo "<td>$result</td>";
                                
                                global $pics;
                                
                                $pics = array("10.jpg", "20.jpeg", "30.jpeg", "40.jpeg", "50.jpeg", "60.png", "70.png", "80.jpeg", "90.png");
                      		?>
                      	</tr>
                      </tbody>
                    </table>
                    
                    <div class="text-center">
                    	<?php
                    	   $index = ($result/10) - 1;
                    	
                    	   echo "<img src='images/$pics[$index]'>";
                    	?>
                    </div>
        		</div>
        		<div class="col-md-1 col-sm-1"></div>
        	</div>		
    </body>
</html>