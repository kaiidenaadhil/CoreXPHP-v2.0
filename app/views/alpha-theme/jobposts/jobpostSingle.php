<div class="dashboard">
  <div class="top-row">
    <h2>Jobposts Details</h2>
    <a href="<?= ROOT ?>/admin/jobposts" class="btn secondary">Back</a>
  </div>

  <?php $jobpost = $params["jobpost"] ?? null; ?>
  <?php if ($jobpost): ?>
  <div class="detail-layout">
    <div class="detail-data">
      <div class="detail-row">
        <div class="detail-label">Job Id</div>
        <div class="detail-value"><?= htmlspecialchars($jobpost->jobId ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Job Title</div>
        <div class="detail-value"><?= htmlspecialchars($jobpost->jobTitle ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Department</div>
        <div class="detail-value"><?= htmlspecialchars($jobpost->department ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Location</div>
        <div class="detail-value"><?= htmlspecialchars($jobpost->location ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Job Type</div>
        <div class="detail-value"><?= htmlspecialchars($jobpost->jobType ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Salary Range</div>
        <div class="detail-value"><?= htmlspecialchars($jobpost->salaryRange ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Requirements</div>
        <div class="detail-value"><?= htmlspecialchars($jobpost->requirements ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Responsibilities</div>
        <div class="detail-value"><?= htmlspecialchars($jobpost->responsibilities ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Benefits</div>
        <div class="detail-value"><?= htmlspecialchars($jobpost->benefits ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Is Active</div>
        <div class="detail-value"><?= htmlspecialchars($jobpost->isActive ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Posted By</div>
        <div class="detail-value"><?= htmlspecialchars($jobpost->postedBy ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Posted At</div>
        <div class="detail-value"><?= strtotime($jobpost->postedAt) ? date("d M y, H:i", strtotime($jobpost->postedAt)) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Jobpost Created At</div>
        <div class="detail-value"><?= strtotime($jobpost->jobpostCreatedAt) ? date("d M y, H:i", strtotime($jobpost->jobpostCreatedAt)) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Jobpost Updated At</div>
        <div class="detail-value"><?= strtotime($jobpost->jobpostUpdatedAt) ? date("d M y, H:i", strtotime($jobpost->jobpostUpdatedAt)) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Jobpost Identify</div>
        <div class="detail-value"><?= htmlspecialchars($jobpost->jobpostIdentify ?? "-") ?></div>
      </div>
    </div>
    <div class="detail-actions">
      <a href="<?= ROOT ?>/admin/jobposts/<?= $jobpost->jobpostIdentify ?>/edit" class="action-btn">
        <i class="uil uil-edit"></i> Edit
      </a>
      <a href="<?= ROOT ?>/admin/jobposts/<?= $jobpost->jobpostIdentify ?>/delete" class="action-btn">
        <i class="uil uil-trash-alt"></i> Delete
      </a>
    </div>
  </div>
  <?php else: ?>
  <p>No data found.</p>
  <?php endif; ?>
</div>
