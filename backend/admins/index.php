<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Admin</h3>
                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <div class="input-group-append">
                                        <a href="index.php?route=admins/create" class="btn btn-primary">
                                            Add new admin
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
                                        <th>Name</th>
                                        <th>Surname</th>
                                        <th>Email</th>
                                        <th>Username</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = mysqli_query($db, "SELECT * FROM admin");
                                    $admin = mysqli_fetch_all($query, MYSQLI_ASSOC);
                                    foreach ($admin as $a) {
                                    ?>
                                        <tr>
                                            <td><?php echo $a['name'] ?></td>
                                            <td><?php echo $a['surname'] ?></td>
                                            <td><?php echo $a['email'] ?></td>
                                            <td><?php echo $a['username'] ?></td>
                                            <?php
                                            if ($a['status'] == 1) { ?>
                                                <td>Active</td>
                                            <?php } else { ?>
                                                <td>Passive</td>
                                            <?php } ?>

                                            <td>
                                                <a class="btn btn-info" href="index.php?route=admins/edit&id=<?= $a['id'] ?>">Edit</a>&nbsp;

                                                <a class="btn btn-danger" href="index.php?route=admins/delete&id=<?= $a['id'] ?>" onclick="return confirm('Do you confirm?');">Delete</a>
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