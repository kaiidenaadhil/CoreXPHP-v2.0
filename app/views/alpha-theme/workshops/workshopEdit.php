<div class="dashboard">
  <div class="top-row">
    <h2>Edit Workshops</h2>
    <a href="<?= ROOT ?>/admin/workshops" class="btn secondary">Back</a>
  </div>
  <?php $workshops = $params["workshop"] ?? null; ?>
  <?php if ($workshops): ?>
  <?php if (!empty($errors)): ?>
  <div class="alert alert-danger">
    <ul>
      <?php foreach ($errors as $error): ?>
        <li><?= htmlspecialchars($error) ?></li>
      <?php endforeach; ?>
    </ul>
  </div>
  <?php endif; ?>
  <form method="post" action="<?= ROOT ?>/admin/workshops/<?= $workshops->workshopIdentify ?>/update" enctype="multipart/form-data">
    <div class="form-grid">
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" id="title" name="title" value="<?= $workshops->title ?? "" ?>" >
    </div>
    <div class="form-group">
      <label for="category">Category</label>
      <input type="text" id="category" name="category" value="<?= $workshops->category ?? "" ?>" >
    </div>
    <div class="form-group">
      <label for="location">Location</label>
      <input type="text" id="location" name="location" value="<?= $workshops->location ?? "" ?>" >
    </div>
    <div class="form-group">
      <label for="workshopType">Workshop Type</label>
      <select id="workshopType" name="workshopType" required>
        <option value="Online" <?= $workshops->workshopType == "Online" ? "selected" : "" ?>>Online</option>
        <option value="Offline" <?= $workshops->workshopType == "Offline" ? "selected" : "" ?>>Offline</option>
        <option value="Hybrid" <?= $workshops->workshopType == "Hybrid" ? "selected" : "" ?>>Hybrid</option>
      </select>
    </div>
    <div class="form-group">
      <label for="startDate">Start Date</label>
      <input type="datetime-local" id="startDate" name="startDate" value="<?= strtotime($workshops->startDate) ? date("Y-m-d\TH:i", strtotime($workshops->startDate)) : "" ?>" >
    </div>
    <div class="form-group">
      <label for="endDate">End Date</label>
      <input type="datetime-local" id="endDate" name="endDate" value="<?= strtotime($workshops->endDate) ? date("Y-m-d\TH:i", strtotime($workshops->endDate)) : "" ?>" >
    </div>
    <div class="form-group">
      <label for="description">Description</label>
      <input type="text" id="description" name="description" value="<?= $workshops->description ?? "" ?>" >
    </div>
    <div class="form-group">
      <label for="price">Price</label>
      <input type="checkbox" id="price" name="price" value="1" <?= $workshops->price ? "checked" : "" ?>>
    </div>
    <div class="form-group">
      <label for="maxSeats">Max Seats</label>
      <input type="number" id="maxSeats" name="maxSeats" value="<?= $workshops->maxSeats ?? "" ?>" >
    </div>
    <div class="form-group">
      <label for="isActive">Is Active</label>
      <input type="checkbox" id="isActive" name="isActive" value="1" <?= $workshops->isActive ? "checked" : "" ?>>
    </div>
    </div>
    <div class="form-actions">
      <button type="submit" class="btn">Update</button>
      <a href="<?= ROOT ?>/admin/workshops" class="btn secondary">Cancel</a>
    </div>
  </form>
  <?php else: ?>
    <p class="text-danger">Record not found.</p>
  <?php endif; ?>
</div>
