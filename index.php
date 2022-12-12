<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="librairie.js"></script>
    <title>FizzBuzzator</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<style>
        body {
            text-align: center;
            font-family: sans-serif;
        }
        .fizzbuzz-output {
            margin: auto;
            text-align: left;
            width: 400px;
            border: 1px solid #ccc;
            padding: 20px;
        }
        input[type="number"] {
            padding: 10px;
            font-size: 16px;
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #ccc;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #ddd;
        }
    </style>
</head>
<header>
<h1>FIZZBUZZATOR </h1>    

</header>
<body>
   
    <!--L'utilisateur ne peut pas entrer de nombre négatif ou décimaux dans ce champ -->
    <input type="number" id="number" name="number" min="0" value="0" oninput="validity.valid||(value='');" required> 
    <!--On appelle la fonction FizzbuzzHTML() en cliquant sur le bouton. -->
    <button class="btn btn-primary" onClick="FizzbuzzHTML()">Valider</button>

   
   
   
    <div id="resultat">
    <p> Resultat: </p>        
    </div>

</body>
</html>