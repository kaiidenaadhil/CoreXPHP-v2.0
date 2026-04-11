<div class="dashboard">
  <div class="top-row">
    <h2>Media Details</h2>
    <a href="<?= ROOT ?>/admin/media" class="btn secondary">Back</a>
  </div>

  <?php $medium = $params["medium"] ?? null; ?>
  <?php if ($medium): ?>
  <div class="detail-layout">
    <div class="detail-data">
      <div class="detail-row">
        <div class="detail-label">Media Id</div>
        <div class="detail-value"><?= htmlspecialchars($medium->mediaId ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Reference Type</div>
        <div class="detail-value"><?= htmlspecialchars($medium->referenceType ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Reference Id</div>
        <div class="detail-value"><?= htmlspecialchars($medium->referenceId ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">File Name</div>
        <div class="detail-value"><?= htmlspecialchars($medium->fileName ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">File Url</div>
        <div class="detail-value"><?= htmlspecialchars($medium->fileUrl ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Mime Type</div>
        <div class="detail-value"><?= htmlspecialchars($medium->mimeType ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Uploaded By</div>
        <div class="detail-value"><?= htmlspecialchars($medium->uploadedBy ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Is Main</div>
        <div class="detail-value"><?= htmlspecialchars($medium->isMain ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Description</div>
        <div class="detail-value"><?= htmlspecialchars($medium->description ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Medium Created At</div>
        <div class="detail-value"><?= strtotime($medium->mediumCreatedAt) ? date("d M y, H:i", strtotime($medium->mediumCreatedAt)) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Medium Updated At</div>
        <div class="detail-value"><?= strtotime($medium->mediumUpdatedAt) ? date("d M y, H:i", strtotime($medium->mediumUpdatedAt)) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Medium Identify</div>
        <div class="detail-value"><?= htmlspecialchars($medium->mediumIdentify ?? "-") ?></div>
      </div>
    </div>
    <div class="detail-actions">
      <a href="<?= ROOT ?>/admin/media/<?= $medium->mediumIdentify ?>/edit" class="action-btn">
        <i class="uil uil-edit"></i> Edit
      </a>
      <a href="<?= ROOT ?>/admin/media/<?= $medium->mediumIdentify ?>/delete" class="action-btn">
        <i class="uil uil-trash-alt"></i> Delete
      </a>
    </div>
  </div>
  <?php else: ?>
  <p>No data found.</p>
  <?php endif; ?>
</div>
