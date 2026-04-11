<div class="dashboard">
  <div class="top-row">
    <h2>Servicepackages</h2>
    <div class="action-buttons">
      <button class="btn" onclick="window.location='<?= ROOT ?>/admin/servicepackages/create'"><i class="uil uil-plus-circle"></i> Create</button>
      <button class="btn secondary" onclick="window.location='<?= ROOT ?>/admin/servicepackages/export'"><i class="uil uil-export"></i> Export</button>
      <button class="btn secondary" onclick="document.getElementById('importFile').click();"><i class="uil uil-import"></i> Import</button>
      <form action="<?= ROOT ?>/admin/servicepackages/import" method="post" enctype="multipart/form-data" style="display: none;">
        <input type="file" name="file" id="importFile" onchange="this.form.submit()" />
      </form>
    </div>
  </div>
<div class="filter-sort-row">
<form method="GET" id="filterSortForm" class="filter-sort-form" onchange="this.submit()">
  <label for="sort_servicepackageCreatedAt">Sort:</label>
  <select name="sort_servicepackageCreatedAt" id="sort_servicepackageCreatedAt" class="sort-select">
    <option value="">Clear</option>
    <option value="asc" <?= ($_GET["sort_servicepackageCreatedAt"] ?? "") === "asc" ? "selected" : "" ?>>Title A–Z</option>
    <option value="desc" <?= ($_GET["sort_servicepackageCreatedAt"] ?? "") === "desc" ? "selected" : "" ?>>Title Z–A</option>
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
          <th>Id</th>
          <th>Service Type Id</th>
          <th>Name</th>
          <th>Description</th>
          <th>Price</th>
          <th>Features</th>
          <th>Is Active</th>
          <th>Servicepackage Created At</th>
          <th>Servicepackage Updated At</th>
          <th>Servicepackage Identify</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody id="tableBody">
<?php if (!empty($servicepackages)) : ?>
<?php foreach ($servicepackages as $index => $servicepackage) : ?>
        <tr>
          <td><input type="checkbox" class="row-check" name="selectedIds[]" value="<?= $servicepackage->servicepackageIdentify ?>" onchange="toggleTruncateBar()"></td>
          <td><?= $index + 1 ?></td>
          <td><?= isset($servicepackage->id) ? htmlspecialchars($servicepackage->id) : "-" ?></td>
          <td><?= isset($servicepackage->serviceTypeId) ? htmlspecialchars($servicepackage->serviceTypeId) : "-" ?></td>
          <td><?= isset($servicepackage->name) ? htmlspecialchars($servicepackage->name) : "-" ?></td>
          <td><?= isset($servicepackage->description) ? htmlspecialchars($servicepackage->description) : "-" ?></td>
          <td><?= isset($servicepackage->price) ? htmlspecialchars($servicepackage->price) : "-" ?></td>
          <td><?= isset($servicepackage->features) ? htmlspecialchars($servicepackage->features) : "-" ?></td>
          <td><?= isset($servicepackage->isActive) ? htmlspecialchars($servicepackage->isActive) : "-" ?></td>
          <td><?= strtotime($servicepackage->servicepackageCreatedAt) ? date("d M y, H:i", strtotime($servicepackage->servicepackageCreatedAt)) : "-" ?></td>
          <td><?= strtotime($servicepackage->servicepackageUpdatedAt) ? date("d M y, H:i", strtotime($servicepackage->servicepackageUpdatedAt)) : "-" ?></td>
          <td><?= isset($servicepackage->servicepackageIdentify) ? htmlspecialchars($servicepackage->servicepackageIdentify) : "-" ?></td>
          <td>
            <div class="action-menu">
              <span onclick="toggleDropdown(this)">⋯</span>
              <div class="action-dropdown">
                <a href="<?= ROOT ?>/admin/servicepackages/<?= $servicepackage->servicepackageIdentify ?>"><i class="uil uil-eye"></i> View</a>
                <a href="<?= ROOT ?>/admin/servicepackages/<?= $servicepackage->servicepackageIdentify ?>/edit"><i class="uil uil-edit"></i> Edit</a>
                <a href="<?= ROOT ?>/admin/servicepackages/<?= $servicepackage->servicepackageIdentify ?>/delete"><i class="uil uil-trash-alt"></i> Delete</a>
              </div>
            </div>
          </td>
        </tr>
<?php endforeach; ?>
<?php else : ?>
<tr class="no-data-row"><td colspan="13"><div class="no-data-box"><p class="no-data-message">No servicepackages found.</p><a href="<?= ROOT ?>/admin/servicepackages/create" class="no-data-action"><i class="uil uil-plus-circle"></i> Create New</a></div></td></tr>
<?php endif; ?>
      </tbody>
    </table>
  </div>
<div id="truncateBar" class="truncate-bar" style="margin-top: 10px;">
  <button class="btn danger" onclick="truncateAll()"><i class="uil uil-fire"></i> Truncate All</button>
  <button class="btn danger" onclick="truncateSelected()"><i class="uil uil-trash"></i> Truncate Selected</button>
  <form id="truncateForm" method="POST" action="<?= ROOT ?>/admin/servicepackages/truncate" style="display: none;"></form>
</div>
<div class="pagination-container">
  <?php if (!empty($meta)) { renderPagination($meta); } ?>
</div>
