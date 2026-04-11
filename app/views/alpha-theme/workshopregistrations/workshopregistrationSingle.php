<div class="dashboard">
  <div class="top-row">
    <h2>Workshopregistrations Details</h2>
    <a href="<?= ROOT ?>/admin/workshopregistrations" class="btn secondary">Back</a>
  </div>

  <?php $workshopregistration = $params["workshopregistration"] ?? null; ?>
  <?php if ($workshopregistration): ?>
  <div class="detail-layout">
    <div class="detail-data">
      <div class="detail-row">
        <div class="detail-label">Registration Id</div>
        <div class="detail-value"><?= htmlspecialchars($workshopregistration->registrationId ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Workshop Id</div>
        <div class="detail-value"><?= htmlspecialchars($workshopregistration->workshopId ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Full Name</div>
        <div class="detail-value"><?= htmlspecialchars($workshopregistration->fullName ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Email</div>
        <div class="detail-value"><?= htmlspecialchars($workshopregistration->email ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Phone</div>
        <div class="detail-value"><?= htmlspecialchars($workshopregistration->phone ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Ticket Type</div>
        <div class="detail-value"><?= htmlspecialchars($workshopregistration->ticketType ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Payment Status</div>
        <div class="detail-value"><?= htmlspecialchars($workshopregistration->paymentStatus ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Registered At</div>
        <div class="detail-value"><?= strtotime($workshopregistration->registeredAt) ? date("d M y, H:i", strtotime($workshopregistration->registeredAt)) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Workshopregistration Created At</div>
        <div class="detail-value"><?= strtotime($workshopregistration->workshopregistrationCreatedAt) ? date("d M y, H:i", strtotime($workshopregistration->workshopregistrationCreatedAt)) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Workshopregistration Updated At</div>
        <div class="detail-value"><?= strtotime($workshopregistration->workshopregistrationUpdatedAt) ? date("d M y, H:i", strtotime($workshopregistration->workshopregistrationUpdatedAt)) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Workshopregistration Identify</div>
        <div class="detail-value"><?= htmlspecialchars($workshopregistration->workshopregistrationIdentify ?? "-") ?></div>
      </div>
    </div>
    <div class="detail-actions">
      <a href="<?= ROOT ?>/admin/workshopregistrations/<?= $workshopregistration->workshopregistrationIdentify ?>/edit" class="action-btn">
        <i class="uil uil-edit"></i> Edit
      </a>
      <a href="<?= ROOT ?>/admin/workshopregistrations/<?= $workshopregistration->workshopregistrationIdentify ?>/delete" class="action-btn">
        <i class="uil uil-trash-alt"></i> Delete
      </a>
    </div>
  </div>
  <?php else: ?>
  <p>No data found.</p>
  <?php endif; ?>
</div>
