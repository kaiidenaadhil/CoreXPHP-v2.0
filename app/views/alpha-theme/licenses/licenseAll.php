<div class="dashboard">
  <div class="top-row">
    <h2>Licenses</h2>
    <div class="action-buttons">
      <button class="btn" onclick="window.location='<?= ROOT ?>/admin/licenses/create'"><i class="uil uil-plus-circle"></i> Create</button>
      <button class="btn secondary" onclick="window.location='<?= ROOT ?>/admin/licenses/export'"><i class="uil uil-export"></i> Export</button>
      <button class="btn secondary" onclick="document.getElementById('importFile').click();"><i class="uil uil-import"></i> Import</button>
      <form action="<?= ROOT ?>/admin/licenses/import" method="post" enctype="multipart/form-data" style="display: none;">
        <input type="file" name="file" id="importFile" onchange="this.form.submit()" />
      </form>
    </div>
  </div>
<div class="filter-sort-row">
<form method="GET" id="filterSortForm" class="filter-sort-form" onchange="this.submit()">
  <label for="filter_status">Status:</label>
  <select name="filter_status" id="filter_status" class="filter-select">
    <option value="">All</option>
    <option value="active" <?= ($_GET["filter_status"] ?? "") === "active" ? "selected" : "" ?>>Active</option>
    <option value="expired" <?= ($_GET["filter_status"] ?? "") === "expired" ? "selected" : "" ?>>Expired</option>
    <option value="revoked" <?= ($_GET["filter_status"] ?? "") === "revoked" ? "selected" : "" ?>>Revoked</option>
  </select>
  <label for="sort_licenseCreatedAt">Sort:</label>
  <select name="sort_licenseCreatedAt" id="sort_licenseCreatedAt" class="sort-select">
    <option value="">Clear</option>
    <option value="asc" <?= ($_GET["sort_licenseCreatedAt"] ?? "") === "asc" ? "selected" : "" ?>>Title A–Z</option>
    <option value="desc" <?= ($_GET["sort_licenseCreatedAt"] ?? "") === "desc" ? "selected" : "" ?>>Title Z–A</option>
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
          <th>License Key</th>
          <th>Live Domain</th>
          <th>Local Domain</th>
          <th>Expires At</th>
          <th>Status</th>
          <th>License Created At</th>
          <th>License Updated At</th>
          <th>License Identify</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody id="tableBody">
<?php if (!empty($licenses)) : ?>
<?php foreach ($licenses as $index => $license) : ?>
        <tr>
          <td><input type="checkbox" class="row-check" name="selectedIds[]" value="<?= $license->licenseIdentify ?>" onchange="toggleTruncateBar()"></td>
          <td><?= $index + 1 ?></td>
          <td><?= isset($license->id) ? htmlspecialchars($license->id) : "-" ?></td>
          <td><?= isset($license->licenseKey) ? htmlspecialchars($license->licenseKey) : "-" ?></td>
          <td><?= isset($license->liveDomain) ? htmlspecialchars($license->liveDomain) : "-" ?></td>
          <td><?= isset($license->localDomain) ? htmlspecialchars($license->localDomain) : "-" ?></td>
          <td><?= strtotime($license->expiresAt) ? date("d M y, H:i", strtotime($license->expiresAt)) : "-" ?></td>
          <td><?= isset($license->status) ? htmlspecialchars($license->status) : "-" ?></td>
          <td><?= strtotime($license->licenseCreatedAt) ? date("d M y, H:i", strtotime($license->licenseCreatedAt)) : "-" ?></td>
          <td><?= strtotime($license->licenseUpdatedAt) ? date("d M y, H:i", strtotime($license->licenseUpdatedAt)) : "-" ?></td>
          <td><?= isset($license->licenseIdentify) ? htmlspecialchars($license->licenseIdentify) : "-" ?></td>
          <td>
            <div class="action-menu">
              <span onclick="toggleDropdown(this)">⋯</span>
              <div class="action-dropdown">
                <a href="<?= ROOT ?>/admin/licenses/<?= $license->licenseIdentify ?>"><i class="uil uil-eye"></i> View</a>
                <a href="<?= ROOT ?>/admin/licenses/<?= $license->licenseIdentify ?>/edit"><i class="uil uil-edit"></i> Edit</a>
                <a href="<?= ROOT ?>/admin/licenses/<?= $license->licenseIdentify ?>/delete"><i class="uil uil-trash-alt"></i> Delete</a>
              </div>
            </div>
          </td>
        </tr>
<?php endforeach; ?>
<?php else : ?>
<tr class="no-data-row"><td colspan="12"><div class="no-data-box"><p class="no-data-message">No licenses found.</p><a href="<?= ROOT ?>/admin/licenses/create" class="no-data-action"><i class="uil uil-plus-circle"></i> Create New</a></div></td></tr>
<?php endif; ?>
      </tbody>
    </table>
  </div>
<div id="truncateBar" class="truncate-bar" style="margin-top: 10px;">
  <button class="btn danger" onclick="truncateAll()"><i class="uil uil-fire"></i> Truncate All</button>
  <button class="btn danger" onclick="truncateSelected()"><i class="uil uil-trash"></i> Truncate Selected</button>
  <form id="truncateForm" method="POST" action="<?= ROOT ?>/admin/licenses/truncate" style="display: none;"></form>
</div>
<div class="pagination-container">
  <?php if (!empty($meta)) { renderPagination($meta); } ?>
</div>
