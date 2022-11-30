<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Blog</h3>
                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <div class="input-group-append">
                                        <a href="index.php?route=blog/create" class="btn btn-primary">
                                            Create new blog
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">

                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Video</th>
                                        <th>Category</th>
                                        <th>Content</th>
                                        <th>Monset</th>
                                        <th>Creating Date</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $blog_query = mysqli_query($db, "SELECT * FROM blog");
                                    $blogs = mysqli_fetch_all($blog_query, MYSQLI_ASSOC);



                                    foreach ($blogs as $blog) {
                                        $cat_id = $blog['cat_id'];
                                        $cat_query = mysqli_query(
                                            $db,
                                            "SELECT * FROM categories c WHERE c.id=$cat_id"
                                        );
                                        $category = mysqli_fetch_all($cat_query, MYSQLI_ASSOC);
                                    ?>
                                        <tr>
                                            <td><?= $blog['title'] ?></td>
                                            <td><?= $blog['description'] ?></td>
                                            <td><?= $blog['image'] ?></td>
                                            <td><?= $blog['video'] ?></td>
                                            <td><?php
                                                foreach ($category as $cat) {
                                                    echo $cat['title'];
                                                } ?>

                                            </td>
                                            <td><?= $blog['content'] ?></td>

                                            <?php if ($blog["is_monset"] == 1) { ?>
                                                <td>Yes</td>
                                            <?php } else { ?>
                                                <td>No</td>
                                            <?php } ?>
                                            <td><?= $blog['created_at'] ?></td>

                                            <?php
                                            if ($blog['status'] == 1) { ?>
                                                <td>Active</td>
                                            <?php } else { ?>
                                                <td>Passive</td>
                                            <?php } ?>




                                            <td>
                                                <a class="btn btn-info" href="index.php?route=blog/edit&id=<?= $blog['id'] ?>">Edit</a>&nbsp;

                                                <a class="btn btn-danger" href="index.php?route=blog/delete&id=<?= $blog['id'] ?>" onclick="return confirm('Do you confirm?');">Delete</a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
</div>