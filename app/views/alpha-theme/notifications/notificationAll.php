<div class="dashboard">
  <div class="top-row">
    <h2>Notifications</h2>
    <div class="action-buttons">
      <button class="btn" onclick="window.location='<?= ROOT ?>/admin/notifications/create'"><i class="uil uil-plus-circle"></i> Create</button>
      <button class="btn secondary" onclick="window.location='<?= ROOT ?>/admin/notifications/export'"><i class="uil uil-export"></i> Export</button>
      <button class="btn secondary" onclick="document.getElementById('importFile').click();"><i class="uil uil-import"></i> Import</button>
      <form action="<?= ROOT ?>/admin/notifications/import" method="post" enctype="multipart/form-data" style="display: none;">
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
  <label for="sort_notificationsTitle">Sort:</label>
  <select name="sort_notificationsTitle" id="sort_notificationsTitle" class="sort-select">
    <option value="">Clear</option>
    <option value="asc" <?php echo ($_GET['sort_notificationsCreatedAt'] ?? '') === 'asc' ? 'selected' : '' ?>>Title A–Z</option>
    <option value="desc" <?php echo ($_GET['sort_notificationsCreatedAt'] ?? '') === 'desc' ? 'selected' : '' ?>>Title Z–A</option>
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
          <th>Notification Id</th>
          <th>User Id</th>
          <th>Title</th>
          <th>Content</th>
          <th>Status</th>
          <th>Notification Created At</th>
          <th>Notification Updated At</th>
          <th>Notification Identify</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody id="tableBody">
<?php if (!empty($notifications)) : ?>
<?php foreach ($notifications as $index => $notification) : ?>
        <tr>
          <td><input type="checkbox" class="row-check" name="selectedIds[]" value="<?= $notification->notificationIdentify ?>" onchange="toggleTruncateBar()"></td>
          <td><?= $index + 1 ?></td>
          <td><?= isset($notification->notificationId) ? htmlspecialchars($notification->notificationId) : "-" ?></td>
          <td><?= isset($notification->userId) ? htmlspecialchars($notification->userId) : "-" ?></td>
          <td><?= isset($notification->title) ? htmlspecialchars($notification->title) : "-" ?></td>
          <td><?= isset($notification->content) ? htmlspecialchars($notification->content) : "-" ?></td>
          <td><?= isset($notification->status) ? htmlspecialchars($notification->status) : "-" ?></td>
          <td><?= strtotime($notification->notificationCreatedAt) ? date("d M y, H:i", strtotime($notification->notificationCreatedAt)) : "-" ?></td>
          <td><?= strtotime($notification->notificationUpdatedAt) ? date("d M y, H:i", strtotime($notification->notificationUpdatedAt)) : "-" ?></td>
          <td><?= isset($notification->notificationIdentify) ? htmlspecialchars($notification->notificationIdentify) : "-" ?></td>
          <td>
            <div class="action-menu">
              <span onclick="toggleDropdown(this)">⋯</span>
              <div class="action-dropdown">
                <a href="<?= ROOT ?>/admin/notifications/<?= $notification->notificationIdentify ?>"><i class="uil uil-eye"></i> View</a>
                <a href="<?= ROOT ?>/admin/notifications/<?= $notification->notificationIdentify ?>/edit"><i class="uil uil-edit"></i> Edit</a>
                <a href="<?= ROOT ?>/admin/notifications/<?= $notification->notificationIdentify ?>/delete"><i class="uil uil-trash-alt"></i> Delete</a>
              </div>
            </div>
          </td>
        </tr>
<?php endforeach; ?>
<?php else : ?>
<tr class="no-data-row"><td colspan="11"><div class="no-data-box"><p class="no-data-message">No notifications found.</p><a href="<?= ROOT ?>/admin/notifications/create" class="no-data-action"><i class="uil uil-plus-circle"></i> Create New</a></div></td></tr>
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
