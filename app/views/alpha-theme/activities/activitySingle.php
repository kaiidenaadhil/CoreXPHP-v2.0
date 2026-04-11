<div class="dashboard">
  <div class="top-row">
    <h2>Activities Details</h2>
    <a href="<?= ROOT ?>/admin/activities" class="btn secondary">Back</a>
  </div>

  <?php $activity = $params["activity"] ?? null; ?>
  <?php if ($activity): ?>
  <div class="detail-layout">
    <div class="detail-data">
      <div class="detail-row">
        <div class="detail-label">Activity Id</div>
        <div class="detail-value"><?= htmlspecialchars($activity->activityId ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">User Id</div>
        <div class="detail-value"><?= htmlspecialchars($activity->userId ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Description</div>
        <div class="detail-value"><?= htmlspecialchars($activity->description ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Type</div>
        <div class="detail-value"><?= htmlspecialchars($activity->type ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Activity Created At</div>
        <div class="detail-value"><?= strtotime($activity->activityCreatedAt) ? date("d M y, H:i", strtotime($activity->activityCreatedAt)) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Activity Updated At</div>
        <div class="detail-value"><?= strtotime($activity->activityUpdatedAt) ? date("d M y, H:i", strtotime($activity->activityUpdatedAt)) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Activity Identify</div>
        <div class="detail-value"><?= htmlspecialchars($activity->activityIdentify ?? "-") ?></div>
      </div>
    </div>
    <div class="detail-actions">
      <a href="<?= ROOT ?>/admin/activities/<?= $activity->activityIdentify ?>/edit" class="action-btn">
        <i class="uil uil-edit"></i> Edit
      </a>
      <a href="<?= ROOT ?>/admin/activities/<?= $activity->activityIdentify ?>/delete" class="action-btn">
        <i class="uil uil-trash-alt"></i> Delete
      </a>
    </div>
  </div>
  <?php else: ?>
  <p>No data found.</p>
  <?php endif; ?>
</div>
