  <div class="data-table">
    <div class="data-info">
      <h3>Add a portfolio</h3> <a href="<?= ROOT ?>/admin/portfolio" class="gradient-btn">Back</a>
    </div>
    <div class="table-container">
      <form method="post">
        <div>
          <label for="eventId">Event Id</label>
          <input type="number" name="eventId">
        </div>
        <div>
          <label for="galleryImage">Gallery Image</label>
          <input type="text" name="galleryImage">
        </div>
        <div>
          <label for="caption">Caption</label>
          <input type="text" name="caption">
        </div>
        <div>
          <label for="portfolioCreatedAt">Portfolio Created At</label>
          <input type="datetime-local" name="portfolioCreatedAt">
        </div>
        <div>
          <aside class="row">
            <input type="submit" value="Save" class="save-btn" style="width:100%;margin:1rem;">
            <a href="<?= ROOT ?>/admin/portfolio/" class="cancel-btn">Cancel</a>
          </aside>
        </div>
      </form>
    </div>
  </div>
