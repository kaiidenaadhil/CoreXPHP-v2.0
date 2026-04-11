<div class="dashboard">
  <div class="top-row">
    <h2>Tests Details</h2>
    <a href="<?= ROOT ?>/admin/tests" class="btn secondary">Back</a>
  </div>

  <?php $test = $params["test"] ?? null; ?>
  <?php if ($test): ?>
  <div class="detail-layout">
    <div class="detail-data">
      <div class="detail-row">
        <div class="detail-label">Test Id</div>
        <div class="detail-value"><?= htmlspecialchars($test->testId ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Test String</div>
        <div class="detail-value"><?= htmlspecialchars($test->testString ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Test Timestamp</div>
        <div class="detail-value"><?= strtotime($test->testTimestamp) ? date("d M y, H:i", strtotime($test->testTimestamp)) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Test Enum</div>
        <div class="detail-value"><?= htmlspecialchars($test->testEnum ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Test Boolean</div>
        <div class="detail-value"><?= htmlspecialchars($test->testBoolean ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Test Float</div>
        <div class="detail-value"><?= htmlspecialchars($test->testFloat ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Test Decimal</div>
        <div class="detail-value"><?= isset($test->testDecimal) ? "$" . number_format($test->testDecimal, 2) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Test Double</div>
        <div class="detail-value"><?= htmlspecialchars($test->testDouble ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Test J S O N</div>
        <div class="detail-value"><?= htmlspecialchars($test->testJSON ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Test File</div>
        <div class="detail-value"><?php if (!empty(trim($test->testFile))) : ?>
          <img src="<?= ASSETS ?>/img/uploads/<?= htmlspecialchars(trim($test->testFile)) ?>" alt="Image" class="img-thumb-64">
        <?php else : ?> - <?php endif; ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Test Foreign Key</div>
        <div class="detail-value"><?= htmlspecialchars($test->testForeignKey ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Test Created At</div>
        <div class="detail-value"><?= strtotime($test->testCreatedAt) ? date("d M y, H:i", strtotime($test->testCreatedAt)) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Test Updated At</div>
        <div class="detail-value"><?= strtotime($test->testUpdatedAt) ? date("d M y, H:i", strtotime($test->testUpdatedAt)) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Test Identify</div>
        <div class="detail-value"><?= htmlspecialchars($test->testIdentify ?? "-") ?></div>
      </div>
    </div>
    <div class="detail-actions">
      <a href="<?= ROOT ?>/admin/tests/<?= $test->testIdentify ?>/edit" class="action-btn">
        <i class="uil uil-edit"></i> Edit
      </a>
      <a href="<?= ROOT ?>/admin/tests/<?= $test->testIdentify ?>/delete" class="action-btn">
        <i class="uil uil-trash-alt"></i> Delete
      </a>
    </div>
  </div>
  <?php else: ?>
  <p>No data found.</p>
  <?php endif; ?>
</div>
