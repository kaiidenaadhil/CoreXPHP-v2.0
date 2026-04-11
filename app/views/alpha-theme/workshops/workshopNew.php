<div class="dashboard">
  <div class="top-row">
    <h2>Create New Workshops</h2>
    <a href="<?= ROOT ?>/admin/workshops" class="btn secondary">Back</a>
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
  <form method="post" action="<?= ROOT ?>/admin/workshops/store" enctype="multipart/form-data">
    <div class="form-grid">
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" id="title" name="title" >
    </div>
    <div class="form-group">
      <label for="category">Category</label>
      <input type="text" id="category" name="category" >
    </div>
    <div class="form-group">
      <label for="location">Location</label>
      <input type="text" id="location" name="location" >
    </div>
    <div class="form-group">
      <label for="workshopType">Workshop Type</label>
      <select id="workshopType" name="workshopType" required>
        <option value="Online">Online</option>
        <option value="Offline">Offline</option>
        <option value="Hybrid">Hybrid</option>
      </select>
    </div>
    <div class="form-group">
      <label for="startDate">Start Date</label>
      <input type="datetime-local" id="startDate" name="startDate" >
    </div>
    <div class="form-group">
      <label for="endDate">End Date</label>
      <input type="datetime-local" id="endDate" name="endDate" >
    </div>
    <div class="form-group">
      <label for="description">Description</label>
      <input type="text" id="description" name="description" >
    </div>
    <div class="form-group">
      <label for="price">Price</label>
      <input type="checkbox" id="price" name="price" value="1">
    </div>
    <div class="form-group">
      <label for="maxSeats">Max Seats</label>
      <input type="number" id="maxSeats" name="maxSeats" >
    </div>
    <div class="form-group">
      <label for="isActive">Is Active</label>
      <input type="checkbox" id="isActive" name="isActive" value="1">
    </div>
    </div>
    <div class="form-actions">
      <button type="submit" class="btn">Create</button>
      <a href="<?= ROOT ?>/admin/workshops" class="btn secondary">Cancel</a>
    </div>
  </form>
</div>
