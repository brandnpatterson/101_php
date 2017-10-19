<?php include '../app/people.php'; ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP 101</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="heading">
      <h2>PHP 101</h2>
    </div>
    <div class="container">
      <div class="title">
        <h3>People:</h3>
      </div>
      <ul class="people">
        <?php
          foreach ($people as $p) {
        ?>
          <li>
            <button>
            <?php
              $p->getName();
            ?>
            </button>
            <a href="#">Edit</a>
            <a href="#">Delete</a>
          </li>
        <?php
          }
        ?>
      </ul>
    </div>
    <form method="post" class="submit-person">
      <div class="formgroup">
        <label for="name"> Name
          <input type="text" name="name">
        </label>
      </div>
      <div class="formgroup">
        <label for="age"> Age
          <input type="number" name="age">
        </label>
      </div>
      <div class="formgroup">
        <button type="submit" name="save">Save</button>
      </div>
      <div class="formgroup">
        <a href="https://www.youtube.com/watch?v=mjVuBlwXASo">Resource</a>
      </div>
    </form>
  </body>
</html>
