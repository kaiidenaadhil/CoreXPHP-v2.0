<div class="dashboard">
  <div class="top-row">
    <h2>Jobapplications Details</h2>
    <a href="<?= ROOT ?>/admin/jobapplications" class="btn secondary">Back</a>
  </div>

  <?php $jobapplication = $params["jobapplication"] ?? null; ?>
  <?php if ($jobapplication): ?>
  <div class="detail-layout">
    <div class="detail-data">
      <div class="detail-row">
        <div class="detail-label">Application Id</div>
        <div class="detail-value"><?= htmlspecialchars($jobapplication->applicationId ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Job Id</div>
        <div class="detail-value"><?= htmlspecialchars($jobapplication->jobId ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Full Name</div>
        <div class="detail-value"><?= htmlspecialchars($jobapplication->fullName ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Email</div>
        <div class="detail-value"><?= htmlspecialchars($jobapplication->email ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Phone</div>
        <div class="detail-value"><?= htmlspecialchars($jobapplication->phone ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Resume</div>
        <div class="detail-value"><?php if (!empty(trim($jobapplication->resume))) : ?>
          <img src="<?= ASSETS ?>/img/uploads/<?= htmlspecialchars(trim($jobapplication->resume)) ?>" alt="Image" class="img-thumb-64">
        <?php else : ?> - <?php endif; ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Cover Letter</div>
        <div class="detail-value"><?= htmlspecialchars($jobapplication->coverLetter ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Application Status</div>
        <div class="detail-value"><?= htmlspecialchars($jobapplication->applicationStatus ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Applied At</div>
        <div class="detail-value"><?= strtotime($jobapplication->appliedAt) ? date("d M y, H:i", strtotime($jobapplication->appliedAt)) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Jobapplication Created At</div>
        <div class="detail-value"><?= strtotime($jobapplication->jobapplicationCreatedAt) ? date("d M y, H:i", strtotime($jobapplication->jobapplicationCreatedAt)) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Jobapplication Updated At</div>
        <div class="detail-value"><?= strtotime($jobapplication->jobapplicationUpdatedAt) ? date("d M y, H:i", strtotime($jobapplication->jobapplicationUpdatedAt)) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Jobapplication Identify</div>
        <div class="detail-value"><?= htmlspecialchars($jobapplication->jobapplicationIdentify ?? "-") ?></div>
      </div>
    </div>
    <div class="detail-actions">
      <a href="<?= ROOT ?>/admin/jobapplications/<?= $jobapplication->jobapplicationIdentify ?>/edit" class="action-btn">
        <i class="uil uil-edit"></i> Edit
      </a>
      <a href="<?= ROOT ?>/admin/jobapplications/<?= $jobapplication->jobapplicationIdentify ?>/delete" class="action-btn">
        <i class="uil uil-trash-alt"></i> Delete
      </a>
    </div>
  </div>
  <?php else: ?>
  <p>No data found.</p>
  <?php endif; ?>
</div>
