  <div class="data-table">
    <div class="data-info">
      <h3>Add a events</h3> <a href="<?= ROOT ?>/admin/events" class="gradient-btn">Back</a>
    </div>
    <div class="table-container">
      <form method="post">
        <div>
          <label for="title">Title</label>
          <input type="text" name="title">
        </div>
        <div>
          <label for="categoryId">Category Id</label>
          <input type="number" name="categoryId">
        </div>
        <div>
          <label for="location">Location</label>
          <input type="text" name="location">
        </div>
        <div>
          <label for="eventDate">Event Date</label>
          <input type="text" name="eventDate">
        </div>
        <div>
          <label for="eventTime">Event Time</label>
          <input type="text" name="eventTime">
        </div>
        <div>
          <label for="coverImage">Cover Image</label>
          <input type="text" name="coverImage">
        </div>
        <div>
          <label for="summary">Summary</label>
          <textarea name="summary"></textarea>
        </div>
        <div>
          <label for="status">Status</label>
          <input type="text" name="status">
        </div>
        <div>
          <label for="eventCreatedAt">Event Created At</label>
          <input type="datetime-local" name="eventCreatedAt">
        </div>
        <div>
          <aside class="row">
            <input type="submit" value="Save" class="save-btn" style="width:100%;margin:1rem;">
            <a href="<?= ROOT ?>/admin/events/" class="cancel-btn">Cancel</a>
          </aside>
        </div>
      </form>
    </div>
  </div>
