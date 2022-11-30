<div class="row mb-2">

    <?php include('config/config.php');
    $blog_query = mysqli_query(
        $db,
        "SELECT b.title, b.content, DATE_FORMAT(created_at, '%M %D, %Y') AS date, c.title AS cat_title, cat_id, b.image FROM blog b 
    LEFT JOIN categories c ON b.cat_id= c.id 
    WHERE is_monset=0 AND b.status=1 ORDER BY created_at DESC LIMIT 2"
    );
    $blogs = mysqli_fetch_all($blog_query, MYSQLI_ASSOC);

    foreach ($blogs as $blog) {?>

        <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-primary"><?= $blog['cat_title'] ?></strong>
                    <h3 class="mb-0"><?= $blog['title'] ?></h3>
                    <div class="mb-1 text-muted"><?= $blog['date'] ?></div>
                    <p class="card-text mb-auto"><?= $blog['content'] ?></p>
                    <a href="pages/single.php" class="stretched-link">Continue reading</a>
                </div>
                <div class="col-auto d-none d-lg-block">

                    <img src="./uploads/<?= $blog['image']; ?>" width="250" height="300">
                </div>
            </div>
        </div>
    <?php } ?>
</div>
</main>