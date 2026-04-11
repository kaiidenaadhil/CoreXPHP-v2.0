<div class="dashboard">
  <div class="top-row">
    <h2>Create New Products</h2>
    <a href="<?= ROOT ?>/admin/products" class="btn secondary">Back</a>
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
  <form method="post" action="<?= ROOT ?>/admin/products/store" enctype="multipart/form-data">
    <div class="form-grid">
    <div class="form-group">
      <label for="productName">Product Name</label>
      <input type="text" id="productName" name="productName" >
    </div>
    <div class="form-group">
      <label for="productPrice">Product Price</label>
      <input type="number" step="0.01" id="productPrice" name="productPrice" >
    </div>
    <div class="form-group">
      <label for="productImage">Product Image</label>
      <input type="file" id="productImage" name="productImage">
    </div>
    <div class="form-group">
      <label for="productCategory">Product Category</label>
      <select id="productCategory" name="productCategory" required>
        <option value="digital">Digital</option>
        <option value="physical">Physical</option>
      </select>
    </div>
    </div>
    <div class="form-actions">
      <button type="submit" class="btn">Create</button>
      <a href="<?= ROOT ?>/admin/products" class="btn secondary">Cancel</a>
    </div>
  </form>
</div>
