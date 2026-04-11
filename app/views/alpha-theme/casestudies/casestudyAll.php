<div class="dashboard">
  <div class="top-row">
    <h2>Casestudies</h2>
    <div class="action-buttons">
      <button class="btn" onclick="window.location='<?= ROOT ?>/admin/casestudies/create'"><i class="uil uil-plus-circle"></i> Create</button>
      <button class="btn secondary" onclick="window.location='<?= ROOT ?>/admin/casestudies/export'"><i class="uil uil-export"></i> Export</button>
      <button class="btn secondary" onclick="document.getElementById('importFile').click();"><i class="uil uil-import"></i> Import</button>
      <form action="<?= ROOT ?>/admin/casestudies/import" method="post" enctype="multipart/form-data" style="display: none;">
        <input type="file" name="file" id="importFile" onchange="this.form.submit()" />
      </form>
    </div>
  </div>
<div class="filter-sort-row">
<form method="GET" id="filterSortForm" class="filter-sort-form" onchange="this.submit()">
  <label for="sort_casestudyCreatedAt">Sort:</label>
  <select name="sort_casestudyCreatedAt" id="sort_casestudyCreatedAt" class="sort-select">
    <option value="">Clear</option>
    <option value="asc" <?= ($_GET["sort_casestudyCreatedAt"] ?? "") === "asc" ? "selected" : "" ?>>Title A–Z</option>
    <option value="desc" <?= ($_GET["sort_casestudyCreatedAt"] ?? "") === "desc" ? "selected" : "" ?>>Title Z–A</option>
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
          <th>Case Study Id</th>
          <th>Title</th>
          <th>Slug</th>
          <th>Client Name</th>
          <th>Industry</th>
          <th>Summary</th>
          <th>Challenges</th>
          <th>Solution</th>
          <th>Results</th>
          <th>Content</th>
          <th>Author Id</th>
          <th>Is Published</th>
          <th>Published At</th>
          <th>Casestudy Created At</th>
          <th>Casestudy Updated At</th>
          <th>Casestudy Identify</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody id="tableBody">
<?php if (!empty($casestudies)) : ?>
<?php foreach ($casestudies as $index => $casestudy) : ?>
        <tr>
          <td><input type="checkbox" class="row-check" name="selectedIds[]" value="<?= $casestudy->casestudyIdentify ?>" onchange="toggleTruncateBar()"></td>
          <td><?= $index + 1 ?></td>
          <td><?= isset($casestudy->caseStudyId) ? htmlspecialchars($casestudy->caseStudyId) : "-" ?></td>
          <td><?= isset($casestudy->title) ? htmlspecialchars($casestudy->title) : "-" ?></td>
          <td><?= isset($casestudy->slug) ? htmlspecialchars($casestudy->slug) : "-" ?></td>
          <td><?= isset($casestudy->clientName) ? htmlspecialchars($casestudy->clientName) : "-" ?></td>
          <td><?= isset($casestudy->industry) ? htmlspecialchars($casestudy->industry) : "-" ?></td>
          <td><?= isset($casestudy->summary) ? htmlspecialchars($casestudy->summary) : "-" ?></td>
          <td><?= isset($casestudy->challenges) ? htmlspecialchars($casestudy->challenges) : "-" ?></td>
          <td><?= isset($casestudy->solution) ? htmlspecialchars($casestudy->solution) : "-" ?></td>
          <td><?= isset($casestudy->results) ? htmlspecialchars($casestudy->results) : "-" ?></td>
          <td><?= isset($casestudy->content) ? htmlspecialchars($casestudy->content) : "-" ?></td>
          <td><?= isset($casestudy->authorId) ? htmlspecialchars($casestudy->authorId) : "-" ?></td>
          <td><?= isset($casestudy->isPublished) ? htmlspecialchars($casestudy->isPublished) : "-" ?></td>
          <td><?= strtotime($casestudy->publishedAt) ? date("d M y, H:i", strtotime($casestudy->publishedAt)) : "-" ?></td>
          <td><?= strtotime($casestudy->casestudyCreatedAt) ? date("d M y, H:i", strtotime($casestudy->casestudyCreatedAt)) : "-" ?></td>
          <td><?= strtotime($casestudy->casestudyUpdatedAt) ? date("d M y, H:i", strtotime($casestudy->casestudyUpdatedAt)) : "-" ?></td>
          <td><?= isset($casestudy->casestudyIdentify) ? htmlspecialchars($casestudy->casestudyIdentify) : "-" ?></td>
          <td>
            <div class="action-menu">
              <span onclick="toggleDropdown(this)">⋯</span>
              <div class="action-dropdown">
                <a href="<?= ROOT ?>/admin/casestudies/<?= $casestudy->casestudyIdentify ?>"><i class="uil uil-eye"></i> View</a>
                <a href="<?= ROOT ?>/admin/casestudies/<?= $casestudy->casestudyIdentify ?>/edit"><i class="uil uil-edit"></i> Edit</a>
                <a href="<?= ROOT ?>/admin/casestudies/<?= $casestudy->casestudyIdentify ?>/delete"><i class="uil uil-trash-alt"></i> Delete</a>
              </div>
            </div>
          </td>
        </tr>
<?php endforeach; ?>
<?php else : ?>
<tr class="no-data-row"><td colspan="19"><div class="no-data-box"><p class="no-data-message">No casestudies found.</p><a href="<?= ROOT ?>/admin/casestudies/create" class="no-data-action"><i class="uil uil-plus-circle"></i> Create New</a></div></td></tr>
<?php endif; ?>
      </tbody>
    </table>
  </div>
<div id="truncateBar" class="truncate-bar" style="margin-top: 10px;">
  <button class="btn danger" onclick="truncateAll()"><i class="uil uil-fire"></i> Truncate All</button>
  <button class="btn danger" onclick="truncateSelected()"><i class="uil uil-trash"></i> Truncate Selected</button>
  <form id="truncateForm" method="POST" action="<?= ROOT ?>/admin/casestudies/truncate" style="display: none;"></form>
</div>
<div class="pagination-container">
  <?php if (!empty($meta)) { renderPagination($meta); } ?>
</div>
