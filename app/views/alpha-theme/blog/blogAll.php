<div class="dashboard">
  <div class="top-row">
    <h2>Blog</h2>
    <div class="action-buttons">
      <button class="btn" onclick="window.location='<?= ROOT ?>/admin/blog/create'"><i class="uil uil-plus-circle"></i> Create</button>
      <button class="btn secondary" onclick="window.location='<?= ROOT ?>/admin/blog/export'"><i class="uil uil-export"></i> Export</button>
      <button class="btn secondary" onclick="document.getElementById('importFile').click();"><i class="uil uil-import"></i> Import</button>
      <form action="<?= ROOT ?>/admin/blog/import" method="post" enctype="multipart/form-data" style="display: none;">
        <input type="file" name="file" id="importFile" onchange="this.form.submit()" />
      </form>
    </div>
  </div>
<div class="filter-sort-row">
<form method="GET" id="filterSortForm" class="filter-sort-form" onchange="this.submit()">
  <label for="sort_blogCreatedAt">Sort:</label>
  <select name="sort_blogCreatedAt" id="sort_blogCreatedAt" class="sort-select">
    <option value="">Clear</option>
    <option value="asc" <?= ($_GET["sort_blogCreatedAt"] ?? "") === "asc" ? "selected" : "" ?>>Title A–Z</option>
    <option value="desc" <?= ($_GET["sort_blogCreatedAt"] ?? "") === "desc" ? "selected" : "" ?>>Title Z–A</option>
  </select>
  <?php if (! empty($_GET["search"])): ?>
    <input type="hidden" name="search" value="<?= htmlspecialchars($_GET["search"]) ?>">
  <?php endif; ?>
</form>
</div>
  <div class="table-responsive">
    <table>
      <thead>
        <tr>
          <th><input type="checkbox" onclick="toggleAll(this)" /></th>
          <th>#</th>
          <th>Blog Id</th>
          <th>Title</th>
          <th>Slug</th>
          <th>Summary</th>
          <th>Content</th>
          <th>Category</th>
          <th>Tags</th>
          <th>Author Id</th>
          <th>View Count</th>
          <th>Is Featured</th>
          <th>Is Published</th>
          <th>Published At</th>
          <th>Meta Title</th>
          <th>Meta Description</th>
          <th>Blog Created At</th>
          <th>Blog Updated At</th>
          <th>Blog Identify</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody id="tableBody">
<?php if (!empty($blog)) : ?>
<?php foreach ($blog as $index => $blog) : ?>
        <tr>
          <td><input type="checkbox" class="row-check" name="selectedIds[]" value="<?= $blog->blogIdentify ?>" onchange="toggleTruncateBar()"></td>
          <td><?= $index + 1 ?></td>
          <td><?= isset($blog->blogId) ? htmlspecialchars($blog->blogId) : "-" ?></td>
          <td><?= isset($blog->title) ? htmlspecialchars($blog->title) : "-" ?></td>
          <td><?= isset($blog->slug) ? htmlspecialchars($blog->slug) : "-" ?></td>
          <td><?= isset($blog->summary) ? htmlspecialchars($blog->summary) : "-" ?></td>
          <td><?= isset($blog->content) ? htmlspecialchars($blog->content) : "-" ?></td>
          <td><?= isset($blog->category) ? htmlspecialchars($blog->category) : "-" ?></td>
          <td><?= isset($blog->tags) ? htmlspecialchars($blog->tags) : "-" ?></td>
          <td><?= isset($blog->authorId) ? htmlspecialchars($blog->authorId) : "-" ?></td>
          <td><?= isset($blog->viewCount) ? htmlspecialchars($blog->viewCount) : "-" ?></td>
          <td><?= isset($blog->isFeatured) ? htmlspecialchars($blog->isFeatured) : "-" ?></td>
          <td><?= isset($blog->isPublished) ? htmlspecialchars($blog->isPublished) : "-" ?></td>
          <td><?= strtotime($blog->publishedAt) ? date("d M y, H:i", strtotime($blog->publishedAt)) : "-" ?></td>
          <td><?= isset($blog->metaTitle) ? htmlspecialchars($blog->metaTitle) : "-" ?></td>
          <td><?= isset($blog->metaDescription) ? htmlspecialchars($blog->metaDescription) : "-" ?></td>
          <td><?= strtotime($blog->blogCreatedAt) ? date("d M y, H:i", strtotime($blog->blogCreatedAt)) : "-" ?></td>
          <td><?= strtotime($blog->blogUpdatedAt) ? date("d M y, H:i", strtotime($blog->blogUpdatedAt)) : "-" ?></td>
          <td><?= isset($blog->blogIdentify) ? htmlspecialchars($blog->blogIdentify) : "-" ?></td>
          <td>
            <div class="action-menu">
              <span onclick="toggleDropdown(this)">⋯</span>
              <div class="action-dropdown">
                <a href="<?= ROOT ?>/admin/blog/<?= $blog->blogIdentify ?>"><i class="uil uil-eye"></i> View</a>
                <a href="<?= ROOT ?>/admin/blog/<?= $blog->blogIdentify ?>/edit"><i class="uil uil-edit"></i> Edit</a>
                <a href="<?= ROOT ?>/admin/blog/<?= $blog->blogIdentify ?>/delete"><i class="uil uil-trash-alt"></i> Delete</a>
              </div>
            </div>
          </td>
        </tr>
<?php endforeach; ?>
<?php else : ?>
<tr class="no-data-row"><td colspan="20"><div class="no-data-box"><p class="no-data-message">No blog found.</p><a href="<?= ROOT ?>/admin/blog/create" class="no-data-action"><i class="uil uil-plus-circle"></i> Create New</a></div></td></tr>
<?php endif; ?>
      </tbody>
    </table>
  </div>
<div id="truncateBar" class="truncate-bar" style="margin-top: 10px;">
  <button class="btn danger" onclick="truncateAll()"><i class="uil uil-fire"></i> Truncate All</button>
  <button class="btn danger" onclick="truncateSelected()"><i class="uil uil-trash"></i> Truncate Selected</button>
  <form id="truncateForm" method="POST" action="<?= ROOT ?>/admin/blog/truncate" style="display: none;"></form>
</div>
<div class="pagination-container">
  <?php if (!empty($meta)) { renderPagination($meta); } ?>
</div>
