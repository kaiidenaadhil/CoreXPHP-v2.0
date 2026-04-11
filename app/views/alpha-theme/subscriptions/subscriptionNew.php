<div class="dashboard">
  <div class="top-row">
    <h2>Create New Subscriptions</h2>
    <a href="<?= ROOT ?>/admin/subscriptions" class="btn secondary">Back</a>
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
  <form method="post" action="<?= ROOT ?>/admin/subscriptions/store" enctype="multipart/form-data">
    <div class="form-grid">
    <div class="form-group">
      <label for="userId">User Id</label>
      <input type="number" id="userId" name="userId" required>
    </div>
    <div class="form-group">
      <label for="planName">Plan Name</label>
      <input type="text" id="planName" name="planName" >
    </div>
    <div class="form-group">
      <label for="price">Price</label>
      <input type="number" step="0.01" id="price" name="price" >
    </div>
    <div class="form-group">
      <label for="status">Status</label>
      <select id="status" name="status" >
        <option value="active">Active</option>
        <option value="pending">Pending</option>
        <option value="cancelled">Cancelled</option>
      </select>
    </div>
    <div class="form-group">
      <label for="startDate">Start Date</label>
      <input type="datetime-local" id="startDate" name="startDate" required>
    </div>
    <div class="form-group">
      <label for="endDate">End Date</label>
      <input type="datetime-local" id="endDate" name="endDate" required>
    </div>
    <div class="form-group">
      <label for="renewalDate">Renewal Date</label>
      <input type="datetime-local" id="renewalDate" name="renewalDate" required>
    </div>
    <div class="form-group">
      <label for="features">Features</label>
      <input type="text" id="features" name="features" >
    </div>
    </div>
    <div class="form-actions">
      <button type="submit" class="btn">Create</button>
      <a href="<?= ROOT ?>/admin/subscriptions" class="btn secondary">Cancel</a>
    </div>
  </form>
</div>
