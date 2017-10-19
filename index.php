<?php include './person.php';
      include './people.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP 101</title>
  </head>
  <body>
    <h2>Hello PHP!</h2>
    <div class="container">
      <div class="title">
        <h3>People:</h3>
      </div>
      <ul class="people">
        <?php
          foreach ($people as $p) {
        ?>
          <li>
            <?php
              $p->getName();
            ?>
          </li>
        <?php
          }
        ?>
      </ul>
    </div>
  </body>
</html>
