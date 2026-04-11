<div class="dashboard">
  <div class="top-row">
    <h2>Edit Orders</h2>
    <a href="<?= ROOT ?>/admin/orders" class="btn secondary">Back</a>
  </div>
  <?php $orders = $params["order"] ?? null; ?>
  <?php if ($orders): ?>
  <?php if (!empty($errors)): ?>
  <div class="alert alert-danger">
    <ul>
      <?php foreach ($errors as $error): ?>
        <li><?= htmlspecialchars($error) ?></li>
      <?php endforeach; ?>
    </ul>
  </div>
  <?php endif; ?>
  <form method="post" action="<?= ROOT ?>/admin/orders/<?= $orders->orderIdentify ?>/update" enctype="multipart/form-data">
    <div class="form-grid">
    <div class="form-group">
      <label for="userId">User Id</label>
      <input type="number" id="userId" name="userId" value="<?= $orders->userId ?? "" ?>" required>
    </div>
    <div class="form-group">
      <label for="orderType">Order Type</label>
      <select id="orderType" name="orderType" required>
        <option value="project" <?= $orders->orderType == "project" ? "selected" : "" ?>>Project</option>
        <option value=" subscription" <?= $orders->orderType == " subscription" ? "selected" : "" ?>> subscription</option>
        <option value="customService" <?= $orders->orderType == "customService" ? "selected" : "" ?>>CustomService</option>
      </select>
    </div>
    <div class="form-group">
      <label for="referenceId">Reference Id</label>
      <input type="text" id="referenceId" name="referenceId" value="<?= $orders->referenceId ?? "" ?>" required>
    </div>
    <div class="form-group">
      <label for="amount">Amount</label>
      <input type="number" step="0.01" id="amount" name="amount" value="<?= $orders->amount ?? "" ?>" required>
    </div>
    <div class="form-group">
      <label for="status">Status</label>
      <select id="status" name="status" required>
        <option value="pending" <?= $orders->status == "pending" ? "selected" : "" ?>>Pending</option>
        <option value=" paid" <?= $orders->status == " paid" ? "selected" : "" ?>> paid</option>
        <option value=" cancelled" <?= $orders->status == " cancelled" ? "selected" : "" ?>> cancelled</option>
        <option value=" refunded" <?= $orders->status == " refunded" ? "selected" : "" ?>> refunded</option>
      </select>
    </div>
    </div>
    <div class="form-actions">
      <button type="submit" class="btn">Update</button>
      <a href="<?= ROOT ?>/admin/orders" class="btn secondary">Cancel</a>
    </div>
  </form>
  <?php else: ?>
    <p class="text-danger">Record not found.</p>
  <?php endif; ?>
</div>
