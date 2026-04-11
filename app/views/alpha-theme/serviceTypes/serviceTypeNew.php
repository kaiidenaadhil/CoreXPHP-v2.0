<div class="dashboard">
  <div class="top-row">
    <h2>Create New ServiceTypes</h2>
    <a href="<?= ROOT ?>/admin/serviceTypes" class="btn secondary">Back</a>
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
  <form method="post" action="<?= ROOT ?>/admin/serviceTypes/store" enctype="multipart/form-data">
    <div class="form-grid">
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" id="name" name="name" >
    </div>
    <div class="form-group">
      <label for="description">Description</label>
      <input type="text" id="description" name="description" >
    </div>
    </div>
    <div class="form-actions">
      <button type="submit" class="btn">Create</button>
      <a href="<?= ROOT ?>/admin/serviceTypes" class="btn secondary">Cancel</a>
    </div>
  </form>
</div>
