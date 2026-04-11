<div class="dashboard">
  <div class="top-row">
    <h2>Projects</h2>
    <div class="action-buttons">
      <button class="btn" onclick="window.location='<?= ROOT ?>/admin/projects/create'"><i class="uil uil-plus-circle"></i> Create</button>
      <button class="btn secondary" onclick="window.location='<?= ROOT ?>/admin/projects/export'"><i class="uil uil-export"></i> Export</button>
      <button class="btn secondary" onclick="document.getElementById('importFile').click();"><i class="uil uil-import"></i> Import</button>
      <form action="<?= ROOT ?>/admin/projects/import" method="post" enctype="multipart/form-data" style="display: none;">
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
  <label for="sort_projectsTitle">Sort:</label>
  <select name="sort_projectsTitle" id="sort_projectsTitle" class="sort-select">
    <option value="">Clear</option>
    <option value="asc" <?php echo ($_GET['sort_projectsCreatedAt'] ?? '') === 'asc' ? 'selected' : '' ?>>Title A–Z</option>
    <option value="desc" <?php echo ($_GET['sort_projectsCreatedAt'] ?? '') === 'desc' ? 'selected' : '' ?>>Title Z–A</option>
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
          <th>Project Id</th>
          <th>User Id</th>
          <th>Project Name</th>
          <th>Project Type</th>
          <th>Status</th>
          <th>Budget</th>
          <th>Progress</th>
          <th>Deadline</th>
          <th>Assigned Team</th>
          <th>Project Created At</th>
          <th>Project Updated At</th>
          <th>Project Identify</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody id="tableBody">
<?php if (!empty($projects)) : ?>
<?php foreach ($projects as $index => $project) : ?>
        <tr>
          <td><input type="checkbox" class="row-check" name="selectedIds[]" value="<?= $project->projectIdentify ?>" onchange="toggleTruncateBar()"></td>
          <td><?= $index + 1 ?></td>
          <td><?= isset($project->projectId) ? htmlspecialchars($project->projectId) : "-" ?></td>
          <td><?= isset($project->userId) ? htmlspecialchars($project->userId) : "-" ?></td>
          <td><?= isset($project->projectName) ? htmlspecialchars($project->projectName) : "-" ?></td>
          <td><?= isset($project->projectType) ? htmlspecialchars($project->projectType) : "-" ?></td>
          <td><?= isset($project->status) ? htmlspecialchars($project->status) : "-" ?></td>
          <td><?= isset($project->budget) ? htmlspecialchars($project->budget) : "-" ?></td>
          <td><?= isset($project->progress) ? htmlspecialchars($project->progress) : "-" ?></td>
          <td><?= strtotime($project->deadline) ? date("d M y, H:i", strtotime($project->deadline)) : "-" ?></td>
          <td><?= isset($project->assignedTeam) ? htmlspecialchars($project->assignedTeam) : "-" ?></td>
          <td><?= strtotime($project->projectCreatedAt) ? date("d M y, H:i", strtotime($project->projectCreatedAt)) : "-" ?></td>
          <td><?= strtotime($project->projectUpdatedAt) ? date("d M y, H:i", strtotime($project->projectUpdatedAt)) : "-" ?></td>
          <td><?= isset($project->projectIdentify) ? htmlspecialchars($project->projectIdentify) : "-" ?></td>
          <td>
            <div class="action-menu">
              <span onclick="toggleDropdown(this)">⋯</span>
              <div class="action-dropdown">
                <a href="<?= ROOT ?>/admin/projects/<?= $project->projectIdentify ?>"><i class="uil uil-eye"></i> View</a>
                <a href="<?= ROOT ?>/admin/projects/<?= $project->projectIdentify ?>/edit"><i class="uil uil-edit"></i> Edit</a>
                <a href="<?= ROOT ?>/admin/projects/<?= $project->projectIdentify ?>/delete"><i class="uil uil-trash-alt"></i> Delete</a>
              </div>
            </div>
          </td>
        </tr>
<?php endforeach; ?>
<?php else : ?>
<tr class="no-data-row"><td colspan="15"><div class="no-data-box"><p class="no-data-message">No projects found.</p><a href="<?= ROOT ?>/admin/projects/create" class="no-data-action"><i class="uil uil-plus-circle"></i> Create New</a></div></td></tr>
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
