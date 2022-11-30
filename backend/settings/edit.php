<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Edit settings</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <?php
                $edit_id = $_GET['id'];
                $query = mysqli_query($db, "SELECT * FROM settings WHERE id = $edit_id");

                while ($setting = mysqli_fetch_array($query)) {
                ?>
                    <form action="settings/update.php?id=<?= $edit_id ?>" method="post">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="key">Key</label>
                                <input type="text" name="_key" class="form-control" value="<?= $setting['_key'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="value">Value</label>
                                <input type="text" name="value" class="form-control" value="<?= $setting['value'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="status">Status</label><br>
                                <select name="status">
                                    <?php
                                    if ($setting['status'] == 1) {
                                        $active = 'selected';
                                        $passive = '';
                                    } else {
                                        $passive = 'selected';
                                        $active = '';
                                    }
                                    ?>
                                    <option value="0" <?= $passive ?>>Passive</option>
                                    <option value="1" <?= $active ?>>Active</option>
                                </select>
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