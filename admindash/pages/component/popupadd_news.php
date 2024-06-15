<div class="button-Add-News">
<a href="http://localhost/maigowebsite/news_admin.php" class="btn btn-primary">Add News</a>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add News</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="add_news.php" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="image" class="col-form-label">Image:</label>
                            <input type="file" class="form-control" id="image" accept="image/*" name="image">
                        </div>
                        <div class="mb-3">
                            <label for="title" class="col-form-label">Title:</label>
                            <input type="text" class="form-control" id="title" name="title">
                        </div>
                        <div class="mb-3">
                            <label for="text" class="col-form-label">Description:</label>
                            <input type="text" class="form-control" id="text" name="text">
                        </div>
                        <div class="mb-3">
                            <label for="author" class="col-form-label">Author:</label>
                            <input type="text" class="form-control" id="author" name="author">
                        </div>
                        <div class="mb-3">
                            <label for="date" class="col-form-label">Date:</label>
                            <input type="date" class="form-control" id="date" name="date">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" name="submit" class="btn btn-primary">Add News</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
