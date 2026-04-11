<div class="dashboard">
  <div class="top-row">
    <h2>Edit Leads</h2>
    <a href="<?= ROOT ?>/admin/leads" class="btn secondary">Back</a>
  </div>
  <?php $leads = $params["lead"] ?? null; ?>
  <?php if ($leads): ?>
  <?php if (!empty($errors)): ?>
  <div class="alert alert-danger">
    <ul>
      <?php foreach ($errors as $error): ?>
        <li><?= htmlspecialchars($error) ?></li>
      <?php endforeach; ?>
    </ul>
  </div>
  <?php endif; ?>
  <form method="post" action="<?= ROOT ?>/admin/leads/<?= $leads->leadIdentify ?>/update" enctype="multipart/form-data">
    <div class="form-grid">
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" id="name" name="name" value="<?= $leads->name ?? "" ?>" required>
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="text" id="email" name="email" value="<?= $leads->email ?? "" ?>" required>
    </div>
    <div class="form-group">
      <label for="phone">Phone</label>
      <input type="text" id="phone" name="phone" value="<?= $leads->phone ?? "" ?>" required>
    </div>
    <div class="form-group">
      <label for="serviceInterested">Service Interested</label>
      <input type="text" id="serviceInterested" name="serviceInterested" value="<?= $leads->serviceInterested ?? "" ?>" required>
    </div>
    <div class="form-group">
      <label for="status">Status</label>
      <select id="status" name="status" required>
        <option value="new" <?= $leads->status == "new" ? "selected" : "" ?>>New</option>
        <option value=" contacted" <?= $leads->status == " contacted" ? "selected" : "" ?>> contacted</option>
        <option value=" converted" <?= $leads->status == " converted" ? "selected" : "" ?>> converted</option>
        <option value=" lost" <?= $leads->status == " lost" ? "selected" : "" ?>> lost</option>
      </select>
    </div>
    </div>
    <div class="form-actions">
      <button type="submit" class="btn">Update</button>
      <a href="<?= ROOT ?>/admin/leads" class="btn secondary">Cancel</a>
    </div>
  </form>
  <?php else: ?>
    <p class="text-danger">Record not found.</p>
  <?php endif; ?>
</div>
