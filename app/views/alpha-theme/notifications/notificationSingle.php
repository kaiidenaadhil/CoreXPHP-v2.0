<div class="dashboard">
  <div class="top-row">
    <h2>Notifications Details</h2>
    <a href="<?= ROOT ?>/admin/notifications" class="btn secondary">Back</a>
  </div>

  <?php $notification = $params["notification"] ?? null; ?>
  <?php if ($notification): ?>
  <div class="detail-layout">
    <div class="detail-data">
      <div class="detail-row">
        <div class="detail-label">Notification Id</div>
        <div class="detail-value"><?= htmlspecialchars($notification->notificationId ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">User Id</div>
        <div class="detail-value"><?= htmlspecialchars($notification->userId ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Title</div>
        <div class="detail-value"><?= htmlspecialchars($notification->title ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Content</div>
        <div class="detail-value"><?= htmlspecialchars($notification->content ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Status</div>
        <div class="detail-value"><?= htmlspecialchars($notification->status ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Notification Created At</div>
        <div class="detail-value"><?= strtotime($notification->notificationCreatedAt) ? date("d M y, H:i", strtotime($notification->notificationCreatedAt)) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Notification Updated At</div>
        <div class="detail-value"><?= strtotime($notification->notificationUpdatedAt) ? date("d M y, H:i", strtotime($notification->notificationUpdatedAt)) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Notification Identify</div>
        <div class="detail-value"><?= htmlspecialchars($notification->notificationIdentify ?? "-") ?></div>
      </div>
    </div>
    <div class="detail-actions">
      <a href="<?= ROOT ?>/admin/notifications/<?= $notification->notificationIdentify ?>/edit" class="action-btn">
        <i class="uil uil-edit"></i> Edit
      </a>
      <a href="<?= ROOT ?>/admin/notifications/<?= $notification->notificationIdentify ?>/delete" class="action-btn">
        <i class="uil uil-trash-alt"></i> Delete
      </a>
    </div>
  </div>
  <?php else: ?>
  <p>No data found.</p>
  <?php endif; ?>
</div>
