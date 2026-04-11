<div class="dashboard">
  <div class="top-row">
    <h2>Servicepackages Details</h2>
    <a href="<?= ROOT ?>/admin/servicepackages" class="btn secondary">Back</a>
  </div>

  <?php $servicepackage = $params["servicepackage"] ?? null; ?>
  <?php if ($servicepackage): ?>
  <div class="detail-layout">
    <div class="detail-data">
      <div class="detail-row">
        <div class="detail-label">Id</div>
        <div class="detail-value"><?= htmlspecialchars($servicepackage->id ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Service Type Id</div>
        <div class="detail-value"><?= htmlspecialchars($servicepackage->serviceTypeId ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Name</div>
        <div class="detail-value"><?= htmlspecialchars($servicepackage->name ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Description</div>
        <div class="detail-value"><?= htmlspecialchars($servicepackage->description ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Price</div>
        <div class="detail-value"><?= htmlspecialchars($servicepackage->price ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Features</div>
        <div class="detail-value"><?= htmlspecialchars($servicepackage->features ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Is Active</div>
        <div class="detail-value"><?= htmlspecialchars($servicepackage->isActive ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Servicepackage Created At</div>
        <div class="detail-value"><?= strtotime($servicepackage->servicepackageCreatedAt) ? date("d M y, H:i", strtotime($servicepackage->servicepackageCreatedAt)) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Servicepackage Updated At</div>
        <div class="detail-value"><?= strtotime($servicepackage->servicepackageUpdatedAt) ? date("d M y, H:i", strtotime($servicepackage->servicepackageUpdatedAt)) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Servicepackage Identify</div>
        <div class="detail-value"><?= htmlspecialchars($servicepackage->servicepackageIdentify ?? "-") ?></div>
      </div>
    </div>
    <div class="detail-actions">
      <a href="<?= ROOT ?>/admin/servicepackages/<?= $servicepackage->servicepackageIdentify ?>/edit" class="action-btn">
        <i class="uil uil-edit"></i> Edit
      </a>
      <a href="<?= ROOT ?>/admin/servicepackages/<?= $servicepackage->servicepackageIdentify ?>/delete" class="action-btn">
        <i class="uil uil-trash-alt"></i> Delete
      </a>
    </div>
  </div>
  <?php else: ?>
  <p>No data found.</p>
  <?php endif; ?>
</div>
