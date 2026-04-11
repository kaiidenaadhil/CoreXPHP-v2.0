<div class="dashboard">
  <div class="top-row">
    <h2>Create New Casestudies</h2>
    <a href="<?= ROOT ?>/admin/casestudies" class="btn secondary">Back</a>
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
  <form method="post" action="<?= ROOT ?>/admin/casestudies/store" enctype="multipart/form-data">
    <div class="form-grid">
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" id="title" name="title" >
    </div>
    <div class="form-group">
      <label for="slug">Slug</label>
      <input type="text" id="slug" name="slug" >
    </div>
    <div class="form-group">
      <label for="clientName">Client Name</label>
      <input type="text" id="clientName" name="clientName" >
    </div>
    <div class="form-group">
      <label for="industry">Industry</label>
      <input type="text" id="industry" name="industry" >
    </div>
    <div class="form-group">
      <label for="summary">Summary</label>
      <input type="text" id="summary" name="summary" >
    </div>
    <div class="form-group">
      <label for="challenges">Challenges</label>
      <input type="text" id="challenges" name="challenges" >
    </div>
    <div class="form-group">
      <label for="solution">Solution</label>
      <input type="text" id="solution" name="solution" >
    </div>
    <div class="form-group">
      <label for="results">Results</label>
      <input type="text" id="results" name="results" >
    </div>
    <div class="form-group">
      <label for="content">Content</label>
      <input type="text" id="content" name="content" >
    </div>
    <div class="form-group">
      <label for="authorId">Author Id</label>
      <input type="number" id="authorId" name="authorId" required>
    </div>
    <div class="form-group">
      <label for="isPublished">Is Published</label>
      <input type="checkbox" id="isPublished" name="isPublished" value="1">
    </div>
    <div class="form-group">
      <label for="publishedAt">Published At</label>
      <input type="datetime-local" id="publishedAt" name="publishedAt" required>
    </div>
    </div>
    <div class="form-actions">
      <button type="submit" class="btn">Create</button>
      <a href="<?= ROOT ?>/admin/casestudies" class="btn secondary">Cancel</a>
    </div>
  </form>
</div>
