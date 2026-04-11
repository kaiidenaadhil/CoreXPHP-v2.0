  <div class="data-table">
    <div class="data-info">
      <h3>Add a testimonials</h3> <a href="<?= ROOT ?>/admin/testimonials" class="gradient-btn">Back</a>
    </div>
    <div class="table-container">
      <form method="post">
        <div>
          <label for="clientId">Client Id</label>
          <input type="number" name="clientId">
        </div>
        <div>
          <label for="name">Name</label>
          <input type="text" name="name">
        </div>
        <div>
          <label for="message">Message</label>
          <textarea name="message"></textarea>
        </div>
        <div>
          <label for="photo">Photo</label>
          <input type="text" name="photo">
        </div>
        <div>
          <label for="designation">Designation</label>
          <input type="text" name="designation">
        </div>
        <div>
          <label for="testimonialCreatedAt">Testimonial Created At</label>
          <input type="datetime-local" name="testimonialCreatedAt">
        </div>
        <div>
          <aside class="row">
            <input type="submit" value="Save" class="save-btn" style="width:100%;margin:1rem;">
            <a href="<?= ROOT ?>/admin/testimonials/" class="cancel-btn">Cancel</a>
          </aside>
        </div>
      </form>
    </div>
  </div>
