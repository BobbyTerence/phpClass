<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mad Libs Game</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
        <h1>Mad Libs Game</h1>
        <form method="post" action="mad-forms.php">
            <label for="place">Place:</label>
            <input type="text" id="place" name="place" required>

            <label for="adj1">Adjective:</label>
            <input type="text" id="adj1" name="adj1" required>
             
            <label for="noun1">Noun:</label>
            <input type="text" id="noun1" name="noun1" required>

            <label for="animal">Animal:</label>
            <input type="text" id="animal" name="animal" required>

            <label for="Name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="adj2">Adjective:</label>
            <input type="text" id="adj2" name="adj2" required>

            <label for="noun2">Noun:</label>
            <input type="text" id="noun2" name="noun2" required>

            <label for="color">Color:</label>
            <input type="text" id="color" name="color" required>

            <label for="bodyPart">Body Part:</label>
            <input type="text" id="bodyPart" name="bodyPart" required>

            <label for="noun3">Noun:</label>
            <input type="text" id="noun3" name="noun3" required>

            <label for="sound">Sound:</label>
            <input type="text" id="sound" name="sound" required>
            
            <label for="noun4">Noun:</label>
            <input type="text" id="noun4" name="noun4" required>

            <label for="number">Number:</label>
            <input type="text" id="number" name="number" required>

            <label for="verb1">Verb:</label>
            <input type="text" id="verb1" name="verb1" required>

            <label for="adj3">Adjective:</label>
            <input type="text" id="adj3" name="adj3" required>

            <label for="verb2">Verb:</label>
            <input type="text" id="verb2" name="verb2" required>

            <label for="adj4">Adjective:</label>
            <input type="text" id="adj4" name="adj4" required>

            <label for="noun5">Noun:</label>
            <input type="text" id="noun5" name="noun5" required>

            <label for="adj5">Adjective:</label>
            <input type="text" id="adj5" name="adj5" required>

            <label for="noun6">Noun:</label>
            <input type="text" id="noun6" name="noun6" required>
            
            <label for="adj6">Adjective:</label>
            <input type="text" id="adj6" name="adj6" required>

            <input type="submit" value="Generate Mad Lib">
        </form>
    </div>
</body>

</html>
