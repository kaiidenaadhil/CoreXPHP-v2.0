<div class="dashboard">
  <div class="top-row">
    <h2>Workshops Details</h2>
    <a href="<?= ROOT ?>/admin/workshops" class="btn secondary">Back</a>
  </div>

  <?php $workshop = $params["workshop"] ?? null; ?>
  <?php if ($workshop): ?>
  <div class="detail-layout">
    <div class="detail-data">
      <div class="detail-row">
        <div class="detail-label">Workshop Id</div>
        <div class="detail-value"><?= htmlspecialchars($workshop->workshopId ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Title</div>
        <div class="detail-value"><?= htmlspecialchars($workshop->title ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Category</div>
        <div class="detail-value"><?= htmlspecialchars($workshop->category ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Location</div>
        <div class="detail-value"><?= htmlspecialchars($workshop->location ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Workshop Type</div>
        <div class="detail-value"><?= htmlspecialchars($workshop->workshopType ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Start Date</div>
        <div class="detail-value"><?= strtotime($workshop->startDate) ? date("d M y, H:i", strtotime($workshop->startDate)) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">End Date</div>
        <div class="detail-value"><?= strtotime($workshop->endDate) ? date("d M y, H:i", strtotime($workshop->endDate)) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Description</div>
        <div class="detail-value"><?= htmlspecialchars($workshop->description ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Price</div>
        <div class="detail-value"><?= htmlspecialchars($workshop->price ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Max Seats</div>
        <div class="detail-value"><?= htmlspecialchars($workshop->maxSeats ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Is Active</div>
        <div class="detail-value"><?= htmlspecialchars($workshop->isActive ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Workshop Created At</div>
        <div class="detail-value"><?= strtotime($workshop->workshopCreatedAt) ? date("d M y, H:i", strtotime($workshop->workshopCreatedAt)) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Workshop Updated At</div>
        <div class="detail-value"><?= strtotime($workshop->workshopUpdatedAt) ? date("d M y, H:i", strtotime($workshop->workshopUpdatedAt)) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Workshop Identify</div>
        <div class="detail-value"><?= htmlspecialchars($workshop->workshopIdentify ?? "-") ?></div>
      </div>
    </div>
    <div class="detail-actions">
      <a href="<?= ROOT ?>/admin/workshops/<?= $workshop->workshopIdentify ?>/edit" class="action-btn">
        <i class="uil uil-edit"></i> Edit
      </a>
      <a href="<?= ROOT ?>/admin/workshops/<?= $workshop->workshopIdentify ?>/delete" class="action-btn">
        <i class="uil uil-trash-alt"></i> Delete
      </a>
    </div>
  </div>
  <?php else: ?>
  <p>No data found.</p>
  <?php endif; ?>
</div>
