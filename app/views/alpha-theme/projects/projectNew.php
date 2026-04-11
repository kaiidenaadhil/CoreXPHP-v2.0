<div class="dashboard">
  <div class="top-row">
    <h2>Create New Projects</h2>
    <a href="<?= ROOT ?>/admin/projects" class="btn secondary">Back</a>
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
  <form method="post" action="<?= ROOT ?>/admin/projects/store" enctype="multipart/form-data">
    <div class="form-grid">
    <div class="form-group">
      <label for="userId">User Id</label>
      <input type="number" id="userId" name="userId" >
    </div>
    <div class="form-group">
      <label for="projectName">Project Name</label>
      <input type="text" id="projectName" name="projectName" >
    </div>
    <div class="form-group">
      <label for="projectType">Project Type</label>
      <input type="text" id="projectType" name="projectType" >
    </div>
    <div class="form-group">
      <label for="status">Status</label>
      <select id="status" name="status" >
        <option value="new">New</option>
        <option value="inProgress">InProgress</option>
        <option value="completed">Completed</option>
        <option value="onHold">OnHold</option>
      </select>
    </div>
    <div class="form-group">
      <label for="budget">Budget</label>
      <input type="number" id="budget" name="budget" >
    </div>
    <div class="form-group">
      <label for="progress">Progress</label>
      <input type="text" id="progress" name="progress" >
    </div>
    <div class="form-group">
      <label for="deadline">Deadline</label>
      <input type="datetime-local" id="deadline" name="deadline" >
    </div>
    <div class="form-group">
      <label for="assignedTeam">Assigned Team</label>
      <input type="text" id="assignedTeam" name="assignedTeam" >
    </div>
    </div>
    <div class="form-actions">
      <button type="submit" class="btn">Create</button>
      <a href="<?= ROOT ?>/admin/projects" class="btn secondary">Cancel</a>
    </div>
  </form>
</div>
