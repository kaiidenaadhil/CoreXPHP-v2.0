<div class="dashboard">
  <div class="top-row">
    <h2>Create New Payments</h2>
    <a href="<?= ROOT ?>/admin/payments" class="btn secondary">Back</a>
  </div>
  <?php if (!empty($errors)): ?>
  <div class="alert alert-danger">
    <ul>
      <?php foreach ($errors as $error): ?>
        <li><?= htmlspecialchars($error) ?></li>
      <?php endforeach; ?>
    </ul>
  </div>
  <?php endif; ?>
  <form method="post" action="<?= ROOT ?>/admin/payments/store" enctype="multipart/form-data">
    <div class="form-grid">
    <div class="form-group">
      <label for="orderId">Order Id</label>
      <input type="number" id="orderId" name="orderId" required>
    </div>
    <div class="form-group">
      <label for="paymentMethod">Payment Method</label>
      <input type="text" id="paymentMethod" name="paymentMethod" >
    </div>
    <div class="form-group">
      <label for="paymentStatus">Payment Status</label>
      <select id="paymentStatus" name="paymentStatus" required>
        <option value=""></option>
      </select>
    </div>
    <div class="form-group">
      <label for="amount">Amount</label>
      <input type="number" step="0.01" id="amount" name="amount" required>
    </div>
    <div class="form-group">
      <label for="paidAt">Paid At</label>
      <input type="datetime-local" id="paidAt" name="paidAt" >
    </div>
    </div>
    <div class="form-actions">
      <button type="submit" class="btn">Create</button>
      <a href="<?= ROOT ?>/admin/payments" class="btn secondary">Cancel</a>
    </div>
  </form>
</div>
