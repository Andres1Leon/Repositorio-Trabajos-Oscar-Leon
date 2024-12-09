<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php include_once FOLDER_VIEWS_CSS . 'style.php'; ?>
  <title><?= $title ?></title>
</head>

<body>
  <?php include_once FOLDER_VIEWS_ASSETS . 'nav/navBar.php'; ?>
  <div class="container">
    <h3><?= $title ?></h3>

    <div class="row">
    <form action="#" method="POST">
        <div class="form-floating mb-3">
          <input type="text" class="form-control form-control-sm" id="name" name="name" placeholder="Role name" value="<?=$role[0]['role_name']?>" required disabled>
          <label for="user">Name Role</label>
        </div>
      </form>
    </div>


  </div>
  <?php include_once FOLDER_VIEWS_ASSETS . 'footer/footer.php'; ?>
  <?php include_once FOLDER_VIEWS_JS . 'js.php'; ?>
</body>

</html>