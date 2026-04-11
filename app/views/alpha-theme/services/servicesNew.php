  <div class="data-table">
    <div class="data-info">
      <h3>Add a services</h3> <a href="<?= ROOT ?>/admin/services" class="gradient-btn">Back</a>
    </div>
    <div class="table-container">
      <form method="post">
        <div>
          <label for="title">Title</label>
          <input type="text" name="title">
        </div>
        <div>
          <label for="category">Category</label>
          <input type="text" name="category">
        </div>
        <div>
          <label for="description">Description</label>
          <textarea name="description"></textarea>
        </div>
        <div>
          <label for="icon">Icon</label>
          <input type="text" name="icon">
        </div>
        <div>
          <label for="status">Status</label>
          <input type="text" name="status">
        </div>
        <div>
          <label for="serviceCreatedAt">Service Created At</label>
          <input type="datetime-local" name="serviceCreatedAt">
        </div>
        <div>
          <aside class="row">
            <input type="submit" value="Save" class="save-btn" style="width:100%;margin:1rem;">
            <a href="<?= ROOT ?>/admin/services/" class="cancel-btn">Cancel</a>
          </aside>
        </div>
      </form>
    </div>
  </div>
