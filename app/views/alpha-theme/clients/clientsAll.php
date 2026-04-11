<div class="search-container">
<form class="search-form" action="<?= ROOT ?>/admin/clients/" method="get">
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
<h3>Clients List</h3> <a href="<?= ROOT ?>/admin/clients/build" class="gradient-btn">add New clients</a>
</div>
<div class="data-table">
<div class="table-container">
<?php if (count($params['clients']) > 0): ?>
<table>
<thead>
<tr>
<th>#</th>
<th>Name</th>
<th>Logo</th>
<th>Company Type</th>
<th>Status</th>
<th>Client Created At</th>
<th>Actions</th>
</tr>
</thead>
<tbody>
<?php foreach($params['clients'] as $key => $clients): ?>
<tr>
<td><?= $key + 1 ?></td>
<td><?= $clients['name'] ?></td>
<td><?= $clients['logo'] ?></td>
<td><?= $clients['companyType'] ?></td>
<td><?= $clients['status'] ?></td>
<td><?= $clients['clientCreatedAt'] ?></td>
<td>
<a href="<?= ROOT ?>/admin/clients/<?= $clients['clientIdentify'] ?>">Show</a>
<a href="<?= ROOT ?>/admin/clients/<?= $clients['clientIdentify'] ?>/modify">Edit</a>
<a href="<?= ROOT ?>/admin/clients/<?= $clients['clientIdentify'] ?>/destroy">Delete</a>
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
<a href="<?= ROOT ?>/admin/clients/build">Add a Record.</a>
<?php endif; ?>
</div>
