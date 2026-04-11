<div class="dashboard">
  <div class="top-row">
    <h2>Create New Activities</h2>
    <a href="<?= ROOT ?>/admin/activities" class="btn secondary">Back</a>
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
  <form method="post" action="<?= ROOT ?>/admin/activities/store" enctype="multipart/form-data">
    <div class="form-grid">
    <div class="form-group">
      <label for="userId">User Id</label>
      <input type="number" id="userId" name="userId" required>
    </div>
    <div class="form-group">
      <label for="description">Description</label>
      <input type="text" id="description" name="description" >
    </div>
    <div class="form-group">
      <label for="type">Type</label>
      <select id="type" name="type" required>
        <option value="order">Order</option>
        <option value=" project"> project</option>
        <option value=" subscription"> subscription</option>
        <option value=" system"> system</option>
      </select>
    </div>
    </div>
    <div class="form-actions">
      <button type="submit" class="btn">Create</button>
      <a href="<?= ROOT ?>/admin/activities" class="btn secondary">Cancel</a>
    </div>
  </form>
</div>
