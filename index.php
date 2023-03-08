<!DOCTYPE html>
<html lang="ru">

<head>
  <?php require './blocks/headData.php' ?>
  <title>PHP blog</title>

</head>

<body>
  <?php require './blocks/header.php' ?>
  <main id="content" class="container m-auto row g-5">
    <div class="col-md-8">
      <h3 class="pb-4 mb-4 fst-italic border-bottom">
        Основной контент
      </h3>
      <?php
      require_once('mysql_connect.php');
      $sql = "SELECT * FROM articles ORDER BY date DESC";
      $query = $pdo->query($sql);
      while ($row = $query->fetch(PDO::FETCH_OBJ)) {
        echo "<h2>$row->title</h2> <p>$row->intro</p>
      <p><b>Aвтор статьи: </b> <mark>$row->author</mark></p> 
      <a href='/news.php?id=$row->id' title='$row->title'>
      <button class='btn btn-warning mb-5'>Прочитать больше</button></a>";
      }

      ?>

    </div>
    <?php require './blocks/aside.php' ?>
  </main>
  <?php require './blocks/footer.php' ?>
</body>

</html>