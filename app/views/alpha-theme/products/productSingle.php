<div class="dashboard">
  <div class="top-row">
    <h2>Products Details</h2>
    <a href="<?= ROOT ?>/admin/products" class="btn secondary">Back</a>
  </div>

  <?php $product = $params["product"] ?? null; ?>
  <?php if ($product): ?>
  <div class="detail-layout">
    <div class="detail-data">
      <div class="detail-row">
        <div class="detail-label">Product Id</div>
        <div class="detail-value"><?= htmlspecialchars($product->productId ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Product Name</div>
        <div class="detail-value"><?= htmlspecialchars($product->productName ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Product Price</div>
        <div class="detail-value"><?= isset($product->productPrice) ? "$" . number_format($product->productPrice, 2) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Product Image</div>
        <div class="detail-value"><?php if (!empty(trim($product->productImage))) : ?>
          <img src="<?= ASSETS ?>/img/uploads/<?= htmlspecialchars(trim($product->productImage)) ?>" alt="Image" class="img-thumb-64">
        <?php else : ?> - <?php endif; ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Product Category</div>
        <div class="detail-value"><?= htmlspecialchars($product->productCategory ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Product Created At</div>
        <div class="detail-value"><?= strtotime($product->productCreatedAt) ? date("d M y, H:i", strtotime($product->productCreatedAt)) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Product Updated At</div>
        <div class="detail-value"><?= strtotime($product->productUpdatedAt) ? date("d M y, H:i", strtotime($product->productUpdatedAt)) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Product Identify</div>
        <div class="detail-value"><?= htmlspecialchars($product->productIdentify ?? "-") ?></div>
      </div>
    </div>
    <div class="detail-actions">
      <a href="<?= ROOT ?>/admin/products/<?= $product->productIdentify ?>/edit" class="action-btn">
        <i class="uil uil-edit"></i> Edit
      </a>
      <a href="<?= ROOT ?>/admin/products/<?= $product->productIdentify ?>/delete" class="action-btn">
        <i class="uil uil-trash-alt"></i> Delete
      </a>
    </div>
  </div>
  <?php else: ?>
  <p>No data found.</p>
  <?php endif; ?>
</div>
