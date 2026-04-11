  <div class="data-table">
    <div class="data-info">
      <h3>Add a blogPosts</h3> <a href="<?= ROOT ?>/admin/blogPosts" class="gradient-btn">Back</a>
    </div>
    <div class="table-container">
      <form method="post">
        <div>
          <label for="title">Title</label>
          <input type="text" name="title">
        </div>
        <div>
          <label for="slug">Slug</label>
          <input type="text" name="slug">
        </div>
        <div>
          <label for="content">Content</label>
          <textarea name="content"></textarea>
        </div>
        <div>
          <label for="coverImage">Cover Image</label>
          <input type="text" name="coverImage">
        </div>
        <div>
          <label for="status">Status</label>
          <input type="text" name="status">
        </div>
        <div>
          <label for="blogPostCreatedAt">Blog Post Created At</label>
          <input type="datetime-local" name="blogPostCreatedAt">
        </div>
        <div>
          <aside class="row">
            <input type="submit" value="Save" class="save-btn" style="width:100%;margin:1rem;">
            <a href="<?= ROOT ?>/admin/blogPosts/" class="cancel-btn">Cancel</a>
          </aside>
        </div>
      </form>
    </div>
  </div>
