<div class="dashboard">
  <div class="top-row">
    <h2>Edit Subscriptions</h2>
    <a href="<?= ROOT ?>/admin/subscriptions" class="btn secondary">Back</a>
  </div>
  <?php $subscriptions = $params["subscription"] ?? null; ?>
  <?php if ($subscriptions): ?>
  <?php if (!empty($errors)): ?>
  <div class="alert alert-danger">
    <ul>
      <?php foreach ($errors as $error): ?>
        <li><?= htmlspecialchars($error) ?></li>
      <?php endforeach; ?>
    </ul>
  </div>
  <?php endif; ?>
  <form method="post" action="<?= ROOT ?>/admin/subscriptions/<?= $subscriptions->subscriptionIdentify ?>/update" enctype="multipart/form-data">
    <div class="form-grid">
    <div class="form-group">
      <label for="userId">User Id</label>
      <input type="number" id="userId" name="userId" value="<?= $subscriptions->userId ?? "" ?>" required>
    </div>
    <div class="form-group">
      <label for="planName">Plan Name</label>
      <input type="text" id="planName" name="planName" value="<?= $subscriptions->planName ?? "" ?>" >
    </div>
    <div class="form-group">
      <label for="price">Price</label>
      <input type="number" step="0.01" id="price" name="price" value="<?= $subscriptions->price ?? "" ?>" >
    </div>
    <div class="form-group">
      <label for="status">Status</label>
      <select id="status" name="status" >
        <option value="active" <?= $subscriptions->status == "active" ? "selected" : "" ?>>Active</option>
        <option value="pending" <?= $subscriptions->status == "pending" ? "selected" : "" ?>>Pending</option>
        <option value="cancelled" <?= $subscriptions->status == "cancelled" ? "selected" : "" ?>>Cancelled</option>
      </select>
    </div>
    <div class="form-group">
      <label for="startDate">Start Date</label>
      <input type="datetime-local" id="startDate" name="startDate" value="<?= strtotime($subscriptions->startDate) ? date("Y-m-d\TH:i", strtotime($subscriptions->startDate)) : "" ?>" required>
    </div>
    <div class="form-group">
      <label for="endDate">End Date</label>
      <input type="datetime-local" id="endDate" name="endDate" value="<?= strtotime($subscriptions->endDate) ? date("Y-m-d\TH:i", strtotime($subscriptions->endDate)) : "" ?>" required>
    </div>
    <div class="form-group">
      <label for="renewalDate">Renewal Date</label>
      <input type="datetime-local" id="renewalDate" name="renewalDate" value="<?= strtotime($subscriptions->renewalDate) ? date("Y-m-d\TH:i", strtotime($subscriptions->renewalDate)) : "" ?>" required>
    </div>
    <div class="form-group">
      <label for="features">Features</label>
      <input type="text" id="features" name="features" value="<?= $subscriptions->features ?? "" ?>" >
    </div>
    </div>
    <div class="form-actions">
      <button type="submit" class="btn">Update</button>
      <a href="<?= ROOT ?>/admin/subscriptions" class="btn secondary">Cancel</a>
    </div>
  </form>
  <?php else: ?>
    <p class="text-danger">Record not found.</p>
  <?php endif; ?>
</div>
