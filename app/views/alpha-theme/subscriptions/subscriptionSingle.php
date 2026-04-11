<div class="dashboard">
  <div class="top-row">
    <h2>Subscriptions Details</h2>
    <a href="<?= ROOT ?>/admin/subscriptions" class="btn secondary">Back</a>
  </div>

  <?php $subscription = $params["subscription"] ?? null; ?>
  <?php if ($subscription): ?>
  <div class="detail-layout">
    <div class="detail-data">
      <div class="detail-row">
        <div class="detail-label">Subscription Id</div>
        <div class="detail-value"><?= htmlspecialchars($subscription->subscriptionId ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">User Id</div>
        <div class="detail-value"><?= htmlspecialchars($subscription->userId ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Plan Name</div>
        <div class="detail-value"><?= htmlspecialchars($subscription->planName ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Price</div>
        <div class="detail-value"><?= isset($subscription->price) ? "$" . number_format($subscription->price, 2) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Status</div>
        <div class="detail-value"><?= htmlspecialchars($subscription->status ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Start Date</div>
        <div class="detail-value"><?= strtotime($subscription->startDate) ? date("d M y, H:i", strtotime($subscription->startDate)) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">End Date</div>
        <div class="detail-value"><?= strtotime($subscription->endDate) ? date("d M y, H:i", strtotime($subscription->endDate)) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Renewal Date</div>
        <div class="detail-value"><?= strtotime($subscription->renewalDate) ? date("d M y, H:i", strtotime($subscription->renewalDate)) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Features</div>
        <div class="detail-value"><?= htmlspecialchars($subscription->features ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Subscription Created At</div>
        <div class="detail-value"><?= strtotime($subscription->subscriptionCreatedAt) ? date("d M y, H:i", strtotime($subscription->subscriptionCreatedAt)) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Subscription Updated At</div>
        <div class="detail-value"><?= strtotime($subscription->subscriptionUpdatedAt) ? date("d M y, H:i", strtotime($subscription->subscriptionUpdatedAt)) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Subscription Identify</div>
        <div class="detail-value"><?= htmlspecialchars($subscription->subscriptionIdentify ?? "-") ?></div>
      </div>
    </div>
    <div class="detail-actions">
      <a href="<?= ROOT ?>/admin/subscriptions/<?= $subscription->subscriptionIdentify ?>/edit" class="action-btn">
        <i class="uil uil-edit"></i> Edit
      </a>
      <a href="<?= ROOT ?>/admin/subscriptions/<?= $subscription->subscriptionIdentify ?>/delete" class="action-btn">
        <i class="uil uil-trash-alt"></i> Delete
      </a>
    </div>
  </div>
  <?php else: ?>
  <p>No data found.</p>
  <?php endif; ?>
</div>
