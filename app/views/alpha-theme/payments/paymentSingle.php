<div class="dashboard">
  <div class="top-row">
    <h2>Payments Details</h2>
    <a href="<?= ROOT ?>/admin/payments" class="btn secondary">Back</a>
  </div>

  <?php $payment = $params["payment"] ?? null; ?>
  <?php if ($payment): ?>
  <div class="detail-layout">
    <div class="detail-data">
      <div class="detail-row">
        <div class="detail-label">Payment Id</div>
        <div class="detail-value"><?= htmlspecialchars($payment->paymentId ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Order Id</div>
        <div class="detail-value"><?= htmlspecialchars($payment->orderId ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Payment Method</div>
        <div class="detail-value"><?= htmlspecialchars($payment->paymentMethod ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Payment Status</div>
        <div class="detail-value"><?= htmlspecialchars($payment->paymentStatus ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Amount</div>
        <div class="detail-value"><?= isset($payment->amount) ? "$" . number_format($payment->amount, 2) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Paid At</div>
        <div class="detail-value"><?= strtotime($payment->paidAt) ? date("d M y, H:i", strtotime($payment->paidAt)) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Payment Created At</div>
        <div class="detail-value"><?= strtotime($payment->paymentCreatedAt) ? date("d M y, H:i", strtotime($payment->paymentCreatedAt)) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Payment Updated At</div>
        <div class="detail-value"><?= strtotime($payment->paymentUpdatedAt) ? date("d M y, H:i", strtotime($payment->paymentUpdatedAt)) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Payment Identify</div>
        <div class="detail-value"><?= htmlspecialchars($payment->paymentIdentify ?? "-") ?></div>
      </div>
    </div>
    <div class="detail-actions">
      <a href="<?= ROOT ?>/admin/payments/<?= $payment->paymentIdentify ?>/edit" class="action-btn">
        <i class="uil uil-edit"></i> Edit
      </a>
      <a href="<?= ROOT ?>/admin/payments/<?= $payment->paymentIdentify ?>/delete" class="action-btn">
        <i class="uil uil-trash-alt"></i> Delete
      </a>
    </div>
  </div>
  <?php else: ?>
  <p>No data found.</p>
  <?php endif; ?>
</div>
