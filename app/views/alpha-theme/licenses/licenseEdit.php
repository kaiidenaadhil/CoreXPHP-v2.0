<div class="dashboard">
  <div class="top-row">
    <h2>Edit Licenses</h2>
    <a href="<?= ROOT ?>/admin/licenses" class="btn secondary">Back</a>
  </div>
  <?php $licenses = $params["license"] ?? null; ?>
  <?php if ($licenses): ?>
  <?php if (!empty($errors)): ?>
  <div class="alert alert-danger">
    <ul>
      <?php foreach ($errors as $error): ?>
        <li><?= htmlspecialchars($error) ?></li>
      <?php endforeach; ?>
    </ul>
  </div>
  <?php endif; ?>
  <form method="post" action="<?= ROOT ?>/admin/licenses/<?= $licenses->licenseIdentify ?>/update" enctype="multipart/form-data">
    <div class="form-grid">
    <div class="form-group">
      <label for="licenseKey">License Key</label>
      <input type="text" id="licenseKey" name="licenseKey" value="<?= $licenses->licenseKey ?? "" ?>" required>
    </div>
    <div class="form-group">
      <label for="liveDomain">Live Domain</label>
      <input type="text" id="liveDomain" name="liveDomain" value="<?= $licenses->liveDomain ?? "" ?>" >
    </div>
    <div class="form-group">
      <label for="localDomain">Local Domain</label>
      <input type="text" id="localDomain" name="localDomain" value="<?= $licenses->localDomain ?? "" ?>" >
    </div>
    <div class="form-group">
      <label for="expiresAt">Expires At</label>
      <input type="datetime-local" id="expiresAt" name="expiresAt" value="<?= strtotime($licenses->expiresAt) ? date("Y-m-d\TH:i", strtotime($licenses->expiresAt)) : "" ?>" required>
    </div>
    <div class="form-group">
      <label for="status">Status</label>
      <select id="status" name="status" required>
        <option value="active" <?= $licenses->status == "active" ? "selected" : "" ?>>Active</option>
        <option value="expired" <?= $licenses->status == "expired" ? "selected" : "" ?>>Expired</option>
        <option value="revoked" <?= $licenses->status == "revoked" ? "selected" : "" ?>>Revoked</option>
      </select>
    </div>
    </div>
    <div class="form-actions">
      <button type="submit" class="btn">Update</button>
      <a href="<?= ROOT ?>/admin/licenses" class="btn secondary">Cancel</a>
    </div>
  </form>
  <?php else: ?>
    <p class="text-danger">Record not found.</p>
  <?php endif; ?>
</div>
