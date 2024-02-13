<!DOCTYPE html>

<html lang="en">
	<head>
		<title>Country Capitals</title>
  		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		
		<style>
		  body {
		      background: #316650;
		      color: #45322E;
		  }
		
		  h1 {
		      text-align: center;
		      margin-top: .25em;
		      margin-bottom: .04em;
		  }
		
		  #dis-box {
		      margin-top: 7.5em;
		      border-radius: 4em;
		      text-align: center;
		      background: #CFD3CD;
		  }
		  #dis-box p {
		      margin-bottom: .1em;
		  }
		  
		  #underline {
		      height: .75em;
		      margin-top: .01em;
		      margin-left: 1em;
		      margin-right: 1em;
		      margin-bottom: .25em;
		      border-radius: .5em;
		      background: #316650;
		  }
        </style>
        
        <?php 
            global $capCount;
            
            $capCount = array("USA" => "Washington, D.C.", "Canada" => "Ottawa", "United Kingdom" => "London", "France" => "Paris", "Germany" => "Berlin", "Australia" => "Canberra", "Japan" => "Tokyo", "China" => "Beijing", "Brazil" => "Brasília", "Russia" => "Moscow", "India" => "New Delhi", "Italy" => "Rome", "Spain" => "Madrid", "South Korea" => "Seoul", "Mexico" => "Mexico City", "Argentina" => "Buenos Aires", "South Africa" => "Pretoria", "Egypt" => "Cairo", "Saudi Arabia" => "Riyadh", "Turkey" => "Ankara");
        ?>
        
	</head>
    <body>
    		<div class="row">
    			<div class="col-md-3"></div>
    			<div class="col-md-6">
    				<div class="border border-info" id="dis-box">
    					<h1>Countries and Capitals</h1>
    					<div id="underline"></div>
    					<p>
        					<?php
                            foreach($capCount as $x => $x_value) {
                              echo "The capital of <strong>" . $x . "</strong>, is <strong>" . $x_value . "</strong>.";
                              echo "<br>";
                            }
                        ?>
                    </p>
    				</div>
    			</div>
    			<div class="col-md-3"></div>
    		</div>        
    </body>
</html>