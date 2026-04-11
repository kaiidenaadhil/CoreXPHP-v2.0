  <div class="data-table">
    <div class="data-info">
      <h3>Add a inquiries</h3> <a href="<?= ROOT ?>/admin/inquiries" class="gradient-btn">Back</a>
    </div>
    <div class="table-container">
      <form method="post">
        <div>
          <label for="name">Name</label>
          <input type="text" name="name">
        </div>
        <div>
          <label for="email">Email</label>
          <input type="text" name="email">
        </div>
        <div>
          <label for="phone">Phone</label>
          <input type="text" name="phone">
        </div>
        <div>
          <label for="eventType">Event Type</label>
          <input type="text" name="eventType">
        </div>
        <div>
          <label for="message">Message</label>
          <textarea name="message"></textarea>
        </div>
        <div>
          <label for="inquiryCreatedAt">Inquiry Created At</label>
          <input type="datetime-local" name="inquiryCreatedAt">
        </div>
        <div>
          <aside class="row">
            <input type="submit" value="Save" class="save-btn" style="width:100%;margin:1rem;">
            <a href="<?= ROOT ?>/admin/inquiries/" class="cancel-btn">Cancel</a>
          </aside>
        </div>
      </form>
    </div>
  </div>
