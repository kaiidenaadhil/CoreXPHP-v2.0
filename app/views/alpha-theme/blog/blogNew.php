<div class="dashboard">
  <div class="top-row">
    <h2>Create New Blog</h2>
    <a href="<?= ROOT ?>/admin/blog" class="btn secondary">Back</a>
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
  <form method="post" action="<?= ROOT ?>/admin/blog/store" enctype="multipart/form-data">
    <div class="form-grid">
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" id="title" name="title" required>
    </div>
    <div class="form-group">
      <label for="slug">Slug</label>
      <input type="text" id="slug" name="slug" required>
    </div>
    <div class="form-group">
      <label for="summary">Summary</label>
      <input type="text" id="summary" name="summary" required>
    </div>
    <div class="form-group">
      <label for="content">Content</label>
      <input type="text" id="content" name="content" required>
    </div>
    <div class="form-group">
      <label for="category">Category</label>
      <input type="text" id="category" name="category" required>
    </div>
    <div class="form-group">
      <label for="tags">Tags</label>
      <input type="text" id="tags" name="tags" required>
    </div>
    <div class="form-group">
      <label for="authorId">Author Id</label>
      <input type="number" id="authorId" name="authorId" required>
    </div>
    <div class="form-group">
      <label for="viewCount">View Count</label>
      <input type="number" id="viewCount" name="viewCount" required>
    </div>
    <div class="form-group">
      <label for="isFeatured">Is Featured</label>
      <input type="checkbox" id="isFeatured" name="isFeatured" value="1">
    </div>
    <div class="form-group">
      <label for="isPublished">Is Published</label>
      <input type="checkbox" id="isPublished" name="isPublished" value="1">
    </div>
    <div class="form-group">
      <label for="publishedAt">Published At</label>
      <input type="datetime-local" id="publishedAt" name="publishedAt" required>
    </div>
    <div class="form-group">
      <label for="metaTitle">Meta Title</label>
      <input type="text" id="metaTitle" name="metaTitle" required>
    </div>
    <div class="form-group">
      <label for="metaDescription">Meta Description</label>
      <input type="text" id="metaDescription" name="metaDescription" required>
    </div>
    </div>
    <div class="form-actions">
      <button type="submit" class="btn">Create</button>
      <a href="<?= ROOT ?>/admin/blog" class="btn secondary">Cancel</a>
    </div>
  </form>
</div>
