<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mad Libs Result</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mynerve">
</head>


<style>
    body {
        font-family: Mynerve, sans-serif;
        font-size: 1.5em;
        opacity: 1;
        color: #2F4F4F;        
        background: linear-gradient(135deg, #708090 21px, #d9ecff 22px, #d9ecff 24px, transparent 24px, transparent 67px, #d9ecff 67px, #d9ecff 69px, transparent 69px), linear-gradient(225deg, #708090 21px, #d9ecff 22px, #d9ecff 24px, transparent 24px, transparent 67px, #d9ecff 67px, #d9ecff 69px, transparent 69px)0 64px;
        background-color:#708090;
        background-size: 64px 128px;
    }
    
    .container {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        background-color: #87CEEB;
        border-radius: 5px;
    }
    
    h1 {
        text-align: center;
        color: #2F4F4F;
    }
    
    form {
        margin-top: 20px;
    }
    
    label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }
    
    input[type="text"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
    
    input[type="submit"] {
        background-color: #007bff;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
</style>

<body>
    <div class="container">
        <h1>Mad Libs Result</h1>
        <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $place = $_POST["place"];
                $adj1 = $_POST["adj1"];
                $noun1 = $_POST["noun1"];
                $animal = $_POST["animal"];
                $name = $_POST["name"];
                $adj2 = $_POST["adj2"];
                $noun2 = $_POST["noun2"];
                $color = $_POST["color"];
                $bodyPart = $_POST["bodyPart"];
                $noun3 = $_POST["noun3"];
                $sound = $_POST["sound"];
                $noun4 = $_POST["noun4"];                
                $number = $_POST["number"];
                $verb1 = $_POST["verb1"];
                $adj3 = $_POST["adj3"];
                $verb2 = $_POST["verb2"];
                $adj4 = $_POST["adj4"];
                $noun5 = $_POST["noun5"];
                $adj5 = $_POST["adj5"];
                $noun6 = $_POST["noun6"];
                $adj6 = $_POST["adj6"];
                
                $madLibsStory = "In the dimly lit corner of $place, a sinister $adj1 aura envelops a small $noun1, a seemingly harmless $animal named $name. But beneath its $adj2 fur, an eldritch $noun2 of unspeakable power has taken hold of poor $name. Its eyes now glow with an eerie $color, and its $bodyPart writhes with unnatural $noun3 as it lets out $sound that echoes like a $noun4.
                
                Only $number brave souls have dared to $verb1 this otherworldly feline, and the consequences have been $adj3 – $verb2 minds, $adj4 nightmares, and $noun5 that defy the laws of science. Can you uncover the $adj5 mystery behind the possession of $name, or will you too succumb to the $adj6 grasp of the eldritch $noun6 that dwells within?";
                
                echo "<p>$madLibsStory</p>";
            }
            ?>
        <a href="mad-lib.php">Go Back</a>
    </div>
</body>
</html>
