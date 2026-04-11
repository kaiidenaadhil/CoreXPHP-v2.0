<div class="dashboard">
  <div class="top-row">
    <h2>ServiceTypes</h2>
    <div class="action-buttons">
      <button class="btn" onclick="window.location='<?= ROOT ?>/admin/serviceTypes/create'"><i class="uil uil-plus-circle"></i> Create</button>
      <button class="btn secondary" onclick="window.location='<?= ROOT ?>/admin/serviceTypes/export'"><i class="uil uil-export"></i> Export</button>
      <button class="btn secondary" onclick="document.getElementById('importFile').click();"><i class="uil uil-import"></i> Import</button>
      <form action="<?= ROOT ?>/admin/serviceTypes/import" method="post" enctype="multipart/form-data" style="display: none;">
        <input type="file" name="file" id="importFile" onchange="this.form.submit()" />
      </form>
    </div>
  </div>
<div class="filter-sort-row">
<form method="GET" id="filterSortForm" class="filter-sort-form" onchange="this.submit()">
  <label for="sort_serviceTypeCreatedAt">Sort:</label>
  <select name="sort_serviceTypeCreatedAt" id="sort_serviceTypeCreatedAt" class="sort-select">
    <option value="">Clear</option>
    <option value="asc" <?= ($_GET["sort_serviceTypeCreatedAt"] ?? "") === "asc" ? "selected" : "" ?>>Title A–Z</option>
    <option value="desc" <?= ($_GET["sort_serviceTypeCreatedAt"] ?? "") === "desc" ? "selected" : "" ?>>Title Z–A</option>
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
          <th>Name</th>
          <th>Description</th>
          <th>Service Type Created At</th>
          <th>Service Type Updated At</th>
          <th>Service Type Identify</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody id="tableBody">
<?php if (!empty($servicetypes)) : ?>
<?php foreach ($servicetypes as $index => $serviceType) : ?>
        <tr>
          <td><input type="checkbox" class="row-check" name="selectedIds[]" value="<?= $serviceType->serviceTypeIdentify ?>" onchange="toggleTruncateBar()"></td>
          <td><?= $index + 1 ?></td>
          <td><?= isset($serviceType->id) ? htmlspecialchars($serviceType->id) : "-" ?></td>
          <td><?= isset($serviceType->name) ? htmlspecialchars($serviceType->name) : "-" ?></td>
          <td><?= isset($serviceType->description) ? htmlspecialchars($serviceType->description) : "-" ?></td>
          <td><?= strtotime($serviceType->serviceTypeCreatedAt) ? date("d M y, H:i", strtotime($serviceType->serviceTypeCreatedAt)) : "-" ?></td>
          <td><?= strtotime($serviceType->serviceTypeUpdatedAt) ? date("d M y, H:i", strtotime($serviceType->serviceTypeUpdatedAt)) : "-" ?></td>
          <td><?= isset($serviceType->serviceTypeIdentify) ? htmlspecialchars($serviceType->serviceTypeIdentify) : "-" ?></td>
          <td>
            <div class="action-menu">
              <span onclick="toggleDropdown(this)">⋯</span>
              <div class="action-dropdown">
                <a href="<?= ROOT ?>/admin/serviceTypes/<?= $serviceType->serviceTypeIdentify ?>"><i class="uil uil-eye"></i> View</a>
                <a href="<?= ROOT ?>/admin/serviceTypes/<?= $serviceType->serviceTypeIdentify ?>/edit"><i class="uil uil-edit"></i> Edit</a>
                <a href="<?= ROOT ?>/admin/serviceTypes/<?= $serviceType->serviceTypeIdentify ?>/delete"><i class="uil uil-trash-alt"></i> Delete</a>
              </div>
            </div>
          </td>
        </tr>
<?php endforeach; ?>
<?php else : ?>
<tr class="no-data-row"><td colspan="9"><div class="no-data-box"><p class="no-data-message">No serviceTypes found.</p><a href="<?= ROOT ?>/admin/serviceTypes/create" class="no-data-action"><i class="uil uil-plus-circle"></i> Create New</a></div></td></tr>
<?php endif; ?>
      </tbody>
    </table>
  </div>
<div id="truncateBar" class="truncate-bar" style="margin-top: 10px;">
  <button class="btn danger" onclick="truncateAll()"><i class="uil uil-fire"></i> Truncate All</button>
  <button class="btn danger" onclick="truncateSelected()"><i class="uil uil-trash"></i> Truncate Selected</button>
  <form id="truncateForm" method="POST" action="<?= ROOT ?>/admin/serviceTypes/truncate" style="display: none;"></form>
</div>
<div class="pagination-container">
  <?php if (!empty($meta)) { renderPagination($meta); } ?>
</div>
