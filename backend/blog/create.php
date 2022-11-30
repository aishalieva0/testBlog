<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Create Blog </h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <?php
                $cat_query = mysqli_query($db, "SELECT * FROM categories");
                $category = mysqli_fetch_all($cat_query, MYSQLI_ASSOC);
                ?>
                <form action="index.php?route=blog/store" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control" placeholder="Enter Title">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" name="description" class="form-control" placeholder="Enter Description">
                        </div>

                        <div class="form-group">
                            <label for="img">Image</label>
                            <input type="file" name="img" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="video">Video</label>
                            <input type="file" name="video" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="category">Category</label><br>
                            <select name="category" id="">
                                <option value="">Select category</option>
                                <?php
                                foreach ($category as $cat) {
                                ?>
                                    <option value="<?= $cat['id'] ?>"><?= $cat['title'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="content">Content</label>
                            <textarea name="content" class="form-control" placeholder="Enter Content"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="monset">Monset</label><br>
                            <select name="is_monset">
                                <option value="">Choose monset</option>
                                <option value="0">No</option>
                                <option value="1">Yes</option>
                            </select>
                        </div>

                        


                        <div class="form-group">
                            <label for="status">Status</label><br>
                            <select name="status">
                                <option value="">Choose status</option>
                                <option value="0">Passive</option>
                                <option value="1">Active</option>
                            </select>
                        </div>

                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                </form>
            </div>

        </div>
    </section>
</div>