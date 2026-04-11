<div class="dashboard">
  <div class="top-row">
    <h2>Create New Contacts</h2>
    <a href="<?= ROOT ?>/admin/contacts" class="btn secondary">Back</a>
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
  <form method="post" action="<?= ROOT ?>/admin/contacts/store" enctype="multipart/form-data">
    <div class="form-grid">
    <div class="form-group">
      <label for="fullName">Full Name</label>
      <input type="text" id="fullName" name="fullName" required>
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="text" id="email" name="email" required>
    </div>
    <div class="form-group">
      <label for="phone">Phone</label>
      <input type="text" id="phone" name="phone" required>
    </div>
    <div class="form-group">
      <label for="subject">Subject</label>
      <input type="text" id="subject" name="subject" required>
    </div>
    <div class="form-group">
      <label for="message">Message</label>
      <input type="text" id="message" name="message" required>
    </div>
    <div class="form-group">
      <label for="source">Source</label>
      <input type="text" id="source" name="source" required>
    </div>
    <div class="form-group">
      <label for="ipAddress">Ip Address</label>
      <input type="text" id="ipAddress" name="ipAddress" required>
    </div>
    <div class="form-group">
      <label for="userAgent">User Agent</label>
      <input type="text" id="userAgent" name="userAgent" required>
    </div>
    <div class="form-group">
      <label for="isRead">Is Read</label>
      <input type="checkbox" id="isRead" name="isRead" value="1">
    </div>
    <div class="form-group">
      <label for="receivedAt">Received At</label>
      <input type="datetime-local" id="receivedAt" name="receivedAt" required>
    </div>
    </div>
    <div class="form-actions">
      <button type="submit" class="btn">Create</button>
      <a href="<?= ROOT ?>/admin/contacts" class="btn secondary">Cancel</a>
    </div>
  </form>
</div>
