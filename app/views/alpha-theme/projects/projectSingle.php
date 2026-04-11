<div class="dashboard">
  <div class="top-row">
    <h2>Projects Details</h2>
    <a href="<?= ROOT ?>/admin/projects" class="btn secondary">Back</a>
  </div>

  <?php $project = $params["project"] ?? null; ?>
  <?php if ($project): ?>
  <div class="detail-layout">
    <div class="detail-data">
      <div class="detail-row">
        <div class="detail-label">Project Id</div>
        <div class="detail-value"><?= htmlspecialchars($project->projectId ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">User Id</div>
        <div class="detail-value"><?= htmlspecialchars($project->userId ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Project Name</div>
        <div class="detail-value"><?= htmlspecialchars($project->projectName ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Project Type</div>
        <div class="detail-value"><?= htmlspecialchars($project->projectType ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Status</div>
        <div class="detail-value"><?= htmlspecialchars($project->status ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Budget</div>
        <div class="detail-value"><?= htmlspecialchars($project->budget ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Progress</div>
        <div class="detail-value"><?= htmlspecialchars($project->progress ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Deadline</div>
        <div class="detail-value"><?= strtotime($project->deadline) ? date("d M y, H:i", strtotime($project->deadline)) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Assigned Team</div>
        <div class="detail-value"><?= htmlspecialchars($project->assignedTeam ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Project Created At</div>
        <div class="detail-value"><?= strtotime($project->projectCreatedAt) ? date("d M y, H:i", strtotime($project->projectCreatedAt)) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Project Updated At</div>
        <div class="detail-value"><?= strtotime($project->projectUpdatedAt) ? date("d M y, H:i", strtotime($project->projectUpdatedAt)) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Project Identify</div>
        <div class="detail-value"><?= htmlspecialchars($project->projectIdentify ?? "-") ?></div>
      </div>
    </div>
    <div class="detail-actions">
      <a href="<?= ROOT ?>/admin/projects/<?= $project->projectIdentify ?>/edit" class="action-btn">
        <i class="uil uil-edit"></i> Edit
      </a>
      <a href="<?= ROOT ?>/admin/projects/<?= $project->projectIdentify ?>/delete" class="action-btn">
        <i class="uil uil-trash-alt"></i> Delete
      </a>
    </div>
  </div>
  <?php else: ?>
  <p>No data found.</p>
  <?php endif; ?>
</div>
