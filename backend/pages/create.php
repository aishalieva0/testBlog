<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Create Page </h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="index.php?route=pages/store" method="post">
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
                            <label for="content">Content</label>
                            <input type="text" name="content" class="form-control" placeholder="Enter Content">
                        </div>
                        <div class="form-group">
                            <label for="is_menu">Menu</label><br>
                            <select name="is_menu">
                                <option value="">Select menu</option>
                                <option value="0">Passive</option>
                                <option value="1">Active</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="status">Status</label><br>
                            <select name="status">
                                <option value="">Select status</option>
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