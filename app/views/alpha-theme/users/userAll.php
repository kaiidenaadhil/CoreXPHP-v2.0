<div class="dashboard">
  <div class="top-row">
    <h2>Users</h2>
    <div class="action-buttons">
      <button class="btn" onclick="window.location='<?= ROOT ?>/admin/users/create'"><i class="uil uil-plus-circle"></i> Create</button>
      <button class="btn secondary" onclick="window.location='<?= ROOT ?>/admin/users/export'"><i class="uil uil-export"></i> Export</button>
      <button class="btn secondary" onclick="document.getElementById('importFile').click();"><i class="uil uil-import"></i> Import</button>
      <form action="<?= ROOT ?>/admin/users/import" method="post" enctype="multipart/form-data" style="display: none;">
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
  <label for="sort_usersTitle">Sort:</label>
  <select name="sort_usersTitle" id="sort_usersTitle" class="sort-select">
    <option value="">Clear</option>
    <option value="asc" <?php echo ($_GET['sort_usersCreatedAt'] ?? '') === 'asc' ? 'selected' : '' ?>>Title A–Z</option>
    <option value="desc" <?php echo ($_GET['sort_usersCreatedAt'] ?? '') === 'desc' ? 'selected' : '' ?>>Title Z–A</option>
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
          <th>User Id</th>
          <th>User Alt Name</th>
          <th>Name</th>
          <th>User Email</th>
          <th>Password Hash</th>
          <th>User Role</th>
          <th>Permissions</th>
          <th>User Created At</th>
          <th>User Updated At</th>
          <th>User Identify</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody id="tableBody">
<?php if (!empty($users)) : ?>
<?php foreach ($users as $index => $user) : ?>
        <tr>
          <td><input type="checkbox" class="row-check" name="selectedIds[]" value="<?= $user->userIdentify ?>" onchange="toggleTruncateBar()"></td>
          <td><?= $index + 1 ?></td>
          <td><?= isset($user->userId) ? htmlspecialchars($user->userId) : "-" ?></td>
          <td><?= isset($user->userAltName) ? htmlspecialchars($user->userAltName) : "-" ?></td>
          <td><?= isset($user->name) ? htmlspecialchars($user->name) : "-" ?></td>
          <td><?= isset($user->userEmail) ? htmlspecialchars($user->userEmail) : "-" ?></td>
          <td><?= isset($user->passwordHash) ? htmlspecialchars($user->passwordHash) : "-" ?></td>
          <td><?= isset($user->userRole) ? htmlspecialchars($user->userRole) : "-" ?></td>
          <td><?= isset($user->permissions) ? htmlspecialchars($user->permissions) : "-" ?></td>
          <td><?= strtotime($user->userCreatedAt) ? date("d M y, H:i", strtotime($user->userCreatedAt)) : "-" ?></td>
          <td><?= strtotime($user->userUpdatedAt) ? date("d M y, H:i", strtotime($user->userUpdatedAt)) : "-" ?></td>
          <td><?= isset($user->userIdentify) ? htmlspecialchars($user->userIdentify) : "-" ?></td>
          <td>
            <div class="action-menu">
              <span onclick="toggleDropdown(this)">⋯</span>
              <div class="action-dropdown">
                <a href="<?= ROOT ?>/admin/users/<?= $user->userIdentify ?>"><i class="uil uil-eye"></i> View</a>
                <a href="<?= ROOT ?>/admin/users/<?= $user->userIdentify ?>/edit"><i class="uil uil-edit"></i> Edit</a>
                <a href="<?= ROOT ?>/admin/users/<?= $user->userIdentify ?>/delete"><i class="uil uil-trash-alt"></i> Delete</a>
              </div>
            </div>
          </td>
        </tr>
<?php endforeach; ?>
<?php else : ?>
<tr class="no-data-row"><td colspan="13"><div class="no-data-box"><p class="no-data-message">No users found.</p><a href="<?= ROOT ?>/admin/users/create" class="no-data-action"><i class="uil uil-plus-circle"></i> Create New</a></div></td></tr>
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
