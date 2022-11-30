<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Edit Admin</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <?php
                $edit_id = $_GET['id'];

                $query = mysqli_query($db, "SELECT * FROM `admin` WHERE `id` = '$edit_id'");
                while ($a = mysqli_fetch_array($query)) {
                ?>
                    <form action="admins/update.php?id=<?= $edit_id ?>" method="post">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" value="<?= $a['name'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="surname">Surname</label>
                                <input type="text" name="surname" class="form-control" value="<?= $a['surname'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" name="username" class="form-control" value="<?= $a['username'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" name="email" class="form-control" value="<?= $a['email'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for="password">Status</label>
                                <select name="status" class="form-group">
                                    <?php
                                    if ($a['status'] == 1) {
                                        $active = 'selected';
                                        $passive = '';
                                    } else {
                                        $active = '';
                                        $passive = 'selected';
                                    }
                                    ?>
                                    <option value="0" <?= $passive ?>>Passive</option>
                                    <option value="1" <?= $active ?>>Active</option>
                                </select>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    <?php } ?>

                    </form>

            </div>

        </div>
    </section>
</div>