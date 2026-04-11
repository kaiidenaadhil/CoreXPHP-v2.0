<div class="dashboard">
  <div class="top-row">
    <h2>Create New Jobapplications</h2>
    <a href="<?= ROOT ?>/admin/jobapplications" class="btn secondary">Back</a>
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
  <form method="post" action="<?= ROOT ?>/admin/jobapplications/store" enctype="multipart/form-data">
    <div class="form-grid">
    <div class="form-group">
      <label for="jobId">Job Id</label>
      <input type="number" id="jobId" name="jobId" required>
    </div>
    <div class="form-group">
      <label for="fullName">Full Name</label>
      <input type="text" id="fullName" name="fullName" required>
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="text" id="email" name="email" required>
    </div>
    <div class="form-group">
      <label for="phone">Phone</label>
      <input type="text" id="phone" name="phone" required>
    </div>
    <div class="form-group">
      <label for="resume">Resume</label>
      <input type="file" id="resume" name="resume">
    </div>
    <div class="form-group">
      <label for="coverLetter">Cover Letter</label>
      <input type="text" id="coverLetter" name="coverLetter" required>
    </div>
    <div class="form-group">
      <label for="applicationStatus">Application Status</label>
      <select id="applicationStatus" name="applicationStatus" required>
        <option value="Pending">Pending</option>
        <option value="Reviewed">Reviewed</option>
        <option value="Shortlisted">Shortlisted</option>
        <option value="Rejected">Rejected</option>
        <option value="Hired">Hired</option>
      </select>
    </div>
    <div class="form-group">
      <label for="appliedAt">Applied At</label>
      <input type="datetime-local" id="appliedAt" name="appliedAt" required>
    </div>
    </div>
    <div class="form-actions">
      <button type="submit" class="btn">Create</button>
      <a href="<?= ROOT ?>/admin/jobapplications" class="btn secondary">Cancel</a>
    </div>
  </form>
</div>
