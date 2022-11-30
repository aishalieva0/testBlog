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
                $query = mysqli_query($db, "SELECT * FROM pages WHERE id = $edit_id");

                while ($page = mysqli_fetch_array($query)) {
                ?>
                    <form action="pages/update.php?id=<?= $edit_id ?>" method="post">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" class="form-control" value="<?= $page['title'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <input type="text" name="description" class="form-control" value="<?= $page['description'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="content">Content</label>
                                <input type="text" name="content" class="form-control" value="<?= $page['content'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="is_menu">Menu</label>
                                <select name="is_menu">
                                    <?php
                                    if ($page['is_menu'] == 1) {
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
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select name="status">
                                    <?php
                                    if ($page['status'] == 1) {
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