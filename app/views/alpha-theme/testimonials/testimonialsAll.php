<div class="search-container">
<form class="search-form" action="<?= ROOT ?>/admin/testimonials/" method="get">
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
<h3>Testimonials List</h3> <a href="<?= ROOT ?>/admin/testimonials/build" class="gradient-btn">add New testimonials</a>
</div>
<div class="data-table">
<div class="table-container">
<?php if (count($params['testimonials']) > 0): ?>
<table>
<thead>
<tr>
<th>#</th>
<th>Client Id</th>
<th>Name</th>
<th>Message</th>
<th>Photo</th>
<th>Designation</th>
<th>Testimonial Created At</th>
<th>Actions</th>
</tr>
</thead>
<tbody>
<?php foreach($params['testimonials'] as $key => $testimonials): ?>
<tr>
<td><?= $key + 1 ?></td>
<td><?= $testimonials['clientId'] ?></td>
<td><?= $testimonials['name'] ?></td>
<td><?= $testimonials['message'] ?></td>
<td><?= $testimonials['photo'] ?></td>
<td><?= $testimonials['designation'] ?></td>
<td><?= $testimonials['testimonialCreatedAt'] ?></td>
<td>
<a href="<?= ROOT ?>/admin/testimonials/<?= $testimonials['testimonialIdentify'] ?>">Show</a>
<a href="<?= ROOT ?>/admin/testimonials/<?= $testimonials['testimonialIdentify'] ?>/modify">Edit</a>
<a href="<?= ROOT ?>/admin/testimonials/<?= $testimonials['testimonialIdentify'] ?>/destroy">Delete</a>
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
<a href="<?= ROOT ?>/admin/testimonials/build">Add a Record.</a>
<?php endif; ?>
</div>
