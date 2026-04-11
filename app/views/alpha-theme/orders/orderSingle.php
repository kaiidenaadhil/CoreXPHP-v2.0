<div class="dashboard">
  <div class="top-row">
    <h2>Orders Details</h2>
    <a href="<?= ROOT ?>/admin/orders" class="btn secondary">Back</a>
  </div>

  <?php $order = $params["order"] ?? null; ?>
  <?php if ($order): ?>
  <div class="detail-layout">
    <div class="detail-data">
      <div class="detail-row">
        <div class="detail-label">Order Id</div>
        <div class="detail-value"><?= htmlspecialchars($order->orderId ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">User Id</div>
        <div class="detail-value"><?= htmlspecialchars($order->userId ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Order Type</div>
        <div class="detail-value"><?= htmlspecialchars($order->orderType ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Reference Id</div>
        <div class="detail-value"><?= htmlspecialchars($order->referenceId ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Amount</div>
        <div class="detail-value"><?= isset($order->amount) ? "$" . number_format($order->amount, 2) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Status</div>
        <div class="detail-value"><?= htmlspecialchars($order->status ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Order Created At</div>
        <div class="detail-value"><?= strtotime($order->orderCreatedAt) ? date("d M y, H:i", strtotime($order->orderCreatedAt)) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Order Updated At</div>
        <div class="detail-value"><?= strtotime($order->orderUpdatedAt) ? date("d M y, H:i", strtotime($order->orderUpdatedAt)) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Order Identify</div>
        <div class="detail-value"><?= htmlspecialchars($order->orderIdentify ?? "-") ?></div>
      </div>
    </div>
    <div class="detail-actions">
      <a href="<?= ROOT ?>/admin/orders/<?= $order->orderIdentify ?>/edit" class="action-btn">
        <i class="uil uil-edit"></i> Edit
      </a>
      <a href="<?= ROOT ?>/admin/orders/<?= $order->orderIdentify ?>/delete" class="action-btn">
        <i class="uil uil-trash-alt"></i> Delete
      </a>
    </div>
  </div>
  <?php else: ?>
  <p>No data found.</p>
  <?php endif; ?>
</div>
