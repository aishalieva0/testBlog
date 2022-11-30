<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Pages</h3>
                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <div class="input-group-append">
                                        <a href="index.php?route=pages/create" class="btn btn-primary">
                                            Add new page
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
                                        <th>Content</th>
                                        <th>Menu</th>
                                        <th>Status</th>
                                        <th>Create Date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = mysqli_query($db, "SELECT * FROM pages");
                                    $pages = mysqli_fetch_all($query, MYSQLI_ASSOC);



                                    foreach ($pages as $page) {
                                    ?>
                                        <tr>
                                            <td><?php echo $page['title'] ?></td>
                                            <td><?php echo $page['description'] ?></td>
                                            <td><?php echo $page['content'] ?></td>
                                            <?php
                                            if ($page['is_menu'] == 1) { ?>
                                                <td>Active</td>
                                            <?php } else { ?>
                                                <td>Passive</td>
                                            <?php }

                                            if ($page['status'] == 1) { ?>
                                                <td>Active</td>
                                            <?php } else { ?>
                                                <td>Passive</td>
                                            <?php } ?>

                                            <td><?= $page['created_at'] ?></td>

                                            <td>
                                                <a class="btn btn-info" href="index.php?route=pages/edit&id=<?= $page['id'] ?>">Edit</a>&nbsp;

                                                <a class="btn btn-danger" href="index.php?route=pages/delete&id=<?= $page['id'] ?>" onclick="return confirm('Do you confirm?');">Delete</a>
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