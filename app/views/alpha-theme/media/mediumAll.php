<div class="dashboard">
  <div class="top-row">
    <h2>Media</h2>
    <div class="action-buttons">
      <button class="btn" onclick="window.location='<?= ROOT ?>/admin/media/create'"><i class="uil uil-plus-circle"></i> Create</button>
      <button class="btn secondary" onclick="window.location='<?= ROOT ?>/admin/media/export'"><i class="uil uil-export"></i> Export</button>
      <button class="btn secondary" onclick="document.getElementById('importFile').click();"><i class="uil uil-import"></i> Import</button>
      <form action="<?= ROOT ?>/admin/media/import" method="post" enctype="multipart/form-data" style="display: none;">
        <input type="file" name="file" id="importFile" onchange="this.form.submit()" />
      </form>
    </div>
  </div>
<div class="filter-sort-row">
<form method="GET" id="filterSortForm" class="filter-sort-form" onchange="this.submit()">
  <label for="filter_referenceType">ReferenceType:</label>
  <select name="filter_referenceType" id="filter_referenceType" class="filter-select">
    <option value="">All</option>
    <option value="blog" <?= ($_GET["filter_referenceType"] ?? "") === "blog" ? "selected" : "" ?>>Blog</option>
    <option value="caseStudy" <?= ($_GET["filter_referenceType"] ?? "") === "caseStudy" ? "selected" : "" ?>>CaseStudy</option>
    <option value="project" <?= ($_GET["filter_referenceType"] ?? "") === "project" ? "selected" : "" ?>>Project</option>
    <option value="contact" <?= ($_GET["filter_referenceType"] ?? "") === "contact" ? "selected" : "" ?>>Contact</option>
    <option value="jobposts" <?= ($_GET["filter_referenceType"] ?? "") === "jobposts" ? "selected" : "" ?>>Jobposts</option>
    <option value="userAvater" <?= ($_GET["filter_referenceType"] ?? "") === "userAvater" ? "selected" : "" ?>>UserAvater</option>
  </select>
  <label for="sort_mediumCreatedAt">Sort:</label>
  <select name="sort_mediumCreatedAt" id="sort_mediumCreatedAt" class="sort-select">
    <option value="">Clear</option>
    <option value="asc" <?= ($_GET["sort_mediumCreatedAt"] ?? "") === "asc" ? "selected" : "" ?>>Title A–Z</option>
    <option value="desc" <?= ($_GET["sort_mediumCreatedAt"] ?? "") === "desc" ? "selected" : "" ?>>Title Z–A</option>
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
          <th>Media Id</th>
          <th>Reference Type</th>
          <th>Reference Id</th>
          <th>File Name</th>
          <th>File Url</th>
          <th>Mime Type</th>
          <th>Uploaded By</th>
          <th>Is Main</th>
          <th>Description</th>
          <th>Medium Created At</th>
          <th>Medium Updated At</th>
          <th>Medium Identify</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody id="tableBody">
<?php if (!empty($media)) : ?>
<?php foreach ($media as $index => $medium) : ?>
        <tr>
          <td><input type="checkbox" class="row-check" name="selectedIds[]" value="<?= $medium->mediumIdentify ?>" onchange="toggleTruncateBar()"></td>
          <td><?= $index + 1 ?></td>
          <td><?= isset($medium->mediaId) ? htmlspecialchars($medium->mediaId) : "-" ?></td>
          <td><?= isset($medium->referenceType) ? htmlspecialchars($medium->referenceType) : "-" ?></td>
          <td><?= isset($medium->referenceId) ? htmlspecialchars($medium->referenceId) : "-" ?></td>
          <td><?= isset($medium->fileName) ? htmlspecialchars($medium->fileName) : "-" ?></td>
          <td><?= isset($medium->fileUrl) ? htmlspecialchars($medium->fileUrl) : "-" ?></td>
          <td><?= isset($medium->mimeType) ? htmlspecialchars($medium->mimeType) : "-" ?></td>
          <td><?= isset($medium->uploadedBy) ? htmlspecialchars($medium->uploadedBy) : "-" ?></td>
          <td><?= isset($medium->isMain) ? htmlspecialchars($medium->isMain) : "-" ?></td>
          <td><?= isset($medium->description) ? htmlspecialchars($medium->description) : "-" ?></td>
          <td><?= strtotime($medium->mediumCreatedAt) ? date("d M y, H:i", strtotime($medium->mediumCreatedAt)) : "-" ?></td>
          <td><?= strtotime($medium->mediumUpdatedAt) ? date("d M y, H:i", strtotime($medium->mediumUpdatedAt)) : "-" ?></td>
          <td><?= isset($medium->mediumIdentify) ? htmlspecialchars($medium->mediumIdentify) : "-" ?></td>
          <td>
            <div class="action-menu">
              <span onclick="toggleDropdown(this)">⋯</span>
              <div class="action-dropdown">
                <a href="<?= ROOT ?>/admin/media/<?= $medium->mediumIdentify ?>"><i class="uil uil-eye"></i> View</a>
                <a href="<?= ROOT ?>/admin/media/<?= $medium->mediumIdentify ?>/edit"><i class="uil uil-edit"></i> Edit</a>
                <a href="<?= ROOT ?>/admin/media/<?= $medium->mediumIdentify ?>/delete"><i class="uil uil-trash-alt"></i> Delete</a>
              </div>
            </div>
          </td>
        </tr>
<?php endforeach; ?>
<?php else : ?>
<tr class="no-data-row"><td colspan="15"><div class="no-data-box"><p class="no-data-message">No media found.</p><a href="<?= ROOT ?>/admin/media/create" class="no-data-action"><i class="uil uil-plus-circle"></i> Create New</a></div></td></tr>
<?php endif; ?>
      </tbody>
    </table>
  </div>
<div id="truncateBar" class="truncate-bar" style="margin-top: 10px;">
  <button class="btn danger" onclick="truncateAll()"><i class="uil uil-fire"></i> Truncate All</button>
  <button class="btn danger" onclick="truncateSelected()"><i class="uil uil-trash"></i> Truncate Selected</button>
  <form id="truncateForm" method="POST" action="<?= ROOT ?>/admin/media/truncate" style="display: none;"></form>
</div>
<div class="pagination-container">
  <?php if (!empty($meta)) { renderPagination($meta); } ?>
</div>
