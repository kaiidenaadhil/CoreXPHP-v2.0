<div class="dashboard">
  <div class="top-row">
    <h2>System Backups</h2>
    <a href="<?= ROOT ?>/admin/systemBackups/create" class="btn">+ New Backup</a>
  </div>

  <div class="table-responsive">
    <table>
      <thead>
        <tr>
          <th><input type="checkbox" onclick="toggleAll(this)" /></th>
          <th>#</th>
          <th>Backup ID</th>
          <th>Backup File</th>
          <th>Backup Date</th>
          <th>Created At</th>
          <th>Updated At</th>
          <th>Identify</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody id="tableBody">
        <?php if (!empty($systemBackups)) : ?>
          <?php foreach ($systemBackups as $index => $systemBackup) : ?>
            <tr>
              <td><input type="checkbox" class="row-check" name="selectedIds[]" value="<?= $systemBackup->systemBackupIdentify ?>" onchange="toggleTruncateBar()"></td>
              <td><?= $index + 1 ?></td>
              <td><?= htmlspecialchars($systemBackup->backupId ?? '-') ?></td>
              <td>
                <?php if (!empty($systemBackup->backupFile)) : ?>
                  <a href="<?= ASSETS ?>/img/uploads/<?= $systemBackup->backupFile ?>" target="_blank">View</a>
                <?php else : ?>
                  -
                <?php endif; ?>
              </td>
              <td><?= strtotime($systemBackup->backupDate) ? date("d M y, H:i", strtotime($systemBackup->backupDate)) : "-" ?></td>
              <td><?= strtotime($systemBackup->systemBackupCreatedAt) ? date("d M y, H:i", strtotime($systemBackup->systemBackupCreatedAt)) : "-" ?></td>
              <td><?= strtotime($systemBackup->systemBackupUpdatedAt) ? date("d M y, H:i", strtotime($systemBackup->systemBackupUpdatedAt)) : "-" ?></td>
              <td><?= htmlspecialchars($systemBackup->systemBackupIdentify ?? '-') ?></td>
              <td>
                <div class="action-menu">
                  <span onclick="toggleDropdown(this)">⋯</span>
                  <div class="action-dropdown">
                    <a href="<?= ROOT ?>/admin/systemBackups/<?= $systemBackup->systemBackupIdentify ?>"><i class="uil uil-eye"></i> View</a>
                    <a href="<?= ROOT ?>/admin/systemBackups/<?= $systemBackup->systemBackupIdentify ?>/edit"><i class="uil uil-edit"></i> Edit</a>
                    <a href="<?= ROOT ?>/admin/systemBackups/<?= $systemBackup->systemBackupIdentify ?>/delete" onclick="return confirm('Are you sure?')"><i class="uil uil-trash-alt"></i> Delete</a>
                  </div>
                </div>
              </td>
            </tr>
          <?php endforeach; ?>
        <?php else : ?>
          <tr class="no-data-row">
            <td colspan="9">
              <div class="no-data-box">
                <p class="no-data-message">No system backups found.</p>
                <a href="<?= ROOT ?>/admin/systemBackups/create" class="no-data-action"><i class="uil uil-plus-circle"></i> Create New</a>
              </div>
            </td>
          </tr>
        <?php endif; ?>
      </tbody>
    </table>
  </div>

  <div class="truncate-bar" id="truncateBar" style="display:none; margin-top: 10px;">
    <button type="button" onclick="truncateSelected()">Truncate Selected</button>
  </div>

  <div class="pagination-container">
    <?php if (!empty($meta)) renderPagination($meta); ?>
  </div>
</div>
