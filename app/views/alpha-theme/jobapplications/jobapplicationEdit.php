<div class="dashboard">
  <div class="top-row">
    <h2>Edit Jobapplications</h2>
    <a href="<?= ROOT ?>/admin/jobapplications" class="btn secondary">Back</a>
  </div>
  <?php $jobapplications = $params["jobapplication"] ?? null; ?>
  <?php if ($jobapplications): ?>
  <?php if (!empty($errors)): ?>
  <div class="alert alert-danger">
    <ul>
      <?php foreach ($errors as $error): ?>
        <li><?= htmlspecialchars($error) ?></li>
      <?php endforeach; ?>
    </ul>
  </div>
  <?php endif; ?>
  <form method="post" action="<?= ROOT ?>/admin/jobapplications/<?= $jobapplications->jobapplicationIdentify ?>/update" enctype="multipart/form-data">
    <div class="form-grid">
    <div class="form-group">
      <label for="jobId">Job Id</label>
      <input type="number" id="jobId" name="jobId" value="<?= $jobapplications->jobId ?? "" ?>" required>
    </div>
    <div class="form-group">
      <label for="fullName">Full Name</label>
      <input type="text" id="fullName" name="fullName" value="<?= $jobapplications->fullName ?? "" ?>" required>
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="text" id="email" name="email" value="<?= $jobapplications->email ?? "" ?>" required>
    </div>
    <div class="form-group">
      <label for="phone">Phone</label>
      <input type="text" id="phone" name="phone" value="<?= $jobapplications->phone ?? "" ?>" required>
    </div>
    <div class="form-group">
      <label for="resume">Resume</label>
      <input type="file" id="resume" name="resume">
    </div>
    <div class="form-group">
      <label for="coverLetter">Cover Letter</label>
      <input type="text" id="coverLetter" name="coverLetter" value="<?= $jobapplications->coverLetter ?? "" ?>" required>
    </div>
    <div class="form-group">
      <label for="applicationStatus">Application Status</label>
      <select id="applicationStatus" name="applicationStatus" required>
        <option value="Pending" <?= $jobapplications->applicationStatus == "Pending" ? "selected" : "" ?>>Pending</option>
        <option value="Reviewed" <?= $jobapplications->applicationStatus == "Reviewed" ? "selected" : "" ?>>Reviewed</option>
        <option value="Shortlisted" <?= $jobapplications->applicationStatus == "Shortlisted" ? "selected" : "" ?>>Shortlisted</option>
        <option value="Rejected" <?= $jobapplications->applicationStatus == "Rejected" ? "selected" : "" ?>>Rejected</option>
        <option value="Hired" <?= $jobapplications->applicationStatus == "Hired" ? "selected" : "" ?>>Hired</option>
      </select>
    </div>
    <div class="form-group">
      <label for="appliedAt">Applied At</label>
      <input type="datetime-local" id="appliedAt" name="appliedAt" value="<?= strtotime($jobapplications->appliedAt) ? date("Y-m-d\TH:i", strtotime($jobapplications->appliedAt)) : "" ?>" required>
    </div>
    </div>
    <div class="form-actions">
      <button type="submit" class="btn">Update</button>
      <a href="<?= ROOT ?>/admin/jobapplications" class="btn secondary">Cancel</a>
    </div>
  </form>
  <?php else: ?>
    <p class="text-danger">Record not found.</p>
  <?php endif; ?>
</div>
