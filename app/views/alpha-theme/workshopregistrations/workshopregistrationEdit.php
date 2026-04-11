<div class="dashboard">
  <div class="top-row">
    <h2>Edit Workshopregistrations</h2>
    <a href="<?= ROOT ?>/admin/workshopregistrations" class="btn secondary">Back</a>
  </div>
  <?php $workshopregistrations = $params["workshopregistration"] ?? null; ?>
  <?php if ($workshopregistrations): ?>
  <?php if (!empty($errors)): ?>
  <div class="alert alert-danger">
    <ul>
      <?php foreach ($errors as $error): ?>
        <li><?= htmlspecialchars($error) ?></li>
      <?php endforeach; ?>
    </ul>
  </div>
  <?php endif; ?>
  <form method="post" action="<?= ROOT ?>/admin/workshopregistrations/<?= $workshopregistrations->workshopregistrationIdentify ?>/update" enctype="multipart/form-data">
    <div class="form-grid">
    <div class="form-group">
      <label for="workshopId">Workshop Id</label>
      <input type="number" id="workshopId" name="workshopId" value="<?= $workshopregistrations->workshopId ?? "" ?>" required>
    </div>
    <div class="form-group">
      <label for="fullName">Full Name</label>
      <input type="text" id="fullName" name="fullName" value="<?= $workshopregistrations->fullName ?? "" ?>" required>
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="text" id="email" name="email" value="<?= $workshopregistrations->email ?? "" ?>" required>
    </div>
    <div class="form-group">
      <label for="phone">Phone</label>
      <input type="text" id="phone" name="phone" value="<?= $workshopregistrations->phone ?? "" ?>" required>
    </div>
    <div class="form-group">
      <label for="ticketType">Ticket Type</label>
      <select id="ticketType" name="ticketType" required>
        <option value="Free" <?= $workshopregistrations->ticketType == "Free" ? "selected" : "" ?>>Free</option>
        <option value="Standard" <?= $workshopregistrations->ticketType == "Standard" ? "selected" : "" ?>>Standard</option>
        <option value="VIP" <?= $workshopregistrations->ticketType == "VIP" ? "selected" : "" ?>>VIP</option>
      </select>
    </div>
    <div class="form-group">
      <label for="paymentStatus">Payment Status</label>
      <select id="paymentStatus" name="paymentStatus" required>
        <option value="Pending" <?= $workshopregistrations->paymentStatus == "Pending" ? "selected" : "" ?>>Pending</option>
        <option value="Paid" <?= $workshopregistrations->paymentStatus == "Paid" ? "selected" : "" ?>>Paid</option>
        <option value="Cancelled" <?= $workshopregistrations->paymentStatus == "Cancelled" ? "selected" : "" ?>>Cancelled</option>
      </select>
    </div>
    <div class="form-group">
      <label for="registeredAt">Registered At</label>
      <input type="datetime-local" id="registeredAt" name="registeredAt" value="<?= strtotime($workshopregistrations->registeredAt) ? date("Y-m-d\TH:i", strtotime($workshopregistrations->registeredAt)) : "" ?>" required>
    </div>
    </div>
    <div class="form-actions">
      <button type="submit" class="btn">Update</button>
      <a href="<?= ROOT ?>/admin/workshopregistrations" class="btn secondary">Cancel</a>
    </div>
  </form>
  <?php else: ?>
    <p class="text-danger">Record not found.</p>
  <?php endif; ?>
</div>
