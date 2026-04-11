<div class="dashboard">
  <div class="top-row">
    <h2>Jobapplications</h2>
    <div class="action-buttons">
      <button class="btn" onclick="window.location='<?= ROOT ?>/admin/jobapplications/create'"><i class="uil uil-plus-circle"></i> Create</button>
      <button class="btn secondary" onclick="window.location='<?= ROOT ?>/admin/jobapplications/export'"><i class="uil uil-export"></i> Export</button>
      <button class="btn secondary" onclick="document.getElementById('importFile').click();"><i class="uil uil-import"></i> Import</button>
      <form action="<?= ROOT ?>/admin/jobapplications/import" method="post" enctype="multipart/form-data" style="display: none;">
        <input type="file" name="file" id="importFile" onchange="this.form.submit()" />
      </form>
    </div>
  </div>
<div class="filter-sort-row">
<form method="GET" id="filterSortForm" class="filter-sort-form" onchange="this.submit()">
  <label for="filter_applicationStatus">ApplicationStatus:</label>
  <select name="filter_applicationStatus" id="filter_applicationStatus" class="filter-select">
    <option value="">All</option>
    <option value="Pending" <?= ($_GET["filter_applicationStatus"] ?? "") === "Pending" ? "selected" : "" ?>>Pending</option>
    <option value="Reviewed" <?= ($_GET["filter_applicationStatus"] ?? "") === "Reviewed" ? "selected" : "" ?>>Reviewed</option>
    <option value="Shortlisted" <?= ($_GET["filter_applicationStatus"] ?? "") === "Shortlisted" ? "selected" : "" ?>>Shortlisted</option>
    <option value="Rejected" <?= ($_GET["filter_applicationStatus"] ?? "") === "Rejected" ? "selected" : "" ?>>Rejected</option>
    <option value="Hired" <?= ($_GET["filter_applicationStatus"] ?? "") === "Hired" ? "selected" : "" ?>>Hired</option>
  </select>
  <label for="sort_jobapplicationCreatedAt">Sort:</label>
  <select name="sort_jobapplicationCreatedAt" id="sort_jobapplicationCreatedAt" class="sort-select">
    <option value="">Clear</option>
    <option value="asc" <?= ($_GET["sort_jobapplicationCreatedAt"] ?? "") === "asc" ? "selected" : "" ?>>Title A–Z</option>
    <option value="desc" <?= ($_GET["sort_jobapplicationCreatedAt"] ?? "") === "desc" ? "selected" : "" ?>>Title Z–A</option>
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
          <th>Application Id</th>
          <th>Job Id</th>
          <th>Full Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Resume</th>
          <th>Cover Letter</th>
          <th>Application Status</th>
          <th>Applied At</th>
          <th>Jobapplication Created At</th>
          <th>Jobapplication Updated At</th>
          <th>Jobapplication Identify</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody id="tableBody">
<?php if (!empty($jobapplications)) : ?>
<?php foreach ($jobapplications as $index => $jobapplication) : ?>
        <tr>
          <td><input type="checkbox" class="row-check" name="selectedIds[]" value="<?= $jobapplication->jobapplicationIdentify ?>" onchange="toggleTruncateBar()"></td>
          <td><?= $index + 1 ?></td>
          <td><?= isset($jobapplication->applicationId) ? htmlspecialchars($jobapplication->applicationId) : "-" ?></td>
          <td><?= isset($jobapplication->jobId) ? htmlspecialchars($jobapplication->jobId) : "-" ?></td>
          <td><?= isset($jobapplication->fullName) ? htmlspecialchars($jobapplication->fullName) : "-" ?></td>
          <td><?= isset($jobapplication->email) ? htmlspecialchars($jobapplication->email) : "-" ?></td>
          <td><?= isset($jobapplication->phone) ? htmlspecialchars($jobapplication->phone) : "-" ?></td>
          <td>
            <?php if (!empty($jobapplication->resume)) : ?>
              <a href="<?= ASSETS ?>/img/uploads/<?= $jobapplication->resume ?>" target="_blank">View</a>
            <?php else : ?> - <?php endif; ?>
          </td>
          <td><?= isset($jobapplication->coverLetter) ? htmlspecialchars($jobapplication->coverLetter) : "-" ?></td>
          <td><?= isset($jobapplication->applicationStatus) ? htmlspecialchars($jobapplication->applicationStatus) : "-" ?></td>
          <td><?= strtotime($jobapplication->appliedAt) ? date("d M y, H:i", strtotime($jobapplication->appliedAt)) : "-" ?></td>
          <td><?= strtotime($jobapplication->jobapplicationCreatedAt) ? date("d M y, H:i", strtotime($jobapplication->jobapplicationCreatedAt)) : "-" ?></td>
          <td><?= strtotime($jobapplication->jobapplicationUpdatedAt) ? date("d M y, H:i", strtotime($jobapplication->jobapplicationUpdatedAt)) : "-" ?></td>
          <td><?= isset($jobapplication->jobapplicationIdentify) ? htmlspecialchars($jobapplication->jobapplicationIdentify) : "-" ?></td>
          <td>
            <div class="action-menu">
              <span onclick="toggleDropdown(this)">⋯</span>
              <div class="action-dropdown">
                <a href="<?= ROOT ?>/admin/jobapplications/<?= $jobapplication->jobapplicationIdentify ?>"><i class="uil uil-eye"></i> View</a>
                <a href="<?= ROOT ?>/admin/jobapplications/<?= $jobapplication->jobapplicationIdentify ?>/edit"><i class="uil uil-edit"></i> Edit</a>
                <a href="<?= ROOT ?>/admin/jobapplications/<?= $jobapplication->jobapplicationIdentify ?>/delete"><i class="uil uil-trash-alt"></i> Delete</a>
              </div>
            </div>
          </td>
        </tr>
<?php endforeach; ?>
<?php else : ?>
<tr class="no-data-row"><td colspan="15"><div class="no-data-box"><p class="no-data-message">No jobapplications found.</p><a href="<?= ROOT ?>/admin/jobapplications/create" class="no-data-action"><i class="uil uil-plus-circle"></i> Create New</a></div></td></tr>
<?php endif; ?>
      </tbody>
    </table>
  </div>
<div id="truncateBar" class="truncate-bar" style="margin-top: 10px;">
  <button class="btn danger" onclick="truncateAll()"><i class="uil uil-fire"></i> Truncate All</button>
  <button class="btn danger" onclick="truncateSelected()"><i class="uil uil-trash"></i> Truncate Selected</button>
  <form id="truncateForm" method="POST" action="<?= ROOT ?>/admin/jobapplications/truncate" style="display: none;"></form>
</div>
<div class="pagination-container">
  <?php if (!empty($meta)) { renderPagination($meta); } ?>
</div>
