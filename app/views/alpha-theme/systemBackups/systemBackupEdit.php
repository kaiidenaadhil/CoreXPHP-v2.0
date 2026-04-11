<div class="dashboard">
  <div class="top-row">
    <h2>Edit SystemBackups</h2>
    <a href="<?= ROOT ?>/admin/systemBackups" class="btn secondary">Back</a>
  </div>
  <?php $systemBackups = $params["systemBackup"] ?? null; ?>
  <?php if ($systemBackups): ?>
  <?php if (!empty($errors)): ?>
  <div class="alert alert-danger">
    <ul>
      <?php foreach ($errors as $error): ?>
        <li><?= htmlspecialchars($error) ?></li>
      <?php endforeach; ?>
    </ul>
  </div>
  <?php endif; ?>
  <form method="post" action="<?= ROOT ?>/admin/systemBackups/<?= $systemBackups->systemBackupIdentify ?>/update" enctype="multipart/form-data">
    <div class="form-grid">
    <div class="form-group">
      <label for="backupFile">Backup File</label>
      <input type="file" id="backupFile" name="backupFile">
    </div>
    <div class="form-group">
      <label for="backupDate">Backup Date</label>
      <input type="datetime-local" id="backupDate" name="backupDate" value="<?= strtotime($systemBackups->backupDate) ? date("Y-m-d\TH:i", strtotime($systemBackups->backupDate)) : "" ?>" required>
    </div>
    </div>
    <div class="form-actions">
      <button type="submit" class="btn">Update</button>
      <a href="<?= ROOT ?>/admin/systemBackups" class="btn secondary">Cancel</a>
    </div>
  </form>
  <?php else: ?>
    <p class="text-danger">Record not found.</p>
  <?php endif; ?>
</div>
