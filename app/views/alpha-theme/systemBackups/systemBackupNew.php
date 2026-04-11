<div class="dashboard">
  <div class="top-row">
    <h2>Create New System Backup</h2>
    <a href="<?= ROOT ?>/admin/systemBackups" class="btn secondary">Back</a>
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

  <form method="post" action="<?= ROOT ?>/admin/systemBackups/store">
    <div class="form-actions">
      <button type="submit" class="btn">📦 Create Backup Now</button>
      <a href="<?= ROOT ?>/admin/systemBackups" class="btn secondary">Cancel</a>
    </div>
  </form>
</div>
