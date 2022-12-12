<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="librairie.js"></script>
    <title>FizzBuzz</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  
</head>
<header>
<h1>FIZZBUZZ </h1>    

</header>
<body>
    <!-- <form action="resultat.php" method="post"></form> -->
    <input type="number" id="number" name="number" min="0" oninput="validity.valid||(value='');"> 
    <button class="btn btn-primary" onClick="Fizzbuzz()">test</button>
    

    <div class="card" style="width: 18rem;">

  <div class="card-body">
    <h5 class="card-title">Résultat:</h5>
    <p class="card-text">To do</p>
  </div>
</div>

</body>
</html>