<div class="dashboard">
  <div class="top-row">
    <h2>Create New Leads</h2>
    <a href="<?= ROOT ?>/admin/leads" class="btn secondary">Back</a>
  </div>
  <?php if (!empty($errors)): ?>
  <div class="alert alert-danger">
    <ul>
      <?php foreach ($errors as $error): ?>
        <li><?= htmlspecialchars($error) ?></li>
      <?php endforeach; ?>
    </ul>
  </div>
  <?php endif; ?>
  <form method="post" action="<?= ROOT ?>/admin/leads/store" enctype="multipart/form-data">
    <div class="form-grid">
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" id="name" name="name" required>
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="text" id="email" name="email" required>
    </div>
    <div class="form-group">
      <label for="phone">Phone</label>
      <input type="text" id="phone" name="phone" required>
    </div>
    <div class="form-group">
      <label for="serviceInterested">Service Interested</label>
      <input type="text" id="serviceInterested" name="serviceInterested" required>
    </div>
    <div class="form-group">
      <label for="status">Status</label>
      <select id="status" name="status" required>
        <option value="new">New</option>
        <option value=" contacted"> contacted</option>
        <option value=" converted"> converted</option>
        <option value=" lost"> lost</option>
      </select>
    </div>
    </div>
    <div class="form-actions">
      <button type="submit" class="btn">Create</button>
      <a href="<?= ROOT ?>/admin/leads" class="btn secondary">Cancel</a>
    </div>
  </form>
</div>
