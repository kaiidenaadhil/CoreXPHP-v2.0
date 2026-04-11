<div class="dashboard">
  <div class="top-row">
    <h2>Create New Jobposts</h2>
    <a href="<?= ROOT ?>/admin/jobposts" class="btn secondary">Back</a>
  </div>
  <?php if (!empty($errors)): ?>
  <div class="alert alert-danger">
    <ul>
      <?php foreach ($errors as $error): ?>
        <li><?= htmlspecialchars($error) ?></li>
      <?php endforeach; ?>
    </ul>
  </div>
  <?php endif; ?>
  <form method="post" action="<?= ROOT ?>/admin/jobposts/store" enctype="multipart/form-data">
    <div class="form-grid">
    <div class="form-group">
      <label for="jobTitle">Job Title</label>
      <input type="text" id="jobTitle" name="jobTitle" >
    </div>
    <div class="form-group">
      <label for="department">Department</label>
      <input type="text" id="department" name="department" >
    </div>
    <div class="form-group">
      <label for="location">Location</label>
      <input type="text" id="location" name="location" >
    </div>
    <div class="form-group">
      <label for="jobType">Job Type</label>
      <select id="jobType" name="jobType" required>
        <option value="Full-time">Full-time</option>
        <option value="Part-time">Part-time</option>
        <option value="Contract">Contract</option>
        <option value="Internship">Internship</option>
      </select>
    </div>
    <div class="form-group">
      <label for="salaryRange">Salary Range</label>
      <input type="text" id="salaryRange" name="salaryRange" >
    </div>
    <div class="form-group">
      <label for="requirements">Requirements</label>
      <input type="text" id="requirements" name="requirements" >
    </div>
    <div class="form-group">
      <label for="responsibilities">Responsibilities</label>
      <input type="text" id="responsibilities" name="responsibilities" >
    </div>
    <div class="form-group">
      <label for="benefits">Benefits</label>
      <input type="text" id="benefits" name="benefits" >
    </div>
    <div class="form-group">
      <label for="isActive">Is Active</label>
      <input type="checkbox" id="isActive" name="isActive" value="1">
    </div>
    <div class="form-group">
      <label for="postedBy">Posted By</label>
      <input type="number" id="postedBy" name="postedBy" required>
    </div>
    <div class="form-group">
      <label for="postedAt">Posted At</label>
      <input type="datetime-local" id="postedAt" name="postedAt" required>
    </div>
    </div>
    <div class="form-actions">
      <button type="submit" class="btn">Create</button>
      <a href="<?= ROOT ?>/admin/jobposts" class="btn secondary">Cancel</a>
    </div>
  </form>
</div>
