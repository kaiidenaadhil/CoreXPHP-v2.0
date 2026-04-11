<div class="dashboard">
  <div class="top-row">
    <h2>Products</h2>
    <div class="action-buttons">
      <button class="btn" onclick="window.location='<?= ROOT ?>/admin/products/create'"><i class="uil uil-plus-circle"></i> Create</button>
      <button class="btn secondary" onclick="window.location='<?= ROOT ?>/admin/products/export'"><i class="uil uil-export"></i> Export</button>
      <button class="btn secondary" onclick="document.getElementById('importFile').click();"><i class="uil uil-import"></i> Import</button>
      <form action="<?= ROOT ?>/admin/products/import" method="post" enctype="multipart/form-data" style="display: none;">
        <input type="file" name="file" id="importFile" onchange="this.form.submit()" />
      </form>
    </div>
  </div>
<div class="filter-sort-row">
<form method="GET" id="filterSortForm" class="filter-sort-form" onchange="this.submit()">
  <label for="filter_productCategory">ProductCategory:</label>
  <select name="filter_productCategory" id="filter_productCategory" class="filter-select">
    <option value="">All</option>
    <option value="digital" <?= ($_GET["filter_productCategory"] ?? "") === "digital" ? "selected" : "" ?>>Digital</option>
    <option value="physical" <?= ($_GET["filter_productCategory"] ?? "") === "physical" ? "selected" : "" ?>>Physical</option>
  </select>
  <label for="sort_productCreatedAt">Sort:</label>
  <select name="sort_productCreatedAt" id="sort_productCreatedAt" class="sort-select">
    <option value="">Clear</option>
    <option value="asc" <?= ($_GET["sort_productCreatedAt"] ?? "") === "asc" ? "selected" : "" ?>>Title A–Z</option>
    <option value="desc" <?= ($_GET["sort_productCreatedAt"] ?? "") === "desc" ? "selected" : "" ?>>Title Z–A</option>
  </select>
  <?php if (! empty($_GET["search"])): ?>
    <input type="hidden" name="search" value="<?= htmlspecialchars($_GET["search"]) ?>">
  <?php endif; ?>
</form>
</div>
  <div class="table-responsive">
    <table>
      <thead>
        <tr>
          <th><input type="checkbox" onclick="toggleAll(this)" /></th>
          <th>#</th>
          <th>Product Id</th>
          <th>Product Name</th>
          <th>Product Price</th>
          <th>Product Image</th>
          <th>Product Category</th>
          <th>Product Created At</th>
          <th>Product Updated At</th>
          <th>Product Identify</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody id="tableBody">
<?php if (!empty($products)) : ?>
<?php foreach ($products as $index => $product) : ?>
        <tr>
          <td><input type="checkbox" class="row-check" name="selectedIds[]" value="<?= $product->productIdentify ?>" onchange="toggleTruncateBar()"></td>
          <td><?= $index + 1 ?></td>
          <td><?= isset($product->productId) ? htmlspecialchars($product->productId) : "-" ?></td>
          <td><?= isset($product->productName) ? htmlspecialchars($product->productName) : "-" ?></td>
          <td><?= isset($product->productPrice) ? "$" . number_format($product->productPrice, 2) : "-" ?></td>
          <td>
            <?php if (!empty($product->productImage)) : ?>
              <a href="<?= ASSETS ?>/img/uploads/<?= $product->productImage ?>" target="_blank">View</a>
            <?php else : ?> - <?php endif; ?>
          </td>
          <td><?= isset($product->productCategory) ? htmlspecialchars($product->productCategory) : "-" ?></td>
          <td><?= strtotime($product->productCreatedAt) ? date("d M y, H:i", strtotime($product->productCreatedAt)) : "-" ?></td>
          <td><?= strtotime($product->productUpdatedAt) ? date("d M y, H:i", strtotime($product->productUpdatedAt)) : "-" ?></td>
          <td><?= isset($product->productIdentify) ? htmlspecialchars($product->productIdentify) : "-" ?></td>
          <td>
            <div class="action-menu">
              <span onclick="toggleDropdown(this)">⋯</span>
              <div class="action-dropdown">
                <a href="<?= ROOT ?>/admin/products/<?= $product->productIdentify ?>"><i class="uil uil-eye"></i> View</a>
                <a href="<?= ROOT ?>/admin/products/<?= $product->productIdentify ?>/edit"><i class="uil uil-edit"></i> Edit</a>
                <a href="<?= ROOT ?>/admin/products/<?= $product->productIdentify ?>/delete"><i class="uil uil-trash-alt"></i> Delete</a>
              </div>
            </div>
          </td>
        </tr>
<?php endforeach; ?>
<?php else : ?>
<tr class="no-data-row"><td colspan="11"><div class="no-data-box"><p class="no-data-message">No products found.</p><a href="<?= ROOT ?>/admin/products/create" class="no-data-action"><i class="uil uil-plus-circle"></i> Create New</a></div></td></tr>
<?php endif; ?>
      </tbody>
    </table>
  </div>
<div id="truncateBar" class="truncate-bar" style="margin-top: 10px;">
  <button class="btn danger" onclick="truncateAll()"><i class="uil uil-fire"></i> Truncate All</button>
  <button class="btn danger" onclick="truncateSelected()"><i class="uil uil-trash"></i> Truncate Selected</button>
  <form id="truncateForm" method="POST" action="<?= ROOT ?>/admin/products/truncate" style="display: none;"></form>
</div>
<div class="pagination-container">
  <?php if (!empty($meta)) { renderPagination($meta); } ?>
</div>
