<div class="dashboard">
  <div class="top-row">
    <h2>Edit Blog</h2>
    <a href="<?= ROOT ?>/admin/blog" class="btn secondary">Back</a>
  </div>
  <?php $blog = $params["blog"] ?? null; ?>
  <?php if ($blog): ?>
  <?php if (!empty($errors)): ?>
  <div class="alert alert-danger">
    <ul>
      <?php foreach ($errors as $error): ?>
        <li><?= htmlspecialchars($error) ?></li>
      <?php endforeach; ?>
    </ul>
  </div>
  <?php endif; ?>
  <form method="post" action="<?= ROOT ?>/admin/blog/<?= $blog->blogIdentify ?>/update" enctype="multipart/form-data">
    <div class="form-grid">
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" id="title" name="title" value="<?= $blog->title ?? "" ?>" required>
    </div>
    <div class="form-group">
      <label for="slug">Slug</label>
      <input type="text" id="slug" name="slug" value="<?= $blog->slug ?? "" ?>" required>
    </div>
    <div class="form-group">
      <label for="summary">Summary</label>
      <input type="text" id="summary" name="summary" value="<?= $blog->summary ?? "" ?>" required>
    </div>
    <div class="form-group">
      <label for="content">Content</label>
      <input type="text" id="content" name="content" value="<?= $blog->content ?? "" ?>" required>
    </div>
    <div class="form-group">
      <label for="category">Category</label>
      <input type="text" id="category" name="category" value="<?= $blog->category ?? "" ?>" required>
    </div>
    <div class="form-group">
      <label for="tags">Tags</label>
      <input type="text" id="tags" name="tags" value="<?= $blog->tags ?? "" ?>" required>
    </div>
    <div class="form-group">
      <label for="authorId">Author Id</label>
      <input type="number" id="authorId" name="authorId" value="<?= $blog->authorId ?? "" ?>" required>
    </div>
    <div class="form-group">
      <label for="viewCount">View Count</label>
      <input type="number" id="viewCount" name="viewCount" value="<?= $blog->viewCount ?? "" ?>" required>
    </div>
    <div class="form-group">
      <label for="isFeatured">Is Featured</label>
      <input type="checkbox" id="isFeatured" name="isFeatured" value="1" <?= $blog->isFeatured ? "checked" : "" ?>>
    </div>
    <div class="form-group">
      <label for="isPublished">Is Published</label>
      <input type="checkbox" id="isPublished" name="isPublished" value="1" <?= $blog->isPublished ? "checked" : "" ?>>
    </div>
    <div class="form-group">
      <label for="publishedAt">Published At</label>
      <input type="datetime-local" id="publishedAt" name="publishedAt" value="<?= strtotime($blog->publishedAt) ? date("Y-m-d\TH:i", strtotime($blog->publishedAt)) : "" ?>" required>
    </div>
    <div class="form-group">
      <label for="metaTitle">Meta Title</label>
      <input type="text" id="metaTitle" name="metaTitle" value="<?= $blog->metaTitle ?? "" ?>" required>
    </div>
    <div class="form-group">
      <label for="metaDescription">Meta Description</label>
      <input type="text" id="metaDescription" name="metaDescription" value="<?= $blog->metaDescription ?? "" ?>" required>
    </div>
    </div>
    <div class="form-actions">
      <button type="submit" class="btn">Update</button>
      <a href="<?= ROOT ?>/admin/blog" class="btn secondary">Cancel</a>
    </div>
  </form>
  <?php else: ?>
    <p class="text-danger">Record not found.</p>
  <?php endif; ?>
</div>
