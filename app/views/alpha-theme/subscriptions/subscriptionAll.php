<div class="dashboard">
  <div class="top-row">
    <h2>Subscriptions</h2>
    <div class="action-buttons">
      <button class="btn" onclick="window.location='<?= ROOT ?>/admin/subscriptions/create'"><i class="uil uil-plus-circle"></i> Create</button>
      <button class="btn secondary" onclick="window.location='<?= ROOT ?>/admin/subscriptions/export'"><i class="uil uil-export"></i> Export</button>
      <button class="btn secondary" onclick="document.getElementById('importFile').click();"><i class="uil uil-import"></i> Import</button>
      <form action="<?= ROOT ?>/admin/subscriptions/import" method="post" enctype="multipart/form-data" style="display: none;">
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
  <label for="sort_subscriptionsTitle">Sort:</label>
  <select name="sort_subscriptionsTitle" id="sort_subscriptionsTitle" class="sort-select">
    <option value="">Clear</option>
    <option value="asc" <?php echo ($_GET['sort_subscriptionsCreatedAt'] ?? '') === 'asc' ? 'selected' : '' ?>>Title A–Z</option>
    <option value="desc" <?php echo ($_GET['sort_subscriptionsCreatedAt'] ?? '') === 'desc' ? 'selected' : '' ?>>Title Z–A</option>
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
          <th>Subscription Id</th>
          <th>User Id</th>
          <th>Plan Name</th>
          <th>Price</th>
          <th>Status</th>
          <th>Start Date</th>
          <th>End Date</th>
          <th>Renewal Date</th>
          <th>Features</th>
          <th>Subscription Created At</th>
          <th>Subscription Updated At</th>
          <th>Subscription Identify</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody id="tableBody">
<?php if (!empty($subscriptions)) : ?>
<?php foreach ($subscriptions as $index => $subscription) : ?>
        <tr>
          <td><input type="checkbox" class="row-check" name="selectedIds[]" value="<?= $subscription->subscriptionIdentify ?>" onchange="toggleTruncateBar()"></td>
          <td><?= $index + 1 ?></td>
          <td><?= isset($subscription->subscriptionId) ? htmlspecialchars($subscription->subscriptionId) : "-" ?></td>
          <td><?= isset($subscription->userId) ? htmlspecialchars($subscription->userId) : "-" ?></td>
          <td><?= isset($subscription->planName) ? htmlspecialchars($subscription->planName) : "-" ?></td>
          <td><?= isset($subscription->price) ? "$" . number_format($subscription->price, 2) : "-" ?></td>
          <td><?= isset($subscription->status) ? htmlspecialchars($subscription->status) : "-" ?></td>
          <td><?= strtotime($subscription->startDate) ? date("d M y, H:i", strtotime($subscription->startDate)) : "-" ?></td>
          <td><?= strtotime($subscription->endDate) ? date("d M y, H:i", strtotime($subscription->endDate)) : "-" ?></td>
          <td><?= strtotime($subscription->renewalDate) ? date("d M y, H:i", strtotime($subscription->renewalDate)) : "-" ?></td>
          <td><?= isset($subscription->features) ? htmlspecialchars($subscription->features) : "-" ?></td>
          <td><?= strtotime($subscription->subscriptionCreatedAt) ? date("d M y, H:i", strtotime($subscription->subscriptionCreatedAt)) : "-" ?></td>
          <td><?= strtotime($subscription->subscriptionUpdatedAt) ? date("d M y, H:i", strtotime($subscription->subscriptionUpdatedAt)) : "-" ?></td>
          <td><?= isset($subscription->subscriptionIdentify) ? htmlspecialchars($subscription->subscriptionIdentify) : "-" ?></td>
          <td>
            <div class="action-menu">
              <span onclick="toggleDropdown(this)">⋯</span>
              <div class="action-dropdown">
                <a href="<?= ROOT ?>/admin/subscriptions/<?= $subscription->subscriptionIdentify ?>"><i class="uil uil-eye"></i> View</a>
                <a href="<?= ROOT ?>/admin/subscriptions/<?= $subscription->subscriptionIdentify ?>/edit"><i class="uil uil-edit"></i> Edit</a>
                <a href="<?= ROOT ?>/admin/subscriptions/<?= $subscription->subscriptionIdentify ?>/delete"><i class="uil uil-trash-alt"></i> Delete</a>
              </div>
            </div>
          </td>
        </tr>
<?php endforeach; ?>
<?php else : ?>
<tr class="no-data-row"><td colspan="15"><div class="no-data-box"><p class="no-data-message">No subscriptions found.</p><a href="<?= ROOT ?>/admin/subscriptions/create" class="no-data-action"><i class="uil uil-plus-circle"></i> Create New</a></div></td></tr>
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
