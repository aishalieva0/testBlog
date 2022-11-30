<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Edit categories</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <?php
                $edit_id = $_GET['id'];
                $cat_query = mysqli_query($db, "SELECT * FROM categories WHERE id = $edit_id");

                while ($cat = mysqli_fetch_array($cat_query)) {
                ?>
                    <form action="categories/update.php?id=<?= $edit_id ?>" method="post">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" class="form-control" value="<?= $cat['title'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="is_menu">Menu</label><br>

                                <select name="is_menu">
                                    <?php if ($cat['is_menu'] == 1) {
                                        $active = 'selected';
                                        $passive = '';
                                    } else {
                                        $passive = 'selected';
                                        $active = '';
                                    } ?>

                                    <option value="0" <?= $passive ?>>Passive</option>
                                    <option value="1" <?= $active ?>>Active</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="status">Status</label><br>
                                <select name="status">
                                    <?php if ($cat['status'] == 1) {
                                        $active = 'selected';
                                        $passive = '';
                                    } else {
                                        $passive = 'selected';
                                        $active = '';
                                    } ?>

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