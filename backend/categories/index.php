<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Category</h3>
                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <div class="input-group-append">
                                        <a href="index.php?route=categories/create" class="btn btn-primary">
                                            Add new category
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
                                        <th>Menu</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $cat_query = mysqli_query($db, "SELECT * FROM categories");
                                    $categories = mysqli_fetch_all($cat_query, MYSQLI_ASSOC);



                                    foreach ($categories as $cat) {
                                    ?>
                                        <tr>
                                            <td><?= $cat['title'] ?></td>

                                            <?php
                                            if ($cat['is_menu'] == 1) { ?>
                                                <td>Active</td>
                                            <?php } else { ?>
                                                <td>Passive</td>
                                            <?php }

                                            if ($cat['status'] == 1) { ?>
                                                <td>Active</td>
                                            <?php } else { ?>
                                                <td>Passive</td>
                                            <?php } ?>


                                            <td>
                                                <a class="btn btn-info" href="index.php?route=categories/edit&id=<?= $cat['id'] ?>">Edit</a>&nbsp;

                                                <a class="btn btn-danger" href="index.php?route=categories/delete&id=<?= $cat['id'] ?>" onclick="return confirm('Do you confirm?');">Delete</a>
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