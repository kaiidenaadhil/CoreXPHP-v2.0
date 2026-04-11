<div class="dashboard">
  <div class="top-row">
    <h2>Edit Projects</h2>
    <a href="<?= ROOT ?>/admin/projects" class="btn secondary">Back</a>
  </div>
  <?php $projects = $params["project"] ?? null; ?>
  <?php if ($projects): ?>
  <?php if (!empty($errors)): ?>
  <div class="alert alert-danger">
    <ul>
      <?php foreach ($errors as $error): ?>
        <li><?= htmlspecialchars($error) ?></li>
      <?php endforeach; ?>
    </ul>
  </div>
  <?php endif; ?>
  <form method="post" action="<?= ROOT ?>/admin/projects/<?= $projects->projectIdentify ?>/update" enctype="multipart/form-data">
    <div class="form-grid">
    <div class="form-group">
      <label for="userId">User Id</label>
      <input type="number" id="userId" name="userId" value="<?= $projects->userId ?? "" ?>" >
    </div>
    <div class="form-group">
      <label for="projectName">Project Name</label>
      <input type="text" id="projectName" name="projectName" value="<?= $projects->projectName ?? "" ?>" >
    </div>
    <div class="form-group">
      <label for="projectType">Project Type</label>
      <input type="text" id="projectType" name="projectType" value="<?= $projects->projectType ?? "" ?>" >
    </div>
    <div class="form-group">
      <label for="status">Status</label>
      <select id="status" name="status" >
        <option value="new" <?= $projects->status == "new" ? "selected" : "" ?>>New</option>
        <option value="inProgress" <?= $projects->status == "inProgress" ? "selected" : "" ?>>InProgress</option>
        <option value="completed" <?= $projects->status == "completed" ? "selected" : "" ?>>Completed</option>
        <option value="onHold" <?= $projects->status == "onHold" ? "selected" : "" ?>>OnHold</option>
      </select>
    </div>
    <div class="form-group">
      <label for="budget">Budget</label>
      <input type="number" id="budget" name="budget" value="<?= $projects->budget ?? "" ?>" >
    </div>
    <div class="form-group">
      <label for="progress">Progress</label>
      <input type="text" id="progress" name="progress" value="<?= $projects->progress ?? "" ?>" >
    </div>
    <div class="form-group">
      <label for="deadline">Deadline</label>
      <input type="datetime-local" id="deadline" name="deadline" value="<?= strtotime($projects->deadline) ? date("Y-m-d\TH:i", strtotime($projects->deadline)) : "" ?>" >
    </div>
    <div class="form-group">
      <label for="assignedTeam">Assigned Team</label>
      <input type="text" id="assignedTeam" name="assignedTeam" value="<?= $projects->assignedTeam ?? "" ?>" >
    </div>
    </div>
    <div class="form-actions">
      <button type="submit" class="btn">Update</button>
      <a href="<?= ROOT ?>/admin/projects" class="btn secondary">Cancel</a>
    </div>
  </form>
  <?php else: ?>
    <p class="text-danger">Record not found.</p>
  <?php endif; ?>
</div>
