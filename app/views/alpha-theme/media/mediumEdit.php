<div class="dashboard">
  <div class="top-row">
    <h2>Edit Media</h2>
    <a href="<?= ROOT ?>/admin/media" class="btn secondary">Back</a>
  </div>
  <?php $media = $params["medium"] ?? null; ?>
  <?php if ($media): ?>
  <?php if (!empty($errors)): ?>
  <div class="alert alert-danger">
    <ul>
      <?php foreach ($errors as $error): ?>
        <li><?= htmlspecialchars($error) ?></li>
      <?php endforeach; ?>
    </ul>
  </div>
  <?php endif; ?>
  <form method="post" action="<?= ROOT ?>/admin/media/<?= $media->mediumIdentify ?>/update" enctype="multipart/form-data">
    <div class="form-grid">
    <div class="form-group">
      <label for="referenceType">Reference Type</label>
      <select id="referenceType" name="referenceType" required>
        <option value="blog" <?= $media->referenceType == "blog" ? "selected" : "" ?>>Blog</option>
        <option value="caseStudy" <?= $media->referenceType == "caseStudy" ? "selected" : "" ?>>CaseStudy</option>
        <option value="project" <?= $media->referenceType == "project" ? "selected" : "" ?>>Project</option>
        <option value="contact" <?= $media->referenceType == "contact" ? "selected" : "" ?>>Contact</option>
        <option value="jobposts" <?= $media->referenceType == "jobposts" ? "selected" : "" ?>>Jobposts</option>
        <option value="userAvater" <?= $media->referenceType == "userAvater" ? "selected" : "" ?>>UserAvater</option>
      </select>
    </div>
    <div class="form-group">
      <label for="referenceId">Reference Id</label>
      <input type="number" id="referenceId" name="referenceId" value="<?= $media->referenceId ?? "" ?>" required>
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
      <input type="text" id="mimeType" name="mimeType" value="<?= $media->mimeType ?? "" ?>" required>
    </div>
    <div class="form-group">
      <label for="uploadedBy">Uploaded By</label>
      <input type="number" id="uploadedBy" name="uploadedBy" value="<?= $media->uploadedBy ?? "" ?>" required>
    </div>
    <div class="form-group">
      <label for="isMain">Is Main</label>
      <input type="checkbox" id="isMain" name="isMain" value="1" <?= $media->isMain ? "checked" : "" ?>>
    </div>
    <div class="form-group">
      <label for="description">Description</label>
      <input type="text" id="description" name="description" value="<?= $media->description ?? "" ?>" required>
    </div>
    </div>
    <div class="form-actions">
      <button type="submit" class="btn">Update</button>
      <a href="<?= ROOT ?>/admin/media" class="btn secondary">Cancel</a>
    </div>
  </form>
  <?php else: ?>
    <p class="text-danger">Record not found.</p>
  <?php endif; ?>
</div>
