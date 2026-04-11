<div class="dashboard">
  <div class="top-row">
    <h2>Jobposts</h2>
    <div class="action-buttons">
      <button class="btn" onclick="window.location='<?= ROOT ?>/admin/jobposts/create'"><i class="uil uil-plus-circle"></i> Create</button>
      <button class="btn secondary" onclick="window.location='<?= ROOT ?>/admin/jobposts/export'"><i class="uil uil-export"></i> Export</button>
      <button class="btn secondary" onclick="document.getElementById('importFile').click();"><i class="uil uil-import"></i> Import</button>
      <form action="<?= ROOT ?>/admin/jobposts/import" method="post" enctype="multipart/form-data" style="display: none;">
        <input type="file" name="file" id="importFile" onchange="this.form.submit()" />
      </form>
    </div>
  </div>
<div class="filter-sort-row">
<form method="GET" id="filterSortForm" class="filter-sort-form" onchange="this.submit()">
  <label for="filter_jobType">JobType:</label>
  <select name="filter_jobType" id="filter_jobType" class="filter-select">
    <option value="">All</option>
    <option value="Full-time" <?= ($_GET["filter_jobType"] ?? "") === "Full-time" ? "selected" : "" ?>>Full-time</option>
    <option value="Part-time" <?= ($_GET["filter_jobType"] ?? "") === "Part-time" ? "selected" : "" ?>>Part-time</option>
    <option value="Contract" <?= ($_GET["filter_jobType"] ?? "") === "Contract" ? "selected" : "" ?>>Contract</option>
    <option value="Internship" <?= ($_GET["filter_jobType"] ?? "") === "Internship" ? "selected" : "" ?>>Internship</option>
  </select>
  <label for="sort_jobpostCreatedAt">Sort:</label>
  <select name="sort_jobpostCreatedAt" id="sort_jobpostCreatedAt" class="sort-select">
    <option value="">Clear</option>
    <option value="asc" <?= ($_GET["sort_jobpostCreatedAt"] ?? "") === "asc" ? "selected" : "" ?>>Title A–Z</option>
    <option value="desc" <?= ($_GET["sort_jobpostCreatedAt"] ?? "") === "desc" ? "selected" : "" ?>>Title Z–A</option>
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
          <th>Job Id</th>
          <th>Job Title</th>
          <th>Department</th>
          <th>Location</th>
          <th>Job Type</th>
          <th>Salary Range</th>
          <th>Requirements</th>
          <th>Responsibilities</th>
          <th>Benefits</th>
          <th>Is Active</th>
          <th>Posted By</th>
          <th>Posted At</th>
          <th>Jobpost Created At</th>
          <th>Jobpost Updated At</th>
          <th>Jobpost Identify</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody id="tableBody">
<?php if (!empty($jobposts)) : ?>
<?php foreach ($jobposts as $index => $jobpost) : ?>
        <tr>
          <td><input type="checkbox" class="row-check" name="selectedIds[]" value="<?= $jobpost->jobpostIdentify ?>" onchange="toggleTruncateBar()"></td>
          <td><?= $index + 1 ?></td>
          <td><?= isset($jobpost->jobId) ? htmlspecialchars($jobpost->jobId) : "-" ?></td>
          <td><?= isset($jobpost->jobTitle) ? htmlspecialchars($jobpost->jobTitle) : "-" ?></td>
          <td><?= isset($jobpost->department) ? htmlspecialchars($jobpost->department) : "-" ?></td>
          <td><?= isset($jobpost->location) ? htmlspecialchars($jobpost->location) : "-" ?></td>
          <td><?= isset($jobpost->jobType) ? htmlspecialchars($jobpost->jobType) : "-" ?></td>
          <td><?= isset($jobpost->salaryRange) ? htmlspecialchars($jobpost->salaryRange) : "-" ?></td>
          <td><?= isset($jobpost->requirements) ? htmlspecialchars($jobpost->requirements) : "-" ?></td>
          <td><?= isset($jobpost->responsibilities) ? htmlspecialchars($jobpost->responsibilities) : "-" ?></td>
          <td><?= isset($jobpost->benefits) ? htmlspecialchars($jobpost->benefits) : "-" ?></td>
          <td><?= isset($jobpost->isActive) ? htmlspecialchars($jobpost->isActive) : "-" ?></td>
          <td><?= isset($jobpost->postedBy) ? htmlspecialchars($jobpost->postedBy) : "-" ?></td>
          <td><?= strtotime($jobpost->postedAt) ? date("d M y, H:i", strtotime($jobpost->postedAt)) : "-" ?></td>
          <td><?= strtotime($jobpost->jobpostCreatedAt) ? date("d M y, H:i", strtotime($jobpost->jobpostCreatedAt)) : "-" ?></td>
          <td><?= strtotime($jobpost->jobpostUpdatedAt) ? date("d M y, H:i", strtotime($jobpost->jobpostUpdatedAt)) : "-" ?></td>
          <td><?= isset($jobpost->jobpostIdentify) ? htmlspecialchars($jobpost->jobpostIdentify) : "-" ?></td>
          <td>
            <div class="action-menu">
              <span onclick="toggleDropdown(this)">⋯</span>
              <div class="action-dropdown">
                <a href="<?= ROOT ?>/admin/jobposts/<?= $jobpost->jobpostIdentify ?>"><i class="uil uil-eye"></i> View</a>
                <a href="<?= ROOT ?>/admin/jobposts/<?= $jobpost->jobpostIdentify ?>/edit"><i class="uil uil-edit"></i> Edit</a>
                <a href="<?= ROOT ?>/admin/jobposts/<?= $jobpost->jobpostIdentify ?>/delete"><i class="uil uil-trash-alt"></i> Delete</a>
              </div>
            </div>
          </td>
        </tr>
<?php endforeach; ?>
<?php else : ?>
<tr class="no-data-row"><td colspan="18"><div class="no-data-box"><p class="no-data-message">No jobposts found.</p><a href="<?= ROOT ?>/admin/jobposts/create" class="no-data-action"><i class="uil uil-plus-circle"></i> Create New</a></div></td></tr>
<?php endif; ?>
      </tbody>
    </table>
  </div>
<div id="truncateBar" class="truncate-bar" style="margin-top: 10px;">
  <button class="btn danger" onclick="truncateAll()"><i class="uil uil-fire"></i> Truncate All</button>
  <button class="btn danger" onclick="truncateSelected()"><i class="uil uil-trash"></i> Truncate Selected</button>
  <form id="truncateForm" method="POST" action="<?= ROOT ?>/admin/jobposts/truncate" style="display: none;"></form>
</div>
<div class="pagination-container">
  <?php if (!empty($meta)) { renderPagination($meta); } ?>
</div>
