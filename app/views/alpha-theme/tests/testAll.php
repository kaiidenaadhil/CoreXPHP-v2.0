<div class="dashboard">
  <div class="top-row">
    <h2>Tests</h2>
    <div class="action-buttons">
      <button class="btn" onclick="window.location='<?= ROOT ?>/admin/tests/create'"><i class="uil uil-plus-circle"></i> Create</button>
      <button class="btn secondary" onclick="window.location='<?= ROOT ?>/admin/tests/export'"><i class="uil uil-export"></i> Export</button>
      <button class="btn secondary" onclick="document.getElementById('importFile').click();"><i class="uil uil-import"></i> Import</button>
      <form action="<?= ROOT ?>/admin/tests/import" method="post" enctype="multipart/form-data" style="display: none;">
        <input type="file" name="file" id="importFile" onchange="this.form.submit()" />
      </form>
    </div>
  </div>
<div class="filter-sort-row">
<form method="GET" id="filterSortForm" class="filter-sort-form" onchange="this.submit()">
  <label for="filter_testEnum">TestEnum:</label>
  <select name="filter_testEnum" id="filter_testEnum" class="filter-select">
    <option value="">All</option>
    <option value="value1" <?= ($_GET["filter_testEnum"] ?? "") === "value1" ? "selected" : "" ?>>Value1</option>
    <option value="value2" <?= ($_GET["filter_testEnum"] ?? "") === "value2" ? "selected" : "" ?>>Value2</option>
  </select>
  <label for="sort_testCreatedAt">Sort:</label>
  <select name="sort_testCreatedAt" id="sort_testCreatedAt" class="sort-select">
    <option value="">Clear</option>
    <option value="asc" <?= ($_GET["sort_testCreatedAt"] ?? "") === "asc" ? "selected" : "" ?>>Title A–Z</option>
    <option value="desc" <?= ($_GET["sort_testCreatedAt"] ?? "") === "desc" ? "selected" : "" ?>>Title Z–A</option>
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
          <th>Test Id</th>
          <th>Test String</th>
          <th>Test Timestamp</th>
          <th>Test Enum</th>
          <th>Test Boolean</th>
          <th>Test Float</th>
          <th>Test Decimal</th>
          <th>Test Double</th>
          <th>Test J S O N</th>
          <th>Test File</th>
          <th>Test Foreign Key</th>
          <th>Test Created At</th>
          <th>Test Updated At</th>
          <th>Test Identify</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody id="tableBody">
<?php if (!empty($tests)) : ?>
<?php foreach ($tests as $index => $test) : ?>
        <tr>
          <td><input type="checkbox" class="row-check" name="selectedIds[]" value="<?= $test->testIdentify ?>" onchange="toggleTruncateBar()"></td>
          <td><?= $index + 1 ?></td>
          <td><?= isset($test->testId) ? htmlspecialchars($test->testId) : "-" ?></td>
          <td><?= isset($test->testString) ? htmlspecialchars($test->testString) : "-" ?></td>
          <td><?= strtotime($test->testTimestamp) ? date("d M y, H:i", strtotime($test->testTimestamp)) : "-" ?></td>
          <td><?= isset($test->testEnum) ? htmlspecialchars($test->testEnum) : "-" ?></td>
          <td><?= isset($test->testBoolean) ? htmlspecialchars($test->testBoolean) : "-" ?></td>
          <td><?= isset($test->testFloat) ? htmlspecialchars($test->testFloat) : "-" ?></td>
          <td><?= isset($test->testDecimal) ? "$" . number_format($test->testDecimal, 2) : "-" ?></td>
          <td><?= isset($test->testDouble) ? htmlspecialchars($test->testDouble) : "-" ?></td>
          <td><?= isset($test->testJSON) ? htmlspecialchars($test->testJSON) : "-" ?></td>
          <td>
            <?php if (!empty($test->testFile)) : ?>
              <a href="<?= ASSETS ?>/img/uploads/<?= $test->testFile ?>" target="_blank">View</a>
            <?php else : ?> - <?php endif; ?>
          </td>
          <td><?= isset($test->testForeignKey) ? htmlspecialchars($test->testForeignKey) : "-" ?></td>
          <td><?= strtotime($test->testCreatedAt) ? date("d M y, H:i", strtotime($test->testCreatedAt)) : "-" ?></td>
          <td><?= strtotime($test->testUpdatedAt) ? date("d M y, H:i", strtotime($test->testUpdatedAt)) : "-" ?></td>
          <td><?= isset($test->testIdentify) ? htmlspecialchars($test->testIdentify) : "-" ?></td>
          <td>
            <div class="action-menu">
              <span onclick="toggleDropdown(this)">⋯</span>
              <div class="action-dropdown">
                <a href="<?= ROOT ?>/admin/tests/<?= $test->testIdentify ?>"><i class="uil uil-eye"></i> View</a>
                <a href="<?= ROOT ?>/admin/tests/<?= $test->testIdentify ?>/edit"><i class="uil uil-edit"></i> Edit</a>
                <a href="<?= ROOT ?>/admin/tests/<?= $test->testIdentify ?>/delete"><i class="uil uil-trash-alt"></i> Delete</a>
              </div>
            </div>
          </td>
        </tr>
<?php endforeach; ?>
<?php else : ?>
<tr class="no-data-row"><td colspan="17"><div class="no-data-box"><p class="no-data-message">No tests found.</p><a href="<?= ROOT ?>/admin/tests/create" class="no-data-action"><i class="uil uil-plus-circle"></i> Create New</a></div></td></tr>
<?php endif; ?>
      </tbody>
    </table>
  </div>
<div id="truncateBar" class="truncate-bar" style="margin-top: 10px;">
  <button class="btn danger" onclick="truncateAll()"><i class="uil uil-fire"></i> Truncate All</button>
  <button class="btn danger" onclick="truncateSelected()"><i class="uil uil-trash"></i> Truncate Selected</button>
  <form id="truncateForm" method="POST" action="<?= ROOT ?>/admin/tests/truncate" style="display: none;"></form>
</div>
<div class="pagination-container">
  <?php if (!empty($meta)) { renderPagination($meta); } ?>
</div>
