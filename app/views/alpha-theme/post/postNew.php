  <div class="data-table">
    <div class="data-info">
      <h3>Add a post</h3> <a href="<?= ROOT ?>/admin/post" class="gradient-btn">Back</a>
    </div>
    <div class="table-container">
      <form method="post">
        <div>
          <label for="postTitle">Post Title</label>
          <input type="text" name="postTitle">
        </div>
        <div>
          <label for="postDesc">Post Desc</label>
          <input type="text" name="postDesc">
        </div>
        <div>
          <label for="postImg">Post Img</label>
          <input type="text" name="postImg">
        </div>
        <div>
          <label for="postType">Post Type</label>
          <input type="" name="postType">
        </div>
        <div>
          <label for="postboolean">Postboolean</label>
          <input type="" name="postboolean">
        </div>
        <div>
          <label for="postFloat">Post Float</label>
          <input type="" name="postFloat">
        </div>
        <div>
          <label for="postCreatedAt">Post Created At</label>
          <input type="datetime-local" name="postCreatedAt">
        </div>
        <div>
          <aside class="row">
            <input type="submit" value="Save" class="save-btn" style="width:100%;margin:1rem;">
            <a href="<?= ROOT ?>/admin/post/" class="cancel-btn">Cancel</a>
          </aside>
        </div>
      </form>
    </div>
  </div>
