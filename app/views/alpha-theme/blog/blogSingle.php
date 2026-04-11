<div class="dashboard">
  <div class="top-row">
    <h2>Blog Details</h2>
    <a href="<?= ROOT ?>/admin/blog" class="btn secondary">Back</a>
  </div>

  <?php $blog = $params["blog"] ?? null; ?>
  <?php if ($blog): ?>
  <div class="detail-layout">
    <div class="detail-data">
      <div class="detail-row">
        <div class="detail-label">Blog Id</div>
        <div class="detail-value"><?= htmlspecialchars($blog->blogId ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Title</div>
        <div class="detail-value"><?= htmlspecialchars($blog->title ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Slug</div>
        <div class="detail-value"><?= htmlspecialchars($blog->slug ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Summary</div>
        <div class="detail-value"><?= htmlspecialchars($blog->summary ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Content</div>
        <div class="detail-value"><?= htmlspecialchars($blog->content ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Category</div>
        <div class="detail-value"><?= htmlspecialchars($blog->category ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Tags</div>
        <div class="detail-value"><?= htmlspecialchars($blog->tags ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Author Id</div>
        <div class="detail-value"><?= htmlspecialchars($blog->authorId ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">View Count</div>
        <div class="detail-value"><?= htmlspecialchars($blog->viewCount ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Is Featured</div>
        <div class="detail-value"><?= htmlspecialchars($blog->isFeatured ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Is Published</div>
        <div class="detail-value"><?= htmlspecialchars($blog->isPublished ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Published At</div>
        <div class="detail-value"><?= strtotime($blog->publishedAt) ? date("d M y, H:i", strtotime($blog->publishedAt)) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Meta Title</div>
        <div class="detail-value"><?= htmlspecialchars($blog->metaTitle ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Meta Description</div>
        <div class="detail-value"><?= htmlspecialchars($blog->metaDescription ?? "-") ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Blog Created At</div>
        <div class="detail-value"><?= strtotime($blog->blogCreatedAt) ? date("d M y, H:i", strtotime($blog->blogCreatedAt)) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Blog Updated At</div>
        <div class="detail-value"><?= strtotime($blog->blogUpdatedAt) ? date("d M y, H:i", strtotime($blog->blogUpdatedAt)) : "-" ?></div>
      </div>
      <div class="detail-row">
        <div class="detail-label">Blog Identify</div>
        <div class="detail-value"><?= htmlspecialchars($blog->blogIdentify ?? "-") ?></div>
      </div>
    </div>
    <div class="detail-actions">
      <a href="<?= ROOT ?>/admin/blog/<?= $blog->blogIdentify ?>/edit" class="action-btn">
        <i class="uil uil-edit"></i> Edit
      </a>
      <a href="<?= ROOT ?>/admin/blog/<?= $blog->blogIdentify ?>/delete" class="action-btn">
        <i class="uil uil-trash-alt"></i> Delete
      </a>
    </div>
  </div>
  <?php else: ?>
  <p>No data found.</p>
  <?php endif; ?>
</div>
