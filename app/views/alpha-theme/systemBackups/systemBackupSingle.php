<div class="dashboard">
  <div class="top-row">
    <h2>SystemBackups Details</h2>
    <a href="<?= ROOT ?>/admin/systemBackups" class="btn secondary">Back</a>
  </div>

  <?php $systemBackup = $params["systemBackup"] ?? null; ?>
  <?php if ($systemBackup): ?>
  <div class="detail-layout">
    <div class="detail-data">
      <div class="detail-row">
        <div class="detail-label">Backup Id</div>
        <div class="detail-value"><?= htmlspecialchars($systemBackup->backupId ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Backup File</div>
        <div class="detail-value"><?php if (!empty(trim($systemBackup->backupFile))) : ?>
          <img src="<?= ASSETS ?>/img/uploads/<?= htmlspecialchars(trim($systemBackup->backupFile)) ?>" alt="Image" class="img-thumb-64">
        <?php else : ?> - <?php endif; ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Backup Date</div>
        <div class="detail-value"><?= strtotime($systemBackup->backupDate) ? date("d M y, H:i", strtotime($systemBackup->backupDate)) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">System Backup Created At</div>
        <div class="detail-value"><?= strtotime($systemBackup->systemBackupCreatedAt) ? date("d M y, H:i", strtotime($systemBackup->systemBackupCreatedAt)) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">System Backup Updated At</div>
        <div class="detail-value"><?= strtotime($systemBackup->systemBackupUpdatedAt) ? date("d M y, H:i", strtotime($systemBackup->systemBackupUpdatedAt)) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">System Backup Identify</div>
        <div class="detail-value"><?= htmlspecialchars($systemBackup->systemBackupIdentify ?? "-") ?></div>
      </div>
    </div>
    <div class="detail-actions">
      <a href="<?= ROOT ?>/admin/systemBackups/<?= $systemBackup->systemBackupIdentify ?>/edit" class="action-btn">
        <i class="uil uil-edit"></i> Edit
      </a>
      <a href="<?= ROOT ?>/admin/systemBackups/<?= $systemBackup->systemBackupIdentify ?>/delete" class="action-btn">
        <i class="uil uil-trash-alt"></i> Delete
      </a>
    </div>
  </div>
  <?php else: ?>
  <p>No data found.</p>
  <?php endif; ?>
</div>
