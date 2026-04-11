  <div class="data-table">
    <div class="data-info">
      <h3>Add a categories</h3> <a href="<?= ROOT ?>/admin/categories" class="gradient-btn">Back</a>
    </div>
    <div class="table-container">
      <form method="post">
        <div>
          <label for="categoryName">Category Name</label>
          <input type="text" name="categoryName">
        </div>
        <div>
          <label for="categoryURI">Category U R I</label>
          <input type="text" name="categoryURI">
        </div>
        <div>
          <label for="categoryCreatedAt">Category Created At</label>
          <input type="datetime-local" name="categoryCreatedAt">
        </div>
        <div>
          <label for="categoryUpdatedAt">Category Updated At</label>
          <input type="datetime-local" name="categoryUpdatedAt">
        </div>
        <div>
          <label for="categoryIdentify">Category Identify</label>
          <input type="text" name="categoryIdentify">
        </div>
        <div>
          <aside class="row">
            <input type="submit" value="Save" class="save-btn" style="width:100%;margin:1rem;">
            <a href="<?= ROOT ?>/admin/categories/" class="cancel-btn">Cancel</a>
          </aside>
        </div>
      </form>
    </div>
  </div>
