<div class="dashboard">
  <div class="top-row">
    <h2>Payments</h2>
    <div class="action-buttons">
      <button class="btn" onclick="window.location='<?= ROOT ?>/admin/payments/create'"><i class="uil uil-plus-circle"></i> Create</button>
      <button class="btn secondary" onclick="window.location='<?= ROOT ?>/admin/payments/export'"><i class="uil uil-export"></i> Export</button>
      <button class="btn secondary" onclick="document.getElementById('importFile').click();"><i class="uil uil-import"></i> Import</button>
      <form action="<?= ROOT ?>/admin/payments/import" method="post" enctype="multipart/form-data" style="display: none;">
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
  <label for="sort_paymentsTitle">Sort:</label>
  <select name="sort_paymentsTitle" id="sort_paymentsTitle" class="sort-select">
    <option value="">Clear</option>
    <option value="asc" <?php echo ($_GET['sort_paymentsCreatedAt'] ?? '') === 'asc' ? 'selected' : '' ?>>Title A–Z</option>
    <option value="desc" <?php echo ($_GET['sort_paymentsCreatedAt'] ?? '') === 'desc' ? 'selected' : '' ?>>Title Z–A</option>
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
          <th>Payment Id</th>
          <th>Order Id</th>
          <th>Payment Method</th>
          <th>Payment Status</th>
          <th>Amount</th>
          <th>Paid At</th>
          <th>Payment Created At</th>
          <th>Payment Updated At</th>
          <th>Payment Identify</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody id="tableBody">
<?php if (!empty($payments)) : ?>
<?php foreach ($payments as $index => $payment) : ?>
        <tr>
          <td><input type="checkbox" class="row-check" name="selectedIds[]" value="<?= $payment->paymentIdentify ?>" onchange="toggleTruncateBar()"></td>
          <td><?= $index + 1 ?></td>
          <td><?= isset($payment->paymentId) ? htmlspecialchars($payment->paymentId) : "-" ?></td>
          <td><?= isset($payment->orderId) ? htmlspecialchars($payment->orderId) : "-" ?></td>
          <td><?= isset($payment->paymentMethod) ? htmlspecialchars($payment->paymentMethod) : "-" ?></td>
          <td><?= isset($payment->paymentStatus) ? htmlspecialchars($payment->paymentStatus) : "-" ?></td>
          <td><?= isset($payment->amount) ? "$" . number_format($payment->amount, 2) : "-" ?></td>
          <td><?= strtotime($payment->paidAt) ? date("d M y, H:i", strtotime($payment->paidAt)) : "-" ?></td>
          <td><?= strtotime($payment->paymentCreatedAt) ? date("d M y, H:i", strtotime($payment->paymentCreatedAt)) : "-" ?></td>
          <td><?= strtotime($payment->paymentUpdatedAt) ? date("d M y, H:i", strtotime($payment->paymentUpdatedAt)) : "-" ?></td>
          <td><?= isset($payment->paymentIdentify) ? htmlspecialchars($payment->paymentIdentify) : "-" ?></td>
          <td>
            <div class="action-menu">
              <span onclick="toggleDropdown(this)">⋯</span>
              <div class="action-dropdown">
                <a href="<?= ROOT ?>/admin/payments/<?= $payment->paymentIdentify ?>"><i class="uil uil-eye"></i> View</a>
                <a href="<?= ROOT ?>/admin/payments/<?= $payment->paymentIdentify ?>/edit"><i class="uil uil-edit"></i> Edit</a>
                <a href="<?= ROOT ?>/admin/payments/<?= $payment->paymentIdentify ?>/delete"><i class="uil uil-trash-alt"></i> Delete</a>
              </div>
            </div>
          </td>
        </tr>
<?php endforeach; ?>
<?php else : ?>
<tr class="no-data-row"><td colspan="12"><div class="no-data-box"><p class="no-data-message">No payments found.</p><a href="<?= ROOT ?>/admin/payments/create" class="no-data-action"><i class="uil uil-plus-circle"></i> Create New</a></div></td></tr>
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
