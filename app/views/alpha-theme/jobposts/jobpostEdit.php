<div class="dashboard">
  <div class="top-row">
    <h2>Edit Jobposts</h2>
    <a href="<?= ROOT ?>/admin/jobposts" class="btn secondary">Back</a>
  </div>
  <?php $jobposts = $params["jobpost"] ?? null; ?>
  <?php if ($jobposts): ?>
  <?php if (!empty($errors)): ?>
  <div class="alert alert-danger">
    <ul>
      <?php foreach ($errors as $error): ?>
        <li><?= htmlspecialchars($error) ?></li>
      <?php endforeach; ?>
    </ul>
  </div>
  <?php endif; ?>
  <form method="post" action="<?= ROOT ?>/admin/jobposts/<?= $jobposts->jobpostIdentify ?>/update" enctype="multipart/form-data">
    <div class="form-grid">
    <div class="form-group">
      <label for="jobTitle">Job Title</label>
      <input type="text" id="jobTitle" name="jobTitle" value="<?= $jobposts->jobTitle ?? "" ?>" >
    </div>
    <div class="form-group">
      <label for="department">Department</label>
      <input type="text" id="department" name="department" value="<?= $jobposts->department ?? "" ?>" >
    </div>
    <div class="form-group">
      <label for="location">Location</label>
      <input type="text" id="location" name="location" value="<?= $jobposts->location ?? "" ?>" >
    </div>
    <div class="form-group">
      <label for="jobType">Job Type</label>
      <select id="jobType" name="jobType" required>
        <option value="Full-time" <?= $jobposts->jobType == "Full-time" ? "selected" : "" ?>>Full-time</option>
        <option value="Part-time" <?= $jobposts->jobType == "Part-time" ? "selected" : "" ?>>Part-time</option>
        <option value="Contract" <?= $jobposts->jobType == "Contract" ? "selected" : "" ?>>Contract</option>
        <option value="Internship" <?= $jobposts->jobType == "Internship" ? "selected" : "" ?>>Internship</option>
      </select>
    </div>
    <div class="form-group">
      <label for="salaryRange">Salary Range</label>
      <input type="text" id="salaryRange" name="salaryRange" value="<?= $jobposts->salaryRange ?? "" ?>" >
    </div>
    <div class="form-group">
      <label for="requirements">Requirements</label>
      <input type="text" id="requirements" name="requirements" value="<?= $jobposts->requirements ?? "" ?>" >
    </div>
    <div class="form-group">
      <label for="responsibilities">Responsibilities</label>
      <input type="text" id="responsibilities" name="responsibilities" value="<?= $jobposts->responsibilities ?? "" ?>" >
    </div>
    <div class="form-group">
      <label for="benefits">Benefits</label>
      <input type="text" id="benefits" name="benefits" value="<?= $jobposts->benefits ?? "" ?>" >
    </div>
    <div class="form-group">
      <label for="isActive">Is Active</label>
      <input type="checkbox" id="isActive" name="isActive" value="1" <?= $jobposts->isActive ? "checked" : "" ?>>
    </div>
    <div class="form-group">
      <label for="postedBy">Posted By</label>
      <input type="number" id="postedBy" name="postedBy" value="<?= $jobposts->postedBy ?? "" ?>" required>
    </div>
    <div class="form-group">
      <label for="postedAt">Posted At</label>
      <input type="datetime-local" id="postedAt" name="postedAt" value="<?= strtotime($jobposts->postedAt) ? date("Y-m-d\TH:i", strtotime($jobposts->postedAt)) : "" ?>" required>
    </div>
    </div>
    <div class="form-actions">
      <button type="submit" class="btn">Update</button>
      <a href="<?= ROOT ?>/admin/jobposts" class="btn secondary">Cancel</a>
    </div>
  </form>
  <?php else: ?>
    <p class="text-danger">Record not found.</p>
  <?php endif; ?>
</div>
