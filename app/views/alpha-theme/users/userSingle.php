<div class="dashboard">
  <div class="top-row">
    <h2>Users Details</h2>
    <a href="<?= ROOT ?>/admin/users" class="btn secondary">Back</a>
  </div>

  <?php $user = $params["user"] ?? null; ?>
  <?php if ($user): ?>
  <div class="detail-layout">
    <div class="detail-data">
      <div class="detail-row">
        <div class="detail-label">User Id</div>
        <div class="detail-value"><?= htmlspecialchars($user->userId ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">User Alt Name</div>
        <div class="detail-value"><?= htmlspecialchars($user->userAltName ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Name</div>
        <div class="detail-value"><?= htmlspecialchars($user->name ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">User Email</div>
        <div class="detail-value"><?= htmlspecialchars($user->userEmail ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Password Hash</div>
        <div class="detail-value"><?= htmlspecialchars($user->passwordHash ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">User Role</div>
        <div class="detail-value"><?= htmlspecialchars($user->userRole ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Permissions</div>
        <div class="detail-value"><?= htmlspecialchars($user->permissions ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">User Created At</div>
        <div class="detail-value"><?= strtotime($user->userCreatedAt) ? date("d M y, H:i", strtotime($user->userCreatedAt)) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">User Updated At</div>
        <div class="detail-value"><?= strtotime($user->userUpdatedAt) ? date("d M y, H:i", strtotime($user->userUpdatedAt)) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">User Identify</div>
        <div class="detail-value"><?= htmlspecialchars($user->userIdentify ?? "-") ?></div>
      </div>
    </div>
    <div class="detail-actions">
      <a href="<?= ROOT ?>/admin/users/<?= $user->userIdentify ?>/edit" class="action-btn">
        <i class="uil uil-edit"></i> Edit
      </a>
      <a href="<?= ROOT ?>/admin/users/<?= $user->userIdentify ?>/delete" class="action-btn">
        <i class="uil uil-trash-alt"></i> Delete
      </a>
    </div>
  </div>
  <?php else: ?>
  <p>No data found.</p>
  <?php endif; ?>
</div>
