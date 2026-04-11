<div class="dashboard">
  <div class="top-row">
    <h2>Create New Licenses</h2>
    <a href="<?= ROOT ?>/admin/licenses" class="btn secondary">Back</a>
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
  <form method="post" action="<?= ROOT ?>/admin/licenses/store" enctype="multipart/form-data">
    <div class="form-grid">
    <div class="form-group">
      <label for="licenseKey">License Key</label>
      <input type="text" id="licenseKey" name="licenseKey" required>
    </div>
    <div class="form-group">
      <label for="liveDomain">Live Domain</label>
      <input type="text" id="liveDomain" name="liveDomain" >
    </div>
    <div class="form-group">
      <label for="localDomain">Local Domain</label>
      <input type="text" id="localDomain" name="localDomain" >
    </div>
    <div class="form-group">
      <label for="expiresAt">Expires At</label>
      <input type="datetime-local" id="expiresAt" name="expiresAt" required>
    </div>
    <div class="form-group">
      <label for="status">Status</label>
      <select id="status" name="status" required>
        <option value="active">Active</option>
        <option value="expired">Expired</option>
        <option value="revoked">Revoked</option>
      </select>
    </div>
    </div>
    <div class="form-actions">
      <button type="submit" class="btn">Create</button>
      <a href="<?= ROOT ?>/admin/licenses" class="btn secondary">Cancel</a>
    </div>
  </form>
</div>
