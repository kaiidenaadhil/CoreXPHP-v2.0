<div class="dashboard">
  <div class="top-row">
    <h2>Orders</h2>
    <div class="action-buttons">
      <button class="btn" onclick="window.location='<?= ROOT ?>/admin/orders/create'"><i class="uil uil-plus-circle"></i> Create</button>
      <button class="btn secondary" onclick="window.location='<?= ROOT ?>/admin/orders/export'"><i class="uil uil-export"></i> Export</button>
      <button class="btn secondary" onclick="document.getElementById('importFile').click();"><i class="uil uil-import"></i> Import</button>
      <form action="<?= ROOT ?>/admin/orders/import" method="post" enctype="multipart/form-data" style="display: none;">
        <input type="file" name="file" id="importFile" onchange="this.form.submit()" />
      </form>
    </div>
  </div>
<div class="filter-sort-row">
<form method="GET" id="filterSortForm" class="filter-sort-form" onchange="this.submit()">
  <label for="filter_status">Location:</label>
  <select name="filter_status" id="filter_status" class="filter-select">
    <option value="active" <?php echo ($_GET['filter_status'] ?? '') === 'active' ? 'selected' : '' ?>>Active</option>
    <option value="inactive" <?php echo ($_GET['filter_status'] ?? '') === 'inactive' ? 'selected' : '' ?>>Inactive</option>
  </select>
  <label for="sort_ordersTitle">Sort:</label>
  <select name="sort_ordersTitle" id="sort_ordersTitle" class="sort-select">
    <option value="">Clear</option>
    <option value="asc" <?php echo ($_GET['sort_ordersCreatedAt'] ?? '') === 'asc' ? 'selected' : '' ?>>Title A–Z</option>
    <option value="desc" <?php echo ($_GET['sort_ordersCreatedAt'] ?? '') === 'desc' ? 'selected' : '' ?>>Title Z–A</option>
  </select>
  <?php if (! empty($_GET['search'])): ?>
    <input type="hidden" name="search" value="<?php echo htmlspecialchars($_GET['search'])?>">
  <?php endif; ?>
</form>
</div>
  <div class="table-responsive">
    <table>
      <thead>
        <tr>
          <th><input type="checkbox" onclick="toggleAll(this)" /></th>
          <th>#</th>
          <th>Order Id</th>
          <th>User Id</th>
          <th>Order Type</th>
          <th>Reference Id</th>
          <th>Amount</th>
          <th>Status</th>
          <th>Order Created At</th>
          <th>Order Updated At</th>
          <th>Order Identify</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody id="tableBody">
<?php if (!empty($orders)) : ?>
<?php foreach ($orders as $index => $order) : ?>
        <tr>
          <td><input type="checkbox" class="row-check" name="selectedIds[]" value="<?= $order->orderIdentify ?>" onchange="toggleTruncateBar()"></td>
          <td><?= $index + 1 ?></td>
          <td><?= isset($order->orderId) ? htmlspecialchars($order->orderId) : "-" ?></td>
          <td><?= isset($order->userId) ? htmlspecialchars($order->userId) : "-" ?></td>
          <td><?= isset($order->orderType) ? htmlspecialchars($order->orderType) : "-" ?></td>
          <td><?= isset($order->referenceId) ? htmlspecialchars($order->referenceId) : "-" ?></td>
          <td><?= isset($order->amount) ? "$" . number_format($order->amount, 2) : "-" ?></td>
          <td><?= isset($order->status) ? htmlspecialchars($order->status) : "-" ?></td>
          <td><?= strtotime($order->orderCreatedAt) ? date("d M y, H:i", strtotime($order->orderCreatedAt)) : "-" ?></td>
          <td><?= strtotime($order->orderUpdatedAt) ? date("d M y, H:i", strtotime($order->orderUpdatedAt)) : "-" ?></td>
          <td><?= isset($order->orderIdentify) ? htmlspecialchars($order->orderIdentify) : "-" ?></td>
          <td>
            <div class="action-menu">
              <span onclick="toggleDropdown(this)">⋯</span>
              <div class="action-dropdown">
                <a href="<?= ROOT ?>/admin/orders/<?= $order->orderIdentify ?>"><i class="uil uil-eye"></i> View</a>
                <a href="<?= ROOT ?>/admin/orders/<?= $order->orderIdentify ?>/edit"><i class="uil uil-edit"></i> Edit</a>
                <a href="<?= ROOT ?>/admin/orders/<?= $order->orderIdentify ?>/delete"><i class="uil uil-trash-alt"></i> Delete</a>
              </div>
            </div>
          </td>
        </tr>
<?php endforeach; ?>
<?php else : ?>
<tr class="no-data-row"><td colspan="12"><div class="no-data-box"><p class="no-data-message">No orders found.</p><a href="<?= ROOT ?>/admin/orders/create" class="no-data-action"><i class="uil uil-plus-circle"></i> Create New</a></div></td></tr>
<?php endif; ?>
      </tbody>
    </table>
  </div>
  <div class="pagination"><?= $meta["pagination"] ?? "" ?></div>
</div>
<div class="truncate-bar" id="truncateBar" style="display:none; margin-top: 10px;">
  <button type="button" onclick="truncateSelected()">Truncate Selected</button>
</div>
<div class="pagination-container">
  <?php if (!empty($meta)) { renderPagination($meta); } ?>
</div>
