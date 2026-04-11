<div class="dashboard">
  <div class="top-row">
    <h2>Leads</h2>
    <div class="action-buttons">
      <button class="btn" onclick="window.location='<?= ROOT ?>/admin/leads/create'"><i class="uil uil-plus-circle"></i> Create</button>
      <button class="btn secondary" onclick="window.location='<?= ROOT ?>/admin/leads/export'"><i class="uil uil-export"></i> Export</button>
      <button class="btn secondary" onclick="document.getElementById('importFile').click();"><i class="uil uil-import"></i> Import</button>
      <form action="<?= ROOT ?>/admin/leads/import" method="post" enctype="multipart/form-data" style="display: none;">
        <input type="file" name="file" id="importFile" onchange="this.form.submit()" />
      </form>
    </div>
  </div>
<div class="filter-sort-row">
<form method="GET" id="filterSortForm" class="filter-sort-form" onchange="this.submit()">
  <label for="filter_status">Status:</label>
  <select name="filter_status" id="filter_status" class="filter-select">
    <option value="">All</option>
    <option value="new" <?= ($_GET["filter_status"] ?? "") === "new" ? "selected" : "" ?>>New</option>
    <option value="contacted" <?= ($_GET["filter_status"] ?? "") === "contacted" ? "selected" : "" ?>>Contacted</option>
    <option value="converted" <?= ($_GET["filter_status"] ?? "") === "converted" ? "selected" : "" ?>>Converted</option>
    <option value="lost" <?= ($_GET["filter_status"] ?? "") === "lost" ? "selected" : "" ?>>Lost</option>
  </select>
  <label for="sort_leadCreatedAt">Sort:</label>
  <select name="sort_leadCreatedAt" id="sort_leadCreatedAt" class="sort-select">
    <option value="">Clear</option>
    <option value="asc" <?= ($_GET["sort_leadCreatedAt"] ?? "") === "asc" ? "selected" : "" ?>>Title A–Z</option>
    <option value="desc" <?= ($_GET["sort_leadCreatedAt"] ?? "") === "desc" ? "selected" : "" ?>>Title Z–A</option>
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
          <th>Lead Id</th>
          <th>Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Service Interested</th>
          <th>Status</th>
          <th>Lead Created At</th>
          <th>Lead Updated At</th>
          <th>Lead Identify</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody id="tableBody">
<?php if (!empty($leads)) : ?>
<?php foreach ($leads as $index => $lead) : ?>
        <tr>
          <td><input type="checkbox" class="row-check" name="selectedIds[]" value="<?= $lead->leadIdentify ?>" onchange="toggleTruncateBar()"></td>
          <td><?= $index + 1 ?></td>
          <td><?= isset($lead->leadId) ? htmlspecialchars($lead->leadId) : "-" ?></td>
          <td><?= isset($lead->name) ? htmlspecialchars($lead->name) : "-" ?></td>
          <td><?= isset($lead->email) ? htmlspecialchars($lead->email) : "-" ?></td>
          <td><?= isset($lead->phone) ? htmlspecialchars($lead->phone) : "-" ?></td>
          <td><?= isset($lead->serviceInterested) ? htmlspecialchars($lead->serviceInterested) : "-" ?></td>
          <td><?= isset($lead->status) ? htmlspecialchars($lead->status) : "-" ?></td>
          <td><?= strtotime($lead->leadCreatedAt) ? date("d M y, H:i", strtotime($lead->leadCreatedAt)) : "-" ?></td>
          <td><?= strtotime($lead->leadUpdatedAt) ? date("d M y, H:i", strtotime($lead->leadUpdatedAt)) : "-" ?></td>
          <td><?= isset($lead->leadIdentify) ? htmlspecialchars($lead->leadIdentify) : "-" ?></td>
          <td>
            <div class="action-menu">
              <span onclick="toggleDropdown(this)">⋯</span>
              <div class="action-dropdown">
                <a href="<?= ROOT ?>/admin/leads/<?= $lead->leadIdentify ?>"><i class="uil uil-eye"></i> View</a>
                <a href="<?= ROOT ?>/admin/leads/<?= $lead->leadIdentify ?>/edit"><i class="uil uil-edit"></i> Edit</a>
                <a href="<?= ROOT ?>/admin/leads/<?= $lead->leadIdentify ?>/delete"><i class="uil uil-trash-alt"></i> Delete</a>
              </div>
            </div>
          </td>
        </tr>
<?php endforeach; ?>
<?php else : ?>
<tr class="no-data-row"><td colspan="12"><div class="no-data-box"><p class="no-data-message">No leads found.</p><a href="<?= ROOT ?>/admin/leads/create" class="no-data-action"><i class="uil uil-plus-circle"></i> Create New</a></div></td></tr>
<?php endif; ?>
      </tbody>
    </table>
  </div>
<div id="truncateBar" class="truncate-bar" style="margin-top: 10px;">
  <button class="btn danger" onclick="truncateAll()"><i class="uil uil-fire"></i> Truncate All</button>
  <button class="btn danger" onclick="truncateSelected()"><i class="uil uil-trash"></i> Truncate Selected</button>
  <form id="truncateForm" method="POST" action="<?= ROOT ?>/admin/leads/truncate" style="display: none;"></form>
</div>
<div class="pagination-container">
  <?php if (!empty($meta)) { renderPagination($meta); } ?>
</div>
