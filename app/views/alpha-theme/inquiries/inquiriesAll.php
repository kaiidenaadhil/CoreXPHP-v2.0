<div class="search-container">
<form class="search-form" action="<?= ROOT ?>/admin/inquiries/" method="get">
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
<h3>Inquiries List</h3> <a href="<?= ROOT ?>/admin/inquiries/build" class="gradient-btn">add New inquiries</a>
</div>
<div class="data-table">
<div class="table-container">
<?php if (count($params['inquiries']) > 0): ?>
<table>
<thead>
<tr>
<th>#</th>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Event Type</th>
<th>Message</th>
<th>Inquiry Created At</th>
<th>Actions</th>
</tr>
</thead>
<tbody>
<?php foreach($params['inquiries'] as $key => $inquiries): ?>
<tr>
<td><?= $key + 1 ?></td>
<td><?= $inquiries['name'] ?></td>
<td><?= $inquiries['email'] ?></td>
<td><?= $inquiries['phone'] ?></td>
<td><?= $inquiries['eventType'] ?></td>
<td><?= $inquiries['message'] ?></td>
<td><?= $inquiries['inquiryCreatedAt'] ?></td>
<td>
<a href="<?= ROOT ?>/admin/inquiries/<?= $inquiries['inquiryIdentify'] ?>">Show</a>
<a href="<?= ROOT ?>/admin/inquiries/<?= $inquiries['inquiryIdentify'] ?>/modify">Edit</a>
<a href="<?= ROOT ?>/admin/inquiries/<?= $inquiries['inquiryIdentify'] ?>/destroy">Delete</a>
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
<a href="<?= ROOT ?>/admin/inquiries/build">Add a Record.</a>
<?php endif; ?>
</div>
