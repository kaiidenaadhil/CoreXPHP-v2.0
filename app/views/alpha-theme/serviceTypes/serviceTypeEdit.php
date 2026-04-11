<div class="dashboard">
  <div class="top-row">
    <h2>Edit ServiceTypes</h2>
    <a href="<?= ROOT ?>/admin/serviceTypes" class="btn secondary">Back</a>
  </div>
  <?php $serviceTypes = $params["serviceType"] ?? null; ?>
  <?php if ($serviceTypes): ?>
  <?php if (!empty($errors)): ?>
  <div class="alert alert-danger">
    <ul>
      <?php foreach ($errors as $error): ?>
        <li><?= htmlspecialchars($error) ?></li>
      <?php endforeach; ?>
    </ul>
  </div>
  <?php endif; ?>
  <form method="post" action="<?= ROOT ?>/admin/serviceTypes/<?= $serviceTypes->serviceTypeIdentify ?>/update" enctype="multipart/form-data">
    <div class="form-grid">
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" id="name" name="name" value="<?= $serviceTypes->name ?? "" ?>" >
    </div>
    <div class="form-group">
      <label for="description">Description</label>
      <input type="text" id="description" name="description" value="<?= $serviceTypes->description ?? "" ?>" >
    </div>
    </div>
    <div class="form-actions">
      <button type="submit" class="btn">Update</button>
      <a href="<?= ROOT ?>/admin/serviceTypes" class="btn secondary">Cancel</a>
    </div>
  </form>
  <?php else: ?>
    <p class="text-danger">Record not found.</p>
  <?php endif; ?>
</div>
