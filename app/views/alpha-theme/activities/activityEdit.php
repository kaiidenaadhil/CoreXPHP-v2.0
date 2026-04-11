<div class="dashboard">
  <div class="top-row">
    <h2>Edit Activities</h2>
    <a href="<?= ROOT ?>/admin/activities" class="btn secondary">Back</a>
  </div>
  <?php $activities = $params["activity"] ?? null; ?>
  <?php if ($activities): ?>
  <?php if (!empty($errors)): ?>
  <div class="alert alert-danger">
    <ul>
      <?php foreach ($errors as $error): ?>
        <li><?= htmlspecialchars($error) ?></li>
      <?php endforeach; ?>
    </ul>
  </div>
  <?php endif; ?>
  <form method="post" action="<?= ROOT ?>/admin/activities/<?= $activities->activityIdentify ?>/update" enctype="multipart/form-data">
    <div class="form-grid">
    <div class="form-group">
      <label for="userId">User Id</label>
      <input type="number" id="userId" name="userId" value="<?= $activities->userId ?? "" ?>" required>
    </div>
    <div class="form-group">
      <label for="description">Description</label>
      <input type="text" id="description" name="description" value="<?= $activities->description ?? "" ?>" >
    </div>
    <div class="form-group">
      <label for="type">Type</label>
      <select id="type" name="type" required>
        <option value="order" <?= $activities->type == "order" ? "selected" : "" ?>>Order</option>
        <option value=" project" <?= $activities->type == " project" ? "selected" : "" ?>> project</option>
        <option value=" subscription" <?= $activities->type == " subscription" ? "selected" : "" ?>> subscription</option>
        <option value=" system" <?= $activities->type == " system" ? "selected" : "" ?>> system</option>
      </select>
    </div>
    </div>
    <div class="form-actions">
      <button type="submit" class="btn">Update</button>
      <a href="<?= ROOT ?>/admin/activities" class="btn secondary">Cancel</a>
    </div>
  </form>
  <?php else: ?>
    <p class="text-danger">Record not found.</p>
  <?php endif; ?>
</div>
