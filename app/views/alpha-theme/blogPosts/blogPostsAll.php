<div class="search-container">
<form class="search-form" action="<?= ROOT ?>/admin/blogPosts/" method="get">
<input type="text" name="search" placeholder="Search">
<button type="submit" class="gradient-btn">Search</button>
</form>
</div>
<div class="data-info">
<?php if (isset($_SESSION['success_message'])): ?>
<p><?= $_SESSION['success_message'] ?></p>
<?php unset($_SESSION['success_message']); ?>
<?php endif; ?>
</div>
<div class="data-info">
<h3>Blog Posts List</h3> <a href="<?= ROOT ?>/admin/blogPosts/build" class="gradient-btn">add New blogPosts</a>
</div>
<div class="data-table">
<div class="table-container">
<?php if (count($params['blogPosts']) > 0): ?>
<table>
<thead>
<tr>
<th>#</th>
<th>Title</th>
<th>Slug</th>
<th>Content</th>
<th>Cover Image</th>
<th>Status</th>
<th>Blog Post Created At</th>
<th>Actions</th>
</tr>
</thead>
<tbody>
<?php foreach($params['blogPosts'] as $key => $blogPosts): ?>
<tr>
<td><?= $key + 1 ?></td>
<td><?= $blogPosts['title'] ?></td>
<td><?= $blogPosts['slug'] ?></td>
<td><?= $blogPosts['content'] ?></td>
<td><?= $blogPosts['coverImage'] ?></td>
<td><?= $blogPosts['status'] ?></td>
<td><?= $blogPosts['blogPostCreatedAt'] ?></td>
<td>
<a href="<?= ROOT ?>/admin/blogPosts/<?= $blogPosts['blogPostIdentify'] ?>">Show</a>
<a href="<?= ROOT ?>/admin/blogPosts/<?= $blogPosts['blogPostIdentify'] ?>/modify">Edit</a>
<a href="<?= ROOT ?>/admin/blogPosts/<?= $blogPosts['blogPostIdentify'] ?>/destroy">Delete</a>
</td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
</div>
</div>
<div class="pagination-container">
<?= $params["pagination"] ?>
</div>
<?php else: ?>
<p>No Record to Display.</p>
<a href="<?= ROOT ?>/admin/blogPosts/build">Add a Record.</a>
<?php endif; ?>
</div>
