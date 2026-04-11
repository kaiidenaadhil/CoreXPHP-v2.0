<div class="dashboard">
  <div class="top-row">
    <h2>Create New Media</h2>
    <a href="<?= ROOT ?>/admin/media" class="btn secondary">Back</a>
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
  <form method="post" action="<?= ROOT ?>/admin/media/store" enctype="multipart/form-data">
    <div class="form-grid">
    <div class="form-group">
      <label for="referenceType">Reference Type</label>
      <select id="referenceType" name="referenceType" required>
        <option value="blog">Blog</option>
        <option value="caseStudy">CaseStudy</option>
        <option value="project">Project</option>
        <option value="contact">Contact</option>
        <option value="jobposts">Jobposts</option>
        <option value="userAvater">UserAvater</option>
      </select>
    </div>
    <div class="form-group">
      <label for="referenceId">Reference Id</label>
      <input type="number" id="referenceId" name="referenceId" required>
    </div>
    <div class="form-group">
      <label for="fileName">File Name</label>
      <input type="file" id="fileName" name="fileName">
    </div>
    <div class="form-group">
      <label for="fileUrl">File Url</label>
      <input type="file" id="fileUrl" name="fileUrl">
    </div>
    <div class="form-group">
      <label for="mimeType">Mime Type</label>
      <input type="text" id="mimeType" name="mimeType" required>
    </div>
    <div class="form-group">
      <label for="uploadedBy">Uploaded By</label>
      <input type="number" id="uploadedBy" name="uploadedBy" required>
    </div>
    <div class="form-group">
      <label for="isMain">Is Main</label>
      <input type="checkbox" id="isMain" name="isMain" value="1">
    </div>
    <div class="form-group">
      <label for="description">Description</label>
      <input type="text" id="description" name="description" required>
    </div>
    </div>
    <div class="form-actions">
      <button type="submit" class="btn">Create</button>
      <a href="<?= ROOT ?>/admin/media" class="btn secondary">Cancel</a>
    </div>
  </form>
</div>
