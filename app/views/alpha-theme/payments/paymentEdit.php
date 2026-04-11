<div class="dashboard">
  <div class="top-row">
    <h2>Edit Payments</h2>
    <a href="<?= ROOT ?>/admin/payments" class="btn secondary">Back</a>
  </div>
  <?php $payments = $params["payment"] ?? null; ?>
  <?php if ($payments): ?>
  <?php if (!empty($errors)): ?>
  <div class="alert alert-danger">
    <ul>
      <?php foreach ($errors as $error): ?>
        <li><?= htmlspecialchars($error) ?></li>
      <?php endforeach; ?>
    </ul>
  </div>
  <?php endif; ?>
  <form method="post" action="<?= ROOT ?>/admin/payments/<?= $payments->paymentIdentify ?>/update" enctype="multipart/form-data">
    <div class="form-grid">
    <div class="form-group">
      <label for="orderId">Order Id</label>
      <input type="number" id="orderId" name="orderId" value="<?= $payments->orderId ?? "" ?>" required>
    </div>
    <div class="form-group">
      <label for="paymentMethod">Payment Method</label>
      <input type="text" id="paymentMethod" name="paymentMethod" value="<?= $payments->paymentMethod ?? "" ?>" >
    </div>
    <div class="form-group">
      <label for="paymentStatus">Payment Status</label>
      <select id="paymentStatus" name="paymentStatus" required>
        <option value="" <?= $payments->paymentStatus == "" ? "selected" : "" ?>></option>
      </select>
    </div>
    <div class="form-group">
      <label for="amount">Amount</label>
      <input type="number" step="0.01" id="amount" name="amount" value="<?= $payments->amount ?? "" ?>" required>
    </div>
    <div class="form-group">
      <label for="paidAt">Paid At</label>
      <input type="datetime-local" id="paidAt" name="paidAt" value="<?= strtotime($payments->paidAt) ? date("Y-m-d\TH:i", strtotime($payments->paidAt)) : "" ?>" >
    </div>
    </div>
    <div class="form-actions">
      <button type="submit" class="btn">Update</button>
      <a href="<?= ROOT ?>/admin/payments" class="btn secondary">Cancel</a>
    </div>
  </form>
  <?php else: ?>
    <p class="text-danger">Record not found.</p>
  <?php endif; ?>
</div>
