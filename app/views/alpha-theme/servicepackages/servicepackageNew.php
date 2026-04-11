<div class="dashboard">
  <div class="top-row">
    <h2>Create New Servicepackages</h2>
    <a href="<?= ROOT ?>/admin/servicepackages" class="btn secondary">Back</a>
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
  <form method="post" action="<?= ROOT ?>/admin/servicepackages/store" enctype="multipart/form-data">
    <div class="form-grid">
    <div class="form-group">
      <label for="serviceTypeId">Service Type Id</label>
      <input type="number" id="serviceTypeId" name="serviceTypeId" required>
    </div>
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" id="name" name="name" >
    </div>
    <div class="form-group">
      <label for="description">Description</label>
      <input type="text" id="description" name="description" >
    </div>
    <div class="form-group">
      <label for="price">Price</label>
      <input type="checkbox" id="price" name="price" value="1">
    </div>
    <div class="form-group">
      <label for="features">Features</label>
      <input type="text" id="features" name="features" >
    </div>
    <div class="form-group">
      <label for="isActive">Is Active</label>
      <input type="checkbox" id="isActive" name="isActive" value="1">
    </div>
    </div>
    <div class="form-actions">
      <button type="submit" class="btn">Create</button>
      <a href="<?= ROOT ?>/admin/servicepackages" class="btn secondary">Cancel</a>
    </div>
  </form>
</div>
