<div class="dashboard">
  <div class="top-row">
    <h2>Create New Notifications</h2>
    <a href="<?= ROOT ?>/admin/notifications" class="btn secondary">Back</a>
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
  <form method="post" action="<?= ROOT ?>/admin/notifications/store" enctype="multipart/form-data">
    <div class="form-grid">
    <div class="form-group">
      <label for="userId">User Id</label>
      <input type="number" id="userId" name="userId" required>
    </div>
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" id="title" name="title" >
    </div>
    <div class="form-group">
      <label for="content">Content</label>
      <input type="text" id="content" name="content" >
    </div>
    <div class="form-group">
      <label for="status">Status</label>
      <select id="status" name="status" required>
        <option value="unread">Unread</option>
        <option value="read">Read</option>
      </select>
    </div>
    </div>
    <div class="form-actions">
      <button type="submit" class="btn">Create</button>
      <a href="<?= ROOT ?>/admin/notifications" class="btn secondary">Cancel</a>
    </div>
  </form>
</div>
