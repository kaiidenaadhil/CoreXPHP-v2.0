  <div class="data-table">
    <div class="data-info">
      <h3>Add a eventCategories</h3> <a href="<?= ROOT ?>/admin/eventCategories" class="gradient-btn">Back</a>
    </div>
    <div class="table-container">
      <form method="post">
        <div>
          <label for="name">Name</label>
          <input type="text" name="name">
        </div>
        <div>
          <label for="description">Description</label>
          <textarea name="description"></textarea>
        </div>
        <div>
          <label for="status">Status</label>
          <input type="text" name="status">
        </div>
        <div>
          <label for="eventCategoryCreatedAt">Event Category Created At</label>
          <input type="datetime-local" name="eventCategoryCreatedAt">
        </div>
        <div>
          <aside class="row">
            <input type="submit" value="Save" class="save-btn" style="width:100%;margin:1rem;">
            <a href="<?= ROOT ?>/admin/eventCategories/" class="cancel-btn">Cancel</a>
          </aside>
        </div>
      </form>
    </div>
  </div>
