<div class="dashboard">
  <div class="top-row">
    <h2>Edit Contacts</h2>
    <a href="<?= ROOT ?>/admin/contacts" class="btn secondary">Back</a>
  </div>
  <?php $contacts = $params["contact"] ?? null; ?>
  <?php if ($contacts): ?>
  <?php if (!empty($errors)): ?>
  <div class="alert alert-danger">
    <ul>
      <?php foreach ($errors as $error): ?>
        <li><?= htmlspecialchars($error) ?></li>
      <?php endforeach; ?>
    </ul>
  </div>
  <?php endif; ?>
  <form method="post" action="<?= ROOT ?>/admin/contacts/<?= $contacts->contactIdentify ?>/update" enctype="multipart/form-data">
    <div class="form-grid">
    <div class="form-group">
      <label for="fullName">Full Name</label>
      <input type="text" id="fullName" name="fullName" value="<?= $contacts->fullName ?? "" ?>" required>
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="text" id="email" name="email" value="<?= $contacts->email ?? "" ?>" required>
    </div>
    <div class="form-group">
      <label for="phone">Phone</label>
      <input type="text" id="phone" name="phone" value="<?= $contacts->phone ?? "" ?>" required>
    </div>
    <div class="form-group">
      <label for="subject">Subject</label>
      <input type="text" id="subject" name="subject" value="<?= $contacts->subject ?? "" ?>" required>
    </div>
    <div class="form-group">
      <label for="message">Message</label>
      <input type="text" id="message" name="message" value="<?= $contacts->message ?? "" ?>" required>
    </div>
    <div class="form-group">
      <label for="source">Source</label>
      <input type="text" id="source" name="source" value="<?= $contacts->source ?? "" ?>" required>
    </div>
    <div class="form-group">
      <label for="ipAddress">Ip Address</label>
      <input type="text" id="ipAddress" name="ipAddress" value="<?= $contacts->ipAddress ?? "" ?>" required>
    </div>
    <div class="form-group">
      <label for="userAgent">User Agent</label>
      <input type="text" id="userAgent" name="userAgent" value="<?= $contacts->userAgent ?? "" ?>" required>
    </div>
    <div class="form-group">
      <label for="isRead">Is Read</label>
      <input type="checkbox" id="isRead" name="isRead" value="1" <?= $contacts->isRead ? "checked" : "" ?>>
    </div>
    <div class="form-group">
      <label for="receivedAt">Received At</label>
      <input type="datetime-local" id="receivedAt" name="receivedAt" value="<?= strtotime($contacts->receivedAt) ? date("Y-m-d\TH:i", strtotime($contacts->receivedAt)) : "" ?>" required>
    </div>
    </div>
    <div class="form-actions">
      <button type="submit" class="btn">Update</button>
      <a href="<?= ROOT ?>/admin/contacts" class="btn secondary">Cancel</a>
    </div>
  </form>
  <?php else: ?>
    <p class="text-danger">Record not found.</p>
  <?php endif; ?>
</div>
