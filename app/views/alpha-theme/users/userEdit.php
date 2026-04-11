<div class="dashboard">
  <div class="top-row">
    <h2>Edit Users</h2>
    <a href="<?= ROOT ?>/admin/users" class="btn secondary">Back</a>
  </div>
  <?php $users = $params["user"] ?? null; ?>
  <?php if ($users): ?>
  <?php if (!empty($errors)): ?>
  <div class="alert alert-danger">
    <ul>
      <?php foreach ($errors as $error): ?>
        <li><?= htmlspecialchars($error) ?></li>
      <?php endforeach; ?>
    </ul>
  </div>
  <?php endif; ?>
  <form method="post" action="<?= ROOT ?>/admin/users/<?= $users->userIdentify ?>/update" enctype="multipart/form-data">
    <div class="form-grid">
    <div class="form-group">
      <label for="userAltName">User Alt Name</label>
      <input type="text" id="userAltName" name="userAltName" value="<?= $users->userAltName ?? "" ?>" >
    </div>
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" id="name" name="name" value="<?= $users->name ?? "" ?>" >
    </div>
    <div class="form-group">
      <label for="userEmail">User Email</label>
      <input type="text" id="userEmail" name="userEmail" value="<?= $users->userEmail ?? "" ?>" required>
    </div>
    <div class="form-group">
      <label for="passwordHash">Password Hash</label>
      <input type="text" id="passwordHash" name="passwordHash" value="<?= $users->passwordHash ?? "" ?>" >
    </div>
    <div class="form-group">
      <label for="userRole">User Role</label>
      <select id="userRole" name="userRole" >
        <option value="admin" <?= $users->userRole == "admin" ? "selected" : "" ?>>Admin</option>
        <option value="client" <?= $users->userRole == "client" ? "selected" : "" ?>>Client</option>
        <option value="manager" <?= $users->userRole == "manager" ? "selected" : "" ?>>Manager</option>
      </select>
    </div>
    <div class="form-group">
      <label for="permissions">Permissions</label>
      <input type="text" id="permissions" name="permissions" value="<?= $users->permissions ?? "" ?>" >
    </div>
    </div>
    <div class="form-actions">
      <button type="submit" class="btn">Update</button>
      <a href="<?= ROOT ?>/admin/users" class="btn secondary">Cancel</a>
    </div>
  </form>
  <?php else: ?>
    <p class="text-danger">Record not found.</p>
  <?php endif; ?>
</div>
