<div class="dashboard">
  <div class="top-row">
    <h2>Workshops</h2>
    <div class="action-buttons">
      <button class="btn" onclick="window.location='<?= ROOT ?>/admin/workshops/create'"><i class="uil uil-plus-circle"></i> Create</button>
      <button class="btn secondary" onclick="window.location='<?= ROOT ?>/admin/workshops/export'"><i class="uil uil-export"></i> Export</button>
      <button class="btn secondary" onclick="document.getElementById('importFile').click();"><i class="uil uil-import"></i> Import</button>
      <form action="<?= ROOT ?>/admin/workshops/import" method="post" enctype="multipart/form-data" style="display: none;">
        <input type="file" name="file" id="importFile" onchange="this.form.submit()" />
      </form>
    </div>
  </div>
<div class="filter-sort-row">
<form method="GET" id="filterSortForm" class="filter-sort-form" onchange="this.submit()">
  <label for="filter_workshopType">WorkshopType:</label>
  <select name="filter_workshopType" id="filter_workshopType" class="filter-select">
    <option value="">All</option>
    <option value="Online" <?= ($_GET["filter_workshopType"] ?? "") === "Online" ? "selected" : "" ?>>Online</option>
    <option value="Offline" <?= ($_GET["filter_workshopType"] ?? "") === "Offline" ? "selected" : "" ?>>Offline</option>
    <option value="Hybrid" <?= ($_GET["filter_workshopType"] ?? "") === "Hybrid" ? "selected" : "" ?>>Hybrid</option>
  </select>
  <label for="sort_workshopCreatedAt">Sort:</label>
  <select name="sort_workshopCreatedAt" id="sort_workshopCreatedAt" class="sort-select">
    <option value="">Clear</option>
    <option value="asc" <?= ($_GET["sort_workshopCreatedAt"] ?? "") === "asc" ? "selected" : "" ?>>Title A–Z</option>
    <option value="desc" <?= ($_GET["sort_workshopCreatedAt"] ?? "") === "desc" ? "selected" : "" ?>>Title Z–A</option>
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
          <th>Workshop Id</th>
          <th>Title</th>
          <th>Category</th>
          <th>Location</th>
          <th>Workshop Type</th>
          <th>Start Date</th>
          <th>End Date</th>
          <th>Description</th>
          <th>Price</th>
          <th>Max Seats</th>
          <th>Is Active</th>
          <th>Workshop Created At</th>
          <th>Workshop Updated At</th>
          <th>Workshop Identify</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody id="tableBody">
<?php if (!empty($workshops)) : ?>
<?php foreach ($workshops as $index => $workshop) : ?>
        <tr>
          <td><input type="checkbox" class="row-check" name="selectedIds[]" value="<?= $workshop->workshopIdentify ?>" onchange="toggleTruncateBar()"></td>
          <td><?= $index + 1 ?></td>
          <td><?= isset($workshop->workshopId) ? htmlspecialchars($workshop->workshopId) : "-" ?></td>
          <td><?= isset($workshop->title) ? htmlspecialchars($workshop->title) : "-" ?></td>
          <td><?= isset($workshop->category) ? htmlspecialchars($workshop->category) : "-" ?></td>
          <td><?= isset($workshop->location) ? htmlspecialchars($workshop->location) : "-" ?></td>
          <td><?= isset($workshop->workshopType) ? htmlspecialchars($workshop->workshopType) : "-" ?></td>
          <td><?= strtotime($workshop->startDate) ? date("d M y, H:i", strtotime($workshop->startDate)) : "-" ?></td>
          <td><?= strtotime($workshop->endDate) ? date("d M y, H:i", strtotime($workshop->endDate)) : "-" ?></td>
          <td><?= isset($workshop->description) ? htmlspecialchars($workshop->description) : "-" ?></td>
          <td><?= isset($workshop->price) ? htmlspecialchars($workshop->price) : "-" ?></td>
          <td><?= isset($workshop->maxSeats) ? htmlspecialchars($workshop->maxSeats) : "-" ?></td>
          <td><?= isset($workshop->isActive) ? htmlspecialchars($workshop->isActive) : "-" ?></td>
          <td><?= strtotime($workshop->workshopCreatedAt) ? date("d M y, H:i", strtotime($workshop->workshopCreatedAt)) : "-" ?></td>
          <td><?= strtotime($workshop->workshopUpdatedAt) ? date("d M y, H:i", strtotime($workshop->workshopUpdatedAt)) : "-" ?></td>
          <td><?= isset($workshop->workshopIdentify) ? htmlspecialchars($workshop->workshopIdentify) : "-" ?></td>
          <td>
            <div class="action-menu">
              <span onclick="toggleDropdown(this)">⋯</span>
              <div class="action-dropdown">
                <a href="<?= ROOT ?>/admin/workshops/<?= $workshop->workshopIdentify ?>"><i class="uil uil-eye"></i> View</a>
                <a href="<?= ROOT ?>/admin/workshops/<?= $workshop->workshopIdentify ?>/edit"><i class="uil uil-edit"></i> Edit</a>
                <a href="<?= ROOT ?>/admin/workshops/<?= $workshop->workshopIdentify ?>/delete"><i class="uil uil-trash-alt"></i> Delete</a>
              </div>
            </div>
          </td>
        </tr>
<?php endforeach; ?>
<?php else : ?>
<tr class="no-data-row"><td colspan="17"><div class="no-data-box"><p class="no-data-message">No workshops found.</p><a href="<?= ROOT ?>/admin/workshops/create" class="no-data-action"><i class="uil uil-plus-circle"></i> Create New</a></div></td></tr>
<?php endif; ?>
      </tbody>
    </table>
  </div>
<div id="truncateBar" class="truncate-bar" style="margin-top: 10px;">
  <button class="btn danger" onclick="truncateAll()"><i class="uil uil-fire"></i> Truncate All</button>
  <button class="btn danger" onclick="truncateSelected()"><i class="uil uil-trash"></i> Truncate Selected</button>
  <form id="truncateForm" method="POST" action="<?= ROOT ?>/admin/workshops/truncate" style="display: none;"></form>
</div>
<div class="pagination-container">
  <?php if (!empty($meta)) { renderPagination($meta); } ?>
</div>
