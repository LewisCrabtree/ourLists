<!doctype html>
<?php
  $unique = substr(md5(microtime()), 0, -25);
?>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-CuOF+2SnTUfTwSZjCXf01h7uYhfOBuxIhGKPbfEJ3+FqH/s6cIFN9bGr1HmAg4fQ" crossorigin="anonymous">

    <title>ourLists</title>
  </head>
  <body>
    <div>
      <h1>Create a list</h1>
      <a href="newList.php?id=<?php echo $unique; ?>" class="btn btn-default btn-lg">
      <i class="fa fa-sign-in"></i> Create a new list
      </a>
    </div>
  </body>
</html>