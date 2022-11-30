<?php include('config/config.php') ?>

<main class="container">
  <div class="p-4 p-md-5 mb-4 rounded text-bg-primary">
    <div class="col-md-6 px-0">
      <h1 class="display-4 fst-italic">Head Line</h1>
    </div>
  </div>
  <div class="row mb-2">
    <?php
    if (isset($_GET['page'])) {
      $page = $_GET['page'];
    } else {
      $page = 1;
    }

    $show_data = 2; // her sehifede ne qeder data gosterilecek
    $offset = ($page - 1) * $show_data; // her sehifede data neceden gosterilmeye bashlayir
    $query = mysqli_query($db, "SELECT * FROM blog");
    $total_data = mysqli_num_rows($query); // umumi datanin sayi
    $blog_query = mysqli_query(
      $db,
      "SELECT * FROM blog ORDER BY created_at DESC LIMIT " . $offset . ',' . $show_data
    );
    // limit ve offsetle query yazilir

    $total_page = ceil($total_data / $show_data); //umumi page sayi tapilir
    $page_link = '';

    $blogs = mysqli_fetch_all($blog_query, MYSQLI_ASSOC);
    foreach ($blogs as $blog) {
      //   $query = mysqli_query($db, "SELECT b.title, DATE_FORMAT(created_at, '%M %D, %Y') AS date, b.content, c.title AS cat_title 
      // FROM blog b 
      // LEFT JOIN categories c ON b.cat_id= c.id 
      // WHERE b.is_monset = 1 AND b.status=1 ORDER BY b.created_at DESC");
      //   $blogs = mysqli_fetch_all($query, MYSQLI_ASSOC);
      //   foreach ($blogs as $blog) {
    ?>
      <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary"><?= $blog['title'] ?></strong>
            <h3 class="mb-0"><?= $blog['title'] ?></h3>
            <div class="mb-1 text-muted"><?= $blog['created_at'] ?></div>
            <p class="card-text mb-auto"><?= $blog['content'] ?></p>
            <a href="pages/single.php" class="stretched-link">Continue reading</a>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
  <nav aria-label="Page navigation example">
    <ul class="pagination">

      <?php

      if ($page >= 3) {
        echo "<li class='page-item'>
        <a class='page-link' href='index.php?page=" . ($page - 1) . "' aria-label='Previous'>
          <span aria-hidden='true'>&laquo;</span>
          <span sr-only>Previous</span>
        </a>
      </li>";
      }

      for ($i = 1; $i <= $total_page; $i++) {
        if ($i == $page) {
          $page_link .= "<li class='page-item'><a class='active page-link' href='index.php?page=" . $i . "'>" . $i . "</a></li>";
        } else {
          $page_link .= "<li class='page-item'><a class='page-link' href='index.php?page=" . $i . "'> " . $i . "</a></li>";
        }
      };

      echo $page_link;

      if ($page < $total_page) {
        echo "<li class='page-item'>
        <a class='page-link' href='index.php?page=" . ($page + 1) . "' aria-label='Next'>
          <span aria-hidden='true'>&raquo;</span>
          <span sr-only>Next</span>
        </a>
      </li>";
      }
      ?>
    </ul>
  </nav>