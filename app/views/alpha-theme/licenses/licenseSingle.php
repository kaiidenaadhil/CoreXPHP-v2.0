<div class="dashboard">
  <div class="top-row">
    <h2>Licenses Details</h2>
    <a href="<?= ROOT ?>/admin/licenses" class="btn secondary">Back</a>
  </div>

  <?php $license = $params["license"] ?? null; ?>
  <?php if ($license): ?>
  <div class="detail-layout">
    <div class="detail-data">
      <div class="detail-row">
        <div class="detail-label">Id</div>
        <div class="detail-value"><?= htmlspecialchars($license->id ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">License Key</div>
        <div class="detail-value"><?= htmlspecialchars($license->licenseKey ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Live Domain</div>
        <div class="detail-value"><?= htmlspecialchars($license->liveDomain ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Local Domain</div>
        <div class="detail-value"><?= htmlspecialchars($license->localDomain ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Expires At</div>
        <div class="detail-value"><?= strtotime($license->expiresAt) ? date("d M y, H:i", strtotime($license->expiresAt)) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Status</div>
        <div class="detail-value"><?= htmlspecialchars($license->status ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">License Created At</div>
        <div class="detail-value"><?= strtotime($license->licenseCreatedAt) ? date("d M y, H:i", strtotime($license->licenseCreatedAt)) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">License Updated At</div>
        <div class="detail-value"><?= strtotime($license->licenseUpdatedAt) ? date("d M y, H:i", strtotime($license->licenseUpdatedAt)) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">License Identify</div>
        <div class="detail-value"><?= htmlspecialchars($license->licenseIdentify ?? "-") ?></div>
      </div>
    </div>
    <div class="detail-actions">
      <a href="<?= ROOT ?>/admin/licenses/<?= $license->licenseIdentify ?>/edit" class="action-btn">
        <i class="uil uil-edit"></i> Edit
      </a>
      <a href="<?= ROOT ?>/admin/licenses/<?= $license->licenseIdentify ?>/delete" class="action-btn">
        <i class="uil uil-trash-alt"></i> Delete
      </a>
    </div>
  </div>
  <?php else: ?>
  <p>No data found.</p>
  <?php endif; ?>
</div>
