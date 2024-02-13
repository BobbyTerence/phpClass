<!DOCTYPE html>
<html lang="en">
    <head>
      <title>File Handling</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
      <style>
        	h3	{text-align: center;
        			margin-bottom: 1em;}
        
        	body {background-color: #00cccc;}
        
        	.displayArea {background-color: white;
        					box-shadow: 5px 5px 0px #606060;
        					min-height: 15em;
        					padding: .75em;
        					margin-bottom: 1em;
        					text-align:center;
        					font-size: 1.25em;
        					}
        
        	.rounded	{border-radius: .5em;
        					border: solid blue 2px;}
        
        	img		{max-height: 100%;}
      </style> 
           
    </head>
    <body>    
        <div class="container-fluid">
        	<div class="row">
        		<div class="col-md-4"></div>
        		<div class="col-md-6">
        			<h3>File Handling</h3>
        		</div>
        		<div class="col-md-2"></div>
        	</div>
        	<div class="row">
        		<div class="col-md-2"></div>
        		<div class="col-md-2">
            		<form method="post">
            			<div class="row m-1">
            				<button type="submit" class="btn btn-secondary btn-block" name="ReadStu">Read Student File</button>
            			</div>
            			<div class="row m-1">
            				<button type="submit" class="btn btn-secondary btn-block" name="ReadLine">Read Each Line</button>
            			</div>
            			<div class="row m-1">
            				<button type="submit" class="btn btn-secondary btn-block" name="EAandFile">Email Array and File</button>
            			</div>
            			<div class="row m-1">
            				<button type="submit" class="btn btn-secondary btn-block" name="SAandFile">Student Array and File</button>
            			</div>
            		</form>
        		</div>
        		<div class="col-md-6 displayArea">
        			<?php
            			if (isset($_POST['ReadStu'])) {
            			    ReadStudent();
            			}
            			if (isset($_POST['ReadLine'])) {
            			    ReadLines();
            			}
            			if (isset($_POST['EAandFile'])) {
            			    WriteEmail();
            			}
            			if (isset($_POST['SAandFile'])) {
            			    WriteStudent();
            			}
            			
            			/*Add functions here*/
            			
            			function ReadStudent()
            			{
            			    $givenFile = fopen("stuFile.txt", "r") or die("Unable to Open File");
            			    
            			    echo fread($givenFile, filesize("stuFile.txt"));
            			    
            			    fclose($givenFile);
            			} 
            			
            			function ReadLines()
            			{
            			    $givenFile = fopen("stuFile.txt", "r") or die("Unable to Open File");
            			    
            			    while(!feof($givenFile))
            			    {
            			        echo fgets($givenFile) . "<br>";
            			    }
            			    
            			    fclose($givenFile);
            			}
            			
            			function WriteEmail()
            			{
            			    $givenFile = fopen("stuFile.txt", "r") or die("Unable to Open File");
            			    
            			    $x = 0;
            			    while(!feof($givenFile))
            			    {
            			        $compChar = fgetc($givenFile);
            			        
            			        if($compChar == '(') //This will parse the information for just emails
            			        {
            			            do{
            			                $emailChar = fgetc($givenFile);
            			                
            			                if($emailChar != ')')
            			                {
            			                    $emailArray[$x] .= $emailChar;
            			                }
            			            }while($emailChar != ')');
            			            
            			            fgets($givenFile);
            			            
            			            $x++;
            			        }
            			    }
            			    
            			    foreach($emailArray as $value)
            			    {
            			        echo "$value <br>";
            			    }
            			    
            			    fclose($givenFile);
            			    
            			    $newFile = fopen("emailArray.txt", "a");
            			    
            			    if($newFile)
            			    {
            			        foreach($emailArray as $value)
            			        {
            			            $txt = $value . "\n";
            			            
            			            fwrite($newFile, $txt);
            			        }
            			    } else {
            			        echo "newFile does not have a value inside of it.";
            			    }
            			    
            			    fclose($newFile);
            			}
            			
            			function WriteStudent()
            			{
            			    $givenFile = fopen("stuFile.txt", "r") or die("Unable to Open File");
            			    
            			    $x = 0;
            			    while(!feof($givenFile))
            			    {
            			        $compChar = fgetc($givenFile);
            			        
            			        if($compChar != '(') //This will parse the information for just the names
            			        {
            			            $stuArray[$x] .= $compChar;
            			        }
            			        else
            			        {
            			            fgets($givenFile); //Waste the rest of the string
            			            $x++;
            			        }           			        
            			    }
            			    
            			    foreach($stuArray as $value)
            			    {
            			        echo "$value <br>";
            			    }
            			    
            			    fclose($givenFile);
            			    
            			    $newFile = fopen("studentArray.txt", "a");
            			    
            			    if($newFile)
            			    {
            			        foreach($stuArray as $value)
            			        {
            			            $txt = $value . "\n";
            			            
            			            fwrite($newFile, $txt);
            			        }
            			    } else {
            			        echo "newFile does not have a value inside of it.";
            			    }
            			    
            			    fclose($newFile);
            			}
        			?>
        		</div>
        		<div class="col-md-2"></div>
        	</div>
        
        </div>    
    </body>
    
</html>