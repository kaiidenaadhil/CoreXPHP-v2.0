<div class="search-container">
<form class="search-form" action="<?= ROOT ?>/admin/portfolio/" method="get">
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
<h3>Portfolio List</h3> <a href="<?= ROOT ?>/admin/portfolio/build" class="gradient-btn">add New portfolio</a>
</div>
<div class="data-table">
<div class="table-container">
<?php if (count($params['portfolio']) > 0): ?>
<table>
<thead>
<tr>
<th>#</th>
<th>Event Id</th>
<th>Gallery Image</th>
<th>Caption</th>
<th>Portfolio Created At</th>
<th>Actions</th>
</tr>
</thead>
<tbody>
<?php foreach($params['portfolio'] as $key => $portfolio): ?>
<tr>
<td><?= $key + 1 ?></td>
<td><?= $portfolio['eventId'] ?></td>
<td><?= $portfolio['galleryImage'] ?></td>
<td><?= $portfolio['caption'] ?></td>
<td><?= $portfolio['portfolioCreatedAt'] ?></td>
<td>
<a href="<?= ROOT ?>/admin/portfolio/<?= $portfolio['portfolioIdentify'] ?>">Show</a>
<a href="<?= ROOT ?>/admin/portfolio/<?= $portfolio['portfolioIdentify'] ?>/modify">Edit</a>
<a href="<?= ROOT ?>/admin/portfolio/<?= $portfolio['portfolioIdentify'] ?>/destroy">Delete</a>
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
<a href="<?= ROOT ?>/admin/portfolio/build">Add a Record.</a>
<?php endif; ?>
</div>
