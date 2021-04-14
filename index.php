<?php require_once('lib/description.php'); ?> 
<!doctype html>
<html>
<head>
    <title>
    <?php
      echo "상헌's Library-".title(); 
    ?>
      </title>
  <meta charset ="utf-8">
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src = "colors.js">  </script>

</head>

<body>
  <h1> <a href ="index.php" style="color:blue"> <상헌이의 책방> </a> </h1>
  <input type="button" value="night" onclick="
  nightDayHandler(this);
  ">

  <ul class="chart">
  <?php
    book_list();
  ?>
  </ul>
  <?php require_once('option/CRUD.php'); ?>
  <h2>
  <?php
    echo title();
  ?>
  </h2>

  <?php
    echo description();
  ?>
</body>
</html>