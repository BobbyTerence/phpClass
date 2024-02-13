<!DOCTYPE html>
<html lang="en">
<head>
  <title>String Manipulation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 
  <style>
	h1	{
		text-align: center;
		color: #B31942;
	}
	body	{
		background-color: #FFFFFF;
	}
	
	#outputDiv {
	   background:
        linear-gradient(324deg, #232927 4%,   transparent 4%) -70px 43px,
        linear-gradient( 36deg, #232927 4%,   transparent 4%) 30px 43px,
        linear-gradient( 72deg, #3D3D3D 8.5%, transparent 8.5%) 30px 43px,
        linear-gradient(288deg, #3D3D3D 8.5%, transparent 8.5%) -70px 43px,
        linear-gradient(216deg, #3D3D3D 7.5%, transparent 7.5%) -70px 23px,
        linear-gradient(144deg, #3D3D3D 7.5%, transparent 7.5%) 30px 23px,
    
        linear-gradient(324deg, #232927 4%,   transparent 4%) -20px 93px,
        linear-gradient( 36deg, #232927 4%,   transparent 4%) 80px 93px,
        linear-gradient( 72deg, #3D3D3D 8.5%, transparent 8.5%) 80px 93px,
        linear-gradient(288deg, #3D3D3D 8.5%, transparent 8.5%) -20px 93px,
        linear-gradient(216deg, #3D3D3D 7.5%, transparent 7.5%) -20px 73px,
        linear-gradient(144deg, #3D3D3D 7.5%, transparent 7.5%) 80px 73px;
       background-color: #0A3161;
       background-size: 100px 100px;
	   color: #FFFFFF;
	   font-size: 1.25em;
	   padding: 3em;
	   text-align: center;
	   min-height: 19em;
	   box-shadow: 7px 7px #B31942;
		
	}
	#buttonDiv	{
		text-align: center;
		padding: 2em;
	}
	.blanks	{
		letter-spacing: .5em;
		font-size: 2em;
		word-spacing: 1em;
	}
	hr	{
		background-color: #B31942;
		height: .25em;
	}
  
  </style>
 
</head>
<body>

<div class="container-fluid">
  <h1>Own a Musket for Home Defense, as the Founding Fathers Intended</h1>
 
  <div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-10" id="outputDiv">
		<?php
			$foundingFathers = "Own a musket for home defense, since that's what the founding fathers intended. Four ruffians break into my house. \"What the devil?\" As I grab my powdered wig and Kentucky rifle. Blow a golf ball sized hole through the first man, he's dead on the spot. Draw my pistol on the second man, miss him entirely because it's smoothbore and nails the neighbors dog. I have to resort to the cannon mounted at the top of the stairs loaded with grape shot, \"Tally ho lads\" the grape shot shreds two men in the blast, the sound and extra shrapnel set off car alarms. Fix bayonet and charge the last terrified rapscallion. He Bleeds out waiting on the police to arrive since triangular bayonet wounds are impossible to stitch up. Just as the founding fathers intended.";
			echo $foundingFathers;
			echo "<hr>";
			
			echo "<h1>strlen()</h1>";
			echo "Number of Characters: ";
			echo strlen($foundingFathers);
			echo "<br>";
			
			echo "<h1>str_word_count()</h1>";
			echo "Number of words: ";
			echo str_word_count($foundingFathers);
			echo "<br>";
			
			echo "<h1>strpos()</h1>";
			echo "First occurance of intended: ";
			echo strpos($foundingFathers, "intended");
			echo "<br>";
			
            echo "<h1>strrpos()</h1>";
            echo "Last occurance of intended: ";
            echo strrpos($foundingFathers, "intended");
            echo "<br>";
            
            echo "<h1>strrev()</h1>";
            echo "Reverse, reverse: <br>";
            echo strrev($foundingFathers);
            echo "<br>";
            
            echo "<h1>str_shuffle()</h1>";
            echo "Cupid Shuffle: <br>";
            echo str_shuffle($foundingFathers);
            echo "<br>";
            
            echo "<h1>str_shuffle()</h1>";
            echo "Cupid Shuffle: <br>";
            echo str_shuffle($foundingFathers);
            echo "<br>";	
            
            echo "<h1>str_rot13()</h1>";
            echo "Shift each letter 13 places in the alphabet: <br>";
            echo str_rot13($foundingFathers);
            echo "<br>Reverse, reverse: <br>";
            echo str_rot13(str_rot13($foundingFathers));
            echo "<br>";
            
            echo "<h1>str_replace()</h1>";
            echo "Replace 'e' with '3':<br>";
            echo str_replace('e', '3', $foundingFathers);
            echo "<br>";
            
            echo "<h1>explode() - Array of Words</h1>";
            $wordArray = explode(" ", $foundingFathers);
            foreach($wordArray as $val){
                echo "$val <br>";
            }
            
            echo "<h1>str_split - Array of Characters</h1>";
            $charArray = str_split($foundingFathers);
            foreach($charArray as $val){
                echo "$val <br>";
            }
		?>
	</div>
	<div class="col-sm-1"></div>
  </div>
  
</div>
    
</body>
</html>