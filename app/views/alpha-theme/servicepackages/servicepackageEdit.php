<div class="dashboard">
  <div class="top-row">
    <h2>Edit Servicepackages</h2>
    <a href="<?= ROOT ?>/admin/servicepackages" class="btn secondary">Back</a>
  </div>
  <?php $servicepackages = $params["servicepackage"] ?? null; ?>
  <?php if ($servicepackages): ?>
  <?php if (!empty($errors)): ?>
  <div class="alert alert-danger">
    <ul>
      <?php foreach ($errors as $error): ?>
        <li><?= htmlspecialchars($error) ?></li>
      <?php endforeach; ?>
    </ul>
  </div>
  <?php endif; ?>
  <form method="post" action="<?= ROOT ?>/admin/servicepackages/<?= $servicepackages->servicepackageIdentify ?>/update" enctype="multipart/form-data">
    <div class="form-grid">
    <div class="form-group">
      <label for="serviceTypeId">Service Type Id</label>
      <input type="number" id="serviceTypeId" name="serviceTypeId" value="<?= $servicepackages->serviceTypeId ?? "" ?>" required>
    </div>
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" id="name" name="name" value="<?= $servicepackages->name ?? "" ?>" >
    </div>
    <div class="form-group">
      <label for="description">Description</label>
      <input type="text" id="description" name="description" value="<?= $servicepackages->description ?? "" ?>" >
    </div>
    <div class="form-group">
      <label for="price">Price</label>
      <input type="checkbox" id="price" name="price" value="1" <?= $servicepackages->price ? "checked" : "" ?>>
    </div>
    <div class="form-group">
      <label for="features">Features</label>
      <input type="text" id="features" name="features" value="<?= $servicepackages->features ?? "" ?>" >
    </div>
    <div class="form-group">
      <label for="isActive">Is Active</label>
      <input type="checkbox" id="isActive" name="isActive" value="1" <?= $servicepackages->isActive ? "checked" : "" ?>>
    </div>
    </div>
    <div class="form-actions">
      <button type="submit" class="btn">Update</button>
      <a href="<?= ROOT ?>/admin/servicepackages" class="btn secondary">Cancel</a>
    </div>
  </form>
  <?php else: ?>
    <p class="text-danger">Record not found.</p>
  <?php endif; ?>
</div>
