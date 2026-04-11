  <div class="data-table">
    <div class="data-info">
      <h3>Add a clients</h3> <a href="<?= ROOT ?>/admin/clients" class="gradient-btn">Back</a>
    </div>
    <div class="table-container">
      <form method="post">
        <div>
          <label for="name">Name</label>
          <input type="text" name="name">
        </div>
        <div>
          <label for="logo">Logo</label>
          <input type="text" name="logo">
        </div>
        <div>
          <label for="companyType">Company Type</label>
          <input type="text" name="companyType">
        </div>
        <div>
          <label for="status">Status</label>
          <input type="text" name="status">
        </div>
        <div>
          <label for="clientCreatedAt">Client Created At</label>
          <input type="datetime-local" name="clientCreatedAt">
        </div>
        <div>
          <aside class="row">
            <input type="submit" value="Save" class="save-btn" style="width:100%;margin:1rem;">
            <a href="<?= ROOT ?>/admin/clients/" class="cancel-btn">Cancel</a>
          </aside>
        </div>
      </form>
    </div>
  </div>
