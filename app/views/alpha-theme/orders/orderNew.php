<div class="dashboard">
  <div class="top-row">
    <h2>Create New Orders</h2>
    <a href="<?= ROOT ?>/admin/orders" class="btn secondary">Back</a>
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
  <form method="post" action="<?= ROOT ?>/admin/orders/store" enctype="multipart/form-data">
    <div class="form-grid">
    <div class="form-group">
      <label for="userId">User Id</label>
      <input type="number" id="userId" name="userId" required>
    </div>
    <div class="form-group">
      <label for="orderType">Order Type</label>
      <select id="orderType" name="orderType" required>
        <option value="project">Project</option>
        <option value=" subscription"> subscription</option>
        <option value="customService">CustomService</option>
      </select>
    </div>
    <div class="form-group">
      <label for="referenceId">Reference Id</label>
      <input type="text" id="referenceId" name="referenceId" required>
    </div>
    <div class="form-group">
      <label for="amount">Amount</label>
      <input type="number" step="0.01" id="amount" name="amount" required>
    </div>
    <div class="form-group">
      <label for="status">Status</label>
      <select id="status" name="status" required>
        <option value="pending">Pending</option>
        <option value=" paid"> paid</option>
        <option value=" cancelled"> cancelled</option>
        <option value=" refunded"> refunded</option>
      </select>
    </div>
    </div>
    <div class="form-actions">
      <button type="submit" class="btn">Create</button>
      <a href="<?= ROOT ?>/admin/orders" class="btn secondary">Cancel</a>
    </div>
  </form>
</div>
