<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Setting</h3>
                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <div class="input-group-append">
                                        <a href="index.php?route=settings/create" class="btn btn-primary">
                                            Add new setting
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
                                        <th>Key</th>
                                        <th>Value</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = mysqli_query($db, "SELECT * FROM settings");
                                    $settings = mysqli_fetch_all($query, MYSQLI_ASSOC);



                                    foreach ($settings as $setting) {
                                    ?>
                                        <tr>
                                            <td><?php echo $setting['_key'] ?></td>
                                            <td><?php echo $setting['value'] ?></td>
                                            <?php
                                            if ($setting['status'] == 1) { ?>
                                                <td>Active</td>
                                            <?php } else { ?>
                                                <td>Passive</td>
                                            <?php }
                                            ?>

                                            <td>
                                                <a class="btn btn-info" href="index.php?route=settings/edit&id=<?= $setting['id'] ?>">Edit</a>&nbsp;

                                                <a class="btn btn-danger" href="index.php?route=settings/delete&id=<?= $setting['id'] ?>" onclick="return confirm('Do you confirm?');">Delete</a>
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