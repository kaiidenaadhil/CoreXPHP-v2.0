<div class="dashboard">
  <div class="top-row">
    <h2>ServiceTypes Details</h2>
    <a href="<?= ROOT ?>/admin/serviceTypes" class="btn secondary">Back</a>
  </div>

  <?php $serviceType = $params["serviceType"] ?? null; ?>
  <?php if ($serviceType): ?>
  <div class="detail-layout">
    <div class="detail-data">
      <div class="detail-row">
        <div class="detail-label">Id</div>
        <div class="detail-value"><?= htmlspecialchars($serviceType->id ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Name</div>
        <div class="detail-value"><?= htmlspecialchars($serviceType->name ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Description</div>
        <div class="detail-value"><?= htmlspecialchars($serviceType->description ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Service Type Created At</div>
        <div class="detail-value"><?= strtotime($serviceType->serviceTypeCreatedAt) ? date("d M y, H:i", strtotime($serviceType->serviceTypeCreatedAt)) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Service Type Updated At</div>
        <div class="detail-value"><?= strtotime($serviceType->serviceTypeUpdatedAt) ? date("d M y, H:i", strtotime($serviceType->serviceTypeUpdatedAt)) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Service Type Identify</div>
        <div class="detail-value"><?= htmlspecialchars($serviceType->serviceTypeIdentify ?? "-") ?></div>
      </div>
    </div>
    <div class="detail-actions">
      <a href="<?= ROOT ?>/admin/serviceTypes/<?= $serviceType->serviceTypeIdentify ?>/edit" class="action-btn">
        <i class="uil uil-edit"></i> Edit
      </a>
      <a href="<?= ROOT ?>/admin/serviceTypes/<?= $serviceType->serviceTypeIdentify ?>/delete" class="action-btn">
        <i class="uil uil-trash-alt"></i> Delete
      </a>
    </div>
  </div>
  <?php else: ?>
  <p>No data found.</p>
  <?php endif; ?>
</div>
