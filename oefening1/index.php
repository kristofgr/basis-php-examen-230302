<?php
require "includes/db.inc.php";
require "includes/functions.inc.php";

$movies = getMovies();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies Ranking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <div class="container">

    <h1>Movies Ranking</h1>

    <table class="table">
      <thead>
        <tr>
          <th></th>
          <th>Name</th>
          <th>Genre</th>
          <th>Studio</th>
          <th>Year</th>
          <th>Score</th>
          <th></th>
        </tr>
      </thead>


      <tbody>  
      <?php foreach ($movies as $key => $movies) { ?>
        <tr>
          <td><?= $key+1 ?></td>
          <td><?= $movie->name ?></td>
          <td><?= $movie->genre ?></td>
          <td><?= $movie->studio ?></td>
          <td><?= $movie->year ?></td>
          <td><?= $movie->score ?></td>
          <td><a href="#">edit</a> - <a href="#">delete</a></td>
        </tr>
      <?php } ?>
      </tbody>

    </table>

  </div>
</body>
</html>