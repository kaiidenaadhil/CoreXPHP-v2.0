<div class="dashboard">
  <div class="top-row">
    <h2>Contacts Details</h2>
    <a href="<?= ROOT ?>/admin/contacts" class="btn secondary">Back</a>
  </div>

  <?php $contact = $params["contact"] ?? null; ?>
  <?php if ($contact): ?>
  <div class="detail-layout">
    <div class="detail-data">
      <div class="detail-row">
        <div class="detail-label">Contact Id</div>
        <div class="detail-value"><?= htmlspecialchars($contact->contactId ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Full Name</div>
        <div class="detail-value"><?= htmlspecialchars($contact->fullName ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Email</div>
        <div class="detail-value"><?= htmlspecialchars($contact->email ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Phone</div>
        <div class="detail-value"><?= htmlspecialchars($contact->phone ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Subject</div>
        <div class="detail-value"><?= htmlspecialchars($contact->subject ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Message</div>
        <div class="detail-value"><?= htmlspecialchars($contact->message ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Source</div>
        <div class="detail-value"><?= htmlspecialchars($contact->source ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Ip Address</div>
        <div class="detail-value"><?= htmlspecialchars($contact->ipAddress ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">User Agent</div>
        <div class="detail-value"><?= htmlspecialchars($contact->userAgent ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Is Read</div>
        <div class="detail-value"><?= htmlspecialchars($contact->isRead ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Received At</div>
        <div class="detail-value"><?= strtotime($contact->receivedAt) ? date("d M y, H:i", strtotime($contact->receivedAt)) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Contact Created At</div>
        <div class="detail-value"><?= strtotime($contact->contactCreatedAt) ? date("d M y, H:i", strtotime($contact->contactCreatedAt)) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Contact Updated At</div>
        <div class="detail-value"><?= strtotime($contact->contactUpdatedAt) ? date("d M y, H:i", strtotime($contact->contactUpdatedAt)) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Contact Identify</div>
        <div class="detail-value"><?= htmlspecialchars($contact->contactIdentify ?? "-") ?></div>
      </div>
    </div>
    <div class="detail-actions">
      <a href="<?= ROOT ?>/admin/contacts/<?= $contact->contactIdentify ?>/edit" class="action-btn">
        <i class="uil uil-edit"></i> Edit
      </a>
      <a href="<?= ROOT ?>/admin/contacts/<?= $contact->contactIdentify ?>/delete" class="action-btn">
        <i class="uil uil-trash-alt"></i> Delete
      </a>
    </div>
  </div>
  <?php else: ?>
  <p>No data found.</p>
  <?php endif; ?>
</div>
