<div class="dashboard">
  <div class="top-row">
    <h2>Create New Users</h2>
    <a href="<?= ROOT ?>/admin/users" class="btn secondary">Back</a>
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
  <form method="post" action="<?= ROOT ?>/admin/users/store" enctype="multipart/form-data">
    <div class="form-grid">
    <div class="form-group">
      <label for="userAltName">User Alt Name</label>
      <input type="text" id="userAltName" name="userAltName" >
    </div>
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" id="name" name="name" >
    </div>
    <div class="form-group">
      <label for="userEmail">User Email</label>
      <input type="text" id="userEmail" name="userEmail" required>
    </div>
    <div class="form-group">
      <label for="passwordHash">Password Hash</label>
      <input type="text" id="passwordHash" name="passwordHash" >
    </div>
    <div class="form-group">
      <label for="userRole">User Role</label>
      <select id="userRole" name="userRole" >
        <option value="admin">Admin</option>
        <option value="client">Client</option>
        <option value="manager">Manager</option>
      </select>
    </div>
    <div class="form-group">
      <label for="permissions">Permissions</label>
      <input type="text" id="permissions" name="permissions" >
    </div>
    </div>
    <div class="form-actions">
      <button type="submit" class="btn">Create</button>
      <a href="<?= ROOT ?>/admin/users" class="btn secondary">Cancel</a>
    </div>
  </form>
</div>
