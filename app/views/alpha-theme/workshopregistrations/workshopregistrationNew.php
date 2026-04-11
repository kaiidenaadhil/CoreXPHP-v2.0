<div class="dashboard">
  <div class="top-row">
    <h2>Create New Workshopregistrations</h2>
    <a href="<?= ROOT ?>/admin/workshopregistrations" class="btn secondary">Back</a>
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
  <form method="post" action="<?= ROOT ?>/admin/workshopregistrations/store" enctype="multipart/form-data">
    <div class="form-grid">
    <div class="form-group">
      <label for="workshopId">Workshop Id</label>
      <input type="number" id="workshopId" name="workshopId" required>
    </div>
    <div class="form-group">
      <label for="fullName">Full Name</label>
      <input type="text" id="fullName" name="fullName" required>
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="text" id="email" name="email" required>
    </div>
    <div class="form-group">
      <label for="phone">Phone</label>
      <input type="text" id="phone" name="phone" required>
    </div>
    <div class="form-group">
      <label for="ticketType">Ticket Type</label>
      <select id="ticketType" name="ticketType" required>
        <option value="Free">Free</option>
        <option value="Standard">Standard</option>
        <option value="VIP">VIP</option>
      </select>
    </div>
    <div class="form-group">
      <label for="paymentStatus">Payment Status</label>
      <select id="paymentStatus" name="paymentStatus" required>
        <option value="Pending">Pending</option>
        <option value="Paid">Paid</option>
        <option value="Cancelled">Cancelled</option>
      </select>
    </div>
    <div class="form-group">
      <label for="registeredAt">Registered At</label>
      <input type="datetime-local" id="registeredAt" name="registeredAt" required>
    </div>
    </div>
    <div class="form-actions">
      <button type="submit" class="btn">Create</button>
      <a href="<?= ROOT ?>/admin/workshopregistrations" class="btn secondary">Cancel</a>
    </div>
  </form>
</div>
