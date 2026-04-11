<div class="dashboard">
  <div class="top-row">
    <h2>Activities</h2>
    <div class="action-buttons">
      <button class="btn" onclick="window.location='<?= ROOT ?>/admin/activities/create'"><i class="uil uil-plus-circle"></i> Create</button>
      <button class="btn secondary" onclick="window.location='<?= ROOT ?>/admin/activities/export'"><i class="uil uil-export"></i> Export</button>
      <button class="btn secondary" onclick="document.getElementById('importFile').click();"><i class="uil uil-import"></i> Import</button>
      <form action="<?= ROOT ?>/admin/activities/import" method="post" enctype="multipart/form-data" style="display: none;">
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
  <label for="sort_activitiesTitle">Sort:</label>
  <select name="sort_activitiesTitle" id="sort_activitiesTitle" class="sort-select">
    <option value="">Clear</option>
    <option value="asc" <?php echo ($_GET['sort_activitiesCreatedAt'] ?? '') === 'asc' ? 'selected' : '' ?>>Title A–Z</option>
    <option value="desc" <?php echo ($_GET['sort_activitiesCreatedAt'] ?? '') === 'desc' ? 'selected' : '' ?>>Title Z–A</option>
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
          <th>Activity Id</th>
          <th>User Id</th>
          <th>Description</th>
          <th>Type</th>
          <th>Activity Created At</th>
          <th>Activity Updated At</th>
          <th>Activity Identify</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody id="tableBody">
<?php if (!empty($activities)) : ?>
<?php foreach ($activities as $index => $activity) : ?>
        <tr>
          <td><input type="checkbox" class="row-check" name="selectedIds[]" value="<?= $activity->activityIdentify ?>" onchange="toggleTruncateBar()"></td>
          <td><?= $index + 1 ?></td>
          <td><?= isset($activity->activityId) ? htmlspecialchars($activity->activityId) : "-" ?></td>
          <td><?= isset($activity->userId) ? htmlspecialchars($activity->userId) : "-" ?></td>
          <td><?= isset($activity->description) ? htmlspecialchars($activity->description) : "-" ?></td>
          <td><?= isset($activity->type) ? htmlspecialchars($activity->type) : "-" ?></td>
          <td><?= strtotime($activity->activityCreatedAt) ? date("d M y, H:i", strtotime($activity->activityCreatedAt)) : "-" ?></td>
          <td><?= strtotime($activity->activityUpdatedAt) ? date("d M y, H:i", strtotime($activity->activityUpdatedAt)) : "-" ?></td>
          <td><?= isset($activity->activityIdentify) ? htmlspecialchars($activity->activityIdentify) : "-" ?></td>
          <td>
            <div class="action-menu">
              <span onclick="toggleDropdown(this)">⋯</span>
              <div class="action-dropdown">
                <a href="<?= ROOT ?>/admin/activities/<?= $activity->activityIdentify ?>"><i class="uil uil-eye"></i> View</a>
                <a href="<?= ROOT ?>/admin/activities/<?= $activity->activityIdentify ?>/edit"><i class="uil uil-edit"></i> Edit</a>
                <a href="<?= ROOT ?>/admin/activities/<?= $activity->activityIdentify ?>/delete"><i class="uil uil-trash-alt"></i> Delete</a>
              </div>
            </div>
          </td>
        </tr>
<?php endforeach; ?>
<?php else : ?>
<tr class="no-data-row"><td colspan="10"><div class="no-data-box"><p class="no-data-message">No activities found.</p><a href="<?= ROOT ?>/admin/activities/create" class="no-data-action"><i class="uil uil-plus-circle"></i> Create New</a></div></td></tr>
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
