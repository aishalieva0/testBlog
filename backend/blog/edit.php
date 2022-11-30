<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Edit your blog </h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <?php
                $cat_query = mysqli_query($db, "SELECT * FROM categories");
                $category = mysqli_fetch_all($cat_query, MYSQLI_ASSOC);

                $edit_id = $_GET['id'];
                $blog_query = mysqli_query($db, "SELECT * FROM blog WHERE id = $edit_id");

                while ($blog = mysqli_fetch_array($blog_query)) {
                ?>
                    <form action="blog/update.php?id=<?= $edit_id ?>" method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" class="form-control" value="<?= $blog['title'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <input type="text" name="description" class="form-control" value="<?= $blog['description'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="img">Image</label>
                                <input type="file" name="img" class="form-control">
                                <?= $blog['image'] ?>
                            </div>
                            <div class="form-group">
                                <label for="video">Video</label>
                                <input type="file" name="video" class="form-control">
                                <?= $blog['video'] ?>
                            </div>
                            <div class="form-group">
                                <label for="category">Category</label><br>
                                <select name="category">
                                    <?php


                                    foreach ($category as $cat) {
                                    ?>
                                        <option <?php if ($blog['cat_id'] == $cat['id']) { ?> selected="selected" <?php } ?>value="<?= $cat['id'] ?>"><?= $cat['title'] ?></option>

                                    <?php

                                    }

                                    ?>

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="content">Content</label>
                                <input type="text" name="content" class="form-control" value="<?= $blog['content'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="monset">Monset</label>
                                <select name="is_monset">
                                    <?php if ($blog['is_monset'] == 1) {
                                        $yes = 'selected';
                                        $no = '';
                                    } else {
                                        $no = 'selected';
                                        $yes = '';
                                    } ?>
                                    <option value="0" <?= $no ?>>No</option>
                                    <option value="1" <?= $yes ?>>Yes</option>

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select name="status">
                                    <?php if ($blog['status'] == 1) {
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