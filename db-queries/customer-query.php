<!DOCTYPE html>
<html lang="en">
	<head>
      <title>Database Connection</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     
      <style>
    	h1	{
    		text-align: center;
    		color: #afafaf;
    		text-shadow: 2px 2px 0px #000000;
    	}
    	body	{
    		background-color: #80b3ff;
    	}
    	
    	#outputDiv {
    		background-color: white;
    		font-size: 1.25em;
    		padding: 1.5em;
    		text-align: center;
    		min-height: 19em;
    		box-shadow: 7px 7px #afafaf;
    		
    	}
    	#buttonDiv	{
    		text-align: center;
    		padding: 1em;
    	}
    	#buttonDiv input{
    		width: 95%;
    		margin: 1%;
    	}
    	.blanks	{
    		letter-spacing: .5em;
    		font-size: 2em;
    		word-spacing: 1em;
    	}
    	hr	{
    		background-color: #ff4d4d;
    		height: .25em;
    	}
      
      </style>
     
    </head>
    
    <body>    
        <div class="container-fluid">
          <h1>Query Results</h1>         
          <div class="row">
        	<div class="col-sm-1"></div>
        	
            <div class="col-sm-3" id="buttonDiv">
        		<input class="btn btn-secondary" type="submit" name="myBtns" value="Employees by Last Name" onclick="location='employee-query.php'">
        		<input class="btn btn-secondary" type="submit" name="myBtns" value="Customer Credit Limit" onclick="location='customer-query.php'">        	
        	</div>
        	
            <div class="col-sm-7" id="outputDiv">
        		<?php
        			$servername = "localhost";
        			$username = "root";
        			$password = "";
        			$dbname = "classicmodels";
        
        			try {
        			  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);        			  
        			  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // set the PDO error mode to exception
        			  echo "Connected successfully";
        			  // Add code for query
        			  $sql = "SELECT `customerName`, `creditLimit` FROM `customers` ORDER BY `creditLimit` DESC;";
        			  $q = $conn->query($sql);
        			  ?>
        			  <!-- Build Table -->
        			  <table class="table">
        			    <tr>
        			  		<th>Customer Name</th> <th>Credit Limit</th>
        			  	</tr>        			         			  
        				<?php
            				 while($row = $q->fetch()):
        				?>
            		    <tr>
            		    	<td><?php echo htmlspecialchars($row['customerName']);?></td>
            		      	<td><?php echo htmlspecialchars($row['creditLimit']);?></td>
            		    </tr>
        				<?php endwhile;?>
        			  </table>        		
        		<?php 
        			} catch(PDOException $e) {
        			  echo "Connection failed: " . $e->getMessage();
        			}
        		?>        		
        	</div>
        	
        	<div class="col-sm-1"></div>
          </div>          
        </div>
        <?php $conn->close()?>
    </body>
</html>